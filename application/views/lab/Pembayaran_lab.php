<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_lab extends CI_Controller {

	/*

	Author 		: Sisepus 
	Date 		: 14-05-2018

	*/

	public $menuID 	= 7;
	public $name 	= 'Pembayaran Lab';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_bayar_lab');
		$this->load->model('M_menu_lab');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');		

		
	}

	public function ajax(){
		$get_lab = $this->M_bayar_lab->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_lab);
	}
	
	
	public function search(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->M_hasil_lab->kd_pasien($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
		'umur' => $pasien->UMUR,
		'pemeriksaan' => $pasien->PEMERIKSAAN_LAB,
		'bpjs'		=> $pasien->NO_BPJS,
		'id_poli' => $pasien->ID_DAFTAR_LAB,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	
	function get_list_dokter(){
		$list_dokter = $this->M_hasil_lab->m_get_list_dokter();
		echo json_encode($list_dokter);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_lab->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('lab/header1');
		$this->load->view('lab/data_hasil_lab',$data);
	}

	public function add(){
		$data['menu_link'] = $this->M_menu_lab->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['gigi'] 	= $this->M_hasil_lab->create_no_transaction();	
		$this->load->view('lab/header1');
		$this->load->view('lab/new_hasil_lab',$data);
		$this->load->view('lab/footer');
	}

	public function preview($id_hasil_lab){

		$data['menu_link'] 	= $this->M_menu_lab->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_hasil_lab->m_get_group($id_hasil_lab);
		$this->load->view('lab/header1');
		$this->load->view('lab/prev_hasil_lab',$data);
		$this->load->view('lab/footer');
	}

	public function insert(){
	
        date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_hasil 		    = $this->input->post('id_hasil');	
		$kd_pasien		 	= $this->input->post('kd_pasien');
		$nama 				= $this->input->post('nm_lengkap');
		$umur			 	= $this->input->post('umur');
		$pemeriksaan 			= $this->input->post('pemeriksaan');
		$bpjs 			= $this->input->post('bpjs');
	    $dokter				= $this->input->post('id_dokter');
		$id_daftar		    = $this->input->post('id_poli');
		$detail1 			= $this->input->post('detail');
		$detail 			= json_decode($detail1);

			$this->db->trans_begin();

			$this->insert_lab($id_hasil,$kd_pasien,$nama,$umur,$pemeriksaan,$bpjs,$dokter,$id_daftar,$date);
			$this->insert_detail($id_hasil,$pemeriksaan,$kd_pasien,$detail,$date);
			if ($this->db->trans_status() === TRUE) {
				$this->db->trans_commit();
				$result['status'] 	= TRUE;
				$result['message']	= get_notification('insert',1);
			}
			else{
				$this->db->trans_rollback();
				$result['status'] 	= FALSE;
				$result['message']	= get_notification('insert',0);
			}

		echo json_encode($result);
	}

	function insert_lab($id_hasil,$kd_pasien,$nama,$umur,$pemeriksaan,$bpjs,$dokter,$id_daftar,$date){
		$data_lab = array(
						'ID_HASIL_LAB' 			=> $id_hasil,
						'KODE_PASIEN' 			=> $kd_pasien,
						'NAMA_LENGKAP' 			=> $nama,
						'UMUR'				=> $umur,
						'NO_BPJS' 			=> $bpjs,
						'TGL_HASIL' 		=> $date,
						'PEMERIKSAAN_LAB'	=> $pemeriksaan,
						'ID_DOKTER'			=> $dokter,
						'ID_DAFTAR_LAB' 	=> $id_daftar,
						'status' 	  		=> 0,
						'ID_USER' 			=> 17);

		$this->M_hasil_lab->m_insert_lab($data_lab);
	}

	function insert_detail($id_hasil,$pemeriksaan,$kd_pasien,$detail,$date){

		foreach($detail as $row){

			$data_detail = array(
							'ID_HASIL_LAB' 		=> $id_hasil,
							'TGL_HASIL'      	=> $date,
							'PEMERIKSAAN_LAB' 	=> $pemeriksaan,
							'ID_CEK_LAB'		=> $row->ID_CEK_LAB,
							'CEK_SATUAN' 		=> $row->PRIKSA,
							'HASIL' 			=> $row->HASIL,
							'NILAI_NORMAL' 		=> $row->NILAI_NORMAL,
							'SATUAN'			=> $row->SATUAN,
							'KODE_PASIEN'   => $kd_pasien,
							'status'        => 0,
							'ID_USER'		=> 17);
			
			$this->M_hasil_lab->m_insert_detail($data_detail);

		}
	}

	public function update(){

		$txt_date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$pq_number 			= $this->input->post('pq_number');
		$department_code 	= $this->input->post('department_code');
		$vendor_code 		= $this->input->post('vendor_code');
		$warehouse_code 	= $this->input->post('warehouse_code');
		$txt_desc 			= $this->input->post('txt_desc');
		$total_qty 			= $this->input->post('total_qty');
		$detail 			= $this->input->post('detail');
		$detail 			= json_decode($detail);	

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		$this->update_group($txt_date,$pq_number,$warehouse_code,$vendor_code,$department_code,$total_qty,$txt_desc);
		$this->m_purchase_request->delete_detail($pq_number);
		$this->insert_detail($pq_number,$detail);

		if ($this->db->trans_status() === TRUE) {
			$this->db->trans_commit();
			$result['status'] 	= TRUE;
			$result['message']	= get_notification('update',1);
		}
		else{
			$this->db->trans_rollback();
			$result['status'] 	= FALSE;
			$result['message']	= get_notification('update',0);
		}

		echo json_encode($result);

	}

	function update_group($txt_date,$pq_number,$warehouse_code,$vendor_code,$department_code,$total_qty,$txt_desc){
		$data_group = array(
						'TotalQTY' 		=> $total_qty,
						'PQDesc' 		=> $txt_desc,
						'VendorCode' 	=> $vendor_code,
						'WarehouseCode'	=> $warehouse_code,
						'DepartmentCode'=> $department_code,
						'TransStatus' 	=> 0,
						'AppFinished' 	=> 0,
						'LastUser' 		=> $this->session->userdata('usercode'));

		$this->m_purchase_request->m_update_group($data_group,$pq_number);
	}
	
	function suspend_data(){
		$no_transaction 	= $this->input->post('transaction_no');

		$data_suspend = array('TransStatus'=>3,'AppFinished'=>0);

		$this->db->trans_begin();

		$this->m_purchase_request->m_suspend_data($data_suspend,$no_transaction);

		if ($this->db->trans_status() === TRUE) {
			$this->db->trans_commit();
			$result['status'] 	= TRUE;
			$result['message']	= get_notification('suspend',1);
		}
		else{
			$this->db->trans_rollback();
			$result['status'] 	= FALSE;
			$result['message']	= get_notification('suspend',0);
		}

		echo json_encode($result);
	}


	function get_list_lab(){
		$id_cek			= ($this->input->post('id_cek')) ? $this->input->post('id_cek'):'';
		$pemeriksaan 	= ($this->input->post('pemeriksaan')) ? $this->input->post('pemeriksaan'):'';

		$list_lab 		= $this->M_hasil_lab->m_get_list_lab($id_cek,$pemeriksaan);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_lab);
	}

	function get_detail_lab($id_hasil_lab){
		$list_detail = $this->M_hasil_lab->m_get_detail($id_hasil_lab);
		echo json_encode($list_detail);
	}

	

	function print_preview($id_hasil_lab){

		include(APPPATH . 'libraries/mpdf/mpdf.php');
         $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $group_rs		= $this->M_hasil_lab->get_group_lab($id_hasil_lab);

        $detail_rs 		= $this->M_hasil_lab->get_detail_lab($id_hasil_lab);
		
        $total_baris 	= $this->M_hasil_lab->count_detail_lab($id_hasil_lab); 
        $max_baris 		= 20;

        if($total_baris <= $max_baris){

	        $html = "
	        	<html>
	        	<head>
	        	<style='text/css'>
	        		.bdr-left{
						border-left:1px solid black;
					}
					.bdr-right{
						border-right:1px solid black;
					}
					.bdr-top{
						border-top:1px solid black;
					}
					.bdr-bottom{
						border-bottom:1px solid black;
					}
					.body-report{
						font-size:8px
					}
					.head-table{
						font-size:14px;
					}

					.content-table{
						font-size:100%;
					}
	        	</style>
	        	</head>
	        	<body>
	        	<table width='100%' class='head-table'>
	        		<tr>
	        		<td valign='top' width='50%' align='left'>	
	        			<img src='".base_url('assets/Logo2.PNG')."' width='220' height='170'>
	        			<h2>Puskesmas Kec.Sawah besar</h2>	
						<h3>Jl.mangga dua dalam K no.13,kel.mangga dua selatan</h3>	        		
		        		<h2>Telp : 021-6256101 </h2>
	        		</td>
	        		<td valign='top' width='80%' align='center'>
		        			<br>
		        		<p style=font-size:35px><b>Hasil Pemeriksaan Laboratorium</b></p>
		        		</td>
	        			<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        		</td>
	        		</tr>
		        </table>";




		    $html .= "<table width='100%'>"
		    		."<tr>"
		    			."<td valign='top' width='40%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='40%'>Id Hasil Lab</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->ID_HASIL_LAB</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='40%'>Kode Pasien</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->KODE_PASIEN</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='40%'>Nama Pasien</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->NAMA_LENGKAP</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    			."<td valign='top' width='60%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Umur</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->UMUR</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Pemeriksaan</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->PEMERIKSAAN_LAB</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Nama Dokter</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->dokter</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    		."</tr>"
		    		."</table>";

		    $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
		    		."<tr>"
		    		."<th width='5%' align='center' class=' bdr-bottom bdr-left bdr-top'>No</th>"
		    		."<th width='15%' align='center' class=' bdr-bottom bdr-left bdr-top'>Id Cek Lab</th>"
		    		."<th width='30%' align='center' class=' bdr-bottom bdr-left bdr-top'>Priksa</th>"
		    		."<th align='center' width='15%' class=' bdr-bottom bdr-left bdr-top'>Hasil</th>"
		    		."<th align='center' width='15%' class=' bdr-bottom bdr-left bdr-top'>Nilai Normal</th>"
		    		."<th align='center' width='20%' class=' bdr-bottom bdr-left bdr-top bdr-right'>Satuan</th>"
		    		."</tr>";
		    	$no = 1;

	        	foreach($detail_rs as $row){
	        		$html .= "<tr class='body-report'>"
	        			."<td align='center' class='bdr-left'>".($no++)."</td>"
	        			."<td align='center'>$row->ID_CEK_LAB</td>"
	        			."<td align='center'>".substr($row->CEK_SATUAN, 0,35)."</td>"
	        			."<td align='center'>$row->HASIL</td>"
	        			."<td align='center'>$row->NILAI_NORMAL</td>"
	        			."<td align='center' class='bdr-right'>$row->SATUAN</td>"
	        			."</tr>";
	        	}

	        	$sisa_baris = $max_baris - $total_baris;

	        	if($sisa_baris > 0){
	        		for ($i=0; $i < ($sisa_baris - 1) ; $i++) { 
	        			$html .= "<tr><td colspan='8' height='25' class='bdr-right bdr-left'></td></tr>";
	        		}
	        		$html .= "<tr><td colspan='8' class='bdr-bottom bdr-left bdr-right'></td></tr>";
	        	}else{

	        		$html .= "<tr><td colspan='8' class='bdr-bottom bdr-left bdr-right'></td></tr>";
	        	}

	        	$html .= "<tr>"
	        			."<td colspan='3' class='' valign='top'>"
	        				."<p>"
	        			."</td>"
	        			."</tr>"
	        			."<tr>"
	        			."<td colspan='6' valign='top'>"
	        				."<table>"
			    			."<tr>"
			    				."<td align='center'>Dibuat Oleh</td>"
			    				."<td align='center'>Diterima Oleh</td>"
			    			."</tr>"
			    			."<tr>"
			    				."<td height='120'>".$group_rs->dokter."&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td height='120'>_________________&#x20;&#xA0;&#160;&nbsp;</td>"
			    			."</tr>"
			    			."</table>"
	        			."</td>"
	        			."</tr>"
	        			."<tr>"
	        			."<td colspan='6' class='' valign='top'>"
	        				."<p>Rimeks : "
	        				."<span style='font-size:10px;'>Segera Konsultasikan hasilnya ke dokter</span></p>"
	        			."</td>";

	    	$html .= "</table>
	    	</body>
	    	</head>
	    	</html>";
	        
	         $mpdf->WriteHTML($html);

	         $mpdf->Output('Hasil_lab.pdf', 'I');
	    }else{

	    	$total_page 	= ceil($total_baris / $max_baris);
    		$sisa_baris 	= $total_baris % $max_baris;

    		for($Page=1;$Page<=$total_page;$Page++){
	    		if($Page < $total_page){
	    			$html = "<html><head>
	    					<style='text/css'>
				        		.bdr-left{
									border-left:1px solid black;
								}
								.bdr-right{
									border-right:1px solid black;
								}
								.bdr-top{
									border-top:1px solid black;
								}
								.bdr-bottom{
									border-bottom:1px solid black;
								}
								.body-report{
									font-size:8px
								}
								.head-table{
									font-size:16px
								}
								.content-table{
									font-size:100%
								}
	        				</style>
	        				</head>
	        				<body>
	        					<table width='100%' clasa='head-table'>
						          <tr>
	        					   <td valign='top' width='50%' align='left'>	
	        						 <img src='".base_url('assets/Logo2.PNG')."' width='220' height='170'>
	        						  <h2>Puskesmas Kec.Sawah besar</h2>	
									  <h3>Jl.mangga dua dalam K no.13,kel.mangga dua selatan</h3>	        		
		        				     <h2>Telp : 021-6256101 </h2>
	        					   </td>
	        					<td valign='top' width='80%' align='center'>
		        				<br>
		        				 <p style=font-size:35px><b>Pengambilan Obat</b></p>
		        				</td>
	        					<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        		</td>
	        		</tr>
							        </table>";
							$html .= "<table width='100%'>"
			    		."<tr>"
			    			."<td valign='top' width='40%'>"
			    				."<table width='100%'>"
			    					."<tr>"
			    					."<td width='40%'>Id Hasil Lab</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->ID_HASIL_LAB</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='40%'>Kode Pasien</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->KODE_PASIEN</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='40%'>Nama Pasien</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->NAMA_LENGKAP</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    			."<td valign='top' width='60%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Umur</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->UMUR</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Pemeriksaan</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->PEMERIKSAAN_LAB</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Nama Dokter</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->dokter</td>"
		    					."</tr>"
			    				."</table>"
			    			."</td>"
			    		."</tr>"
			    		."</table>";

					    $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
		    		."<tr>"
		    		."<th width='5%' align='center' class=' bdr-bottom bdr-left bdr-top'>No</th>"
		    		."<th width='15%' align='center' class=' bdr-bottom bdr-left bdr-top'>Id Cek Lab</th>"
		    		."<th width='30%' align='center' class=' bdr-bottom bdr-left bdr-top'>Priksa</th>"
		    		."<th align='center' width='15%' class=' bdr-bottom bdr-left bdr-top'>Hasil</th>"
		    		."<th align='center' width='15%' class=' bdr-bottom bdr-left bdr-top'>Nilai Normal</th>"
		    		."<th align='center' width='20%' class=' bdr-bottom bdr-left bdr-top bdr-right'>Satuan</th>"
		    		."</tr>";

					    	$min_list = ($Page - 1) * $max_baris;
					    	$max_list = $min_list > 0 ? ($min_list + $max_baris): $max_baris;
					    	$no 	  = 0;

				        	foreach($detail_po as $row){
				        		if($no==$min_list){
						        	if($min_list<$max_list){
						        		$html .= "<tr class='body-report'>"
						        			."<td align='left' class='bdr-left'>".($min_list+1)."</td>"
						        			."<td align='center'>$row->ID_CEK_LAB</td>"
											."<td align='center'>".substr($row->CEK_SATUAN, 0,35)."</td>"
											."<td align='center'>$row->HASIL</td>"
											."<td align='center'>$row->NILAI_NORMAL</td>"
											."<td align='center' class='bdr-right'>$row->SATUAN</td>"
						        			."</tr>";
						        	}

						        	$min_list++;
					        	}

					        	$no++;
					        }

					$html .= "<tr><td colspan='8' class='bdr-bottom bdr-left bdr-right'></td></tr>";
					$html .= "</table>
			    	</body>
			    	</head>
			    	</html>";
			        
			         $mpdf->WriteHTML($html);
			         $mpdf->AddPage();
			}else{
				$html = "<html><head>
	    					<style='text/css'>
				        		.bdr-left{
									border-left:1px solid black;
								}
								.bdr-right{
									border-right:1px solid black;
								}
								.bdr-top{
									border-top:1px solid black;
								}
								.bdr-bottom{
									border-bottom:1px solid black;
								}
								.body-report{
									font-size:8px
								}
								.head-table{
									font-size:16px
								}
								.content-table{
									font-size:100%
								}
	        				</style>
	        				</head>
	        				<body>
	        					<table width='100%' class='head-table'>
				        		 <tr>
	        					   <td valign='top' width='50%' align='left'>	
	        						 <img src='".base_url('assets/Logo2.PNG')."' width='220' height='170'>
	        						  <h2>Puskesmas Kec.Sawah besar</h2>	
									  <h3>Jl.mangga dua dalam K no.13,kel.mangga dua selatan</h3>	        		
		        				     <h2>Telp : 021-6256101 </h2>
	        					   </td>
	        					<td valign='top' width='80%' align='center'>
		        				<br>
		        				 <p style=font-size:35px><b>Pengambilan Obat</b></p>
		        				</td>
	        					<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        		</td>
	        		</tr>
					        </table>";
							$html .= "<table width='100%'>"
			    		."<tr>"
			    			."<td valign='top' width='40%'>"
			    				."<table width='100%'>"
			    					."<tr>"
			    					."<td width='40%'>Id Hasil Lab</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->ID_HASIL_LAB</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='40%'>Kode Pasien</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->KODE_PASIEN</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='40%'>Nama Pasien</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->NAMA_LENGKAP</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    			."<td valign='top' width='60%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Umur</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->UMUR</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Pemeriksaan</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->PEMERIKSAAN_LAB</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Nama Dokter</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->dokter</td>"
		    					."</tr>"
			    				."</table>"
			    			."</td>"
			    		."</tr>"
			    		."</table>";

					     $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
		    		."<tr>"
		    		."<th width='5%' align='center' class=' bdr-bottom bdr-left bdr-top'>No</th>"
		    		."<th width='15%' align='center' class=' bdr-bottom bdr-left bdr-top'>Id Cek Lab</th>"
		    		."<th width='30%' align='center' class=' bdr-bottom bdr-left bdr-top'>Priksa</th>"
		    		."<th align='center' width='15%' class=' bdr-bottom bdr-left bdr-top'>Hasil</th>"
		    		."<th align='center' width='15%' class=' bdr-bottom bdr-left bdr-top'>Nilai Normal</th>"
		    		."<th align='center' width='20%' class=' bdr-bottom bdr-left bdr-top bdr-right'>Satuan</th>"
		    		."</tr>";

					    	$min_list = ($Page - 1) * $max_baris;
					    	$max_list = $min_list > 0 ? ($min_list + $max_baris): $max_baris;
					    	$no 	  = 0;

				        	foreach($detail_po as $row){
				        		if($no==$min_list){
						        	if($min_list<$max_list){
						        		$html .= "<tr class='body-report'>"
						        			."<td align='left' class='bdr-left'>".($min_list+1)."</td>"
						        			."<td align='center'>$row->ID_CEK_LAB</td>"
											."<td align='center'>".substr($row->CEK_SATUAN, 0,35)."</td>"
											."<td align='center'>$row->HASIL</td>"
											."<td align='center'>$row->NILAI_NORMAL</td>"
											."<td align='center' class='bdr-right'>$row->SATUAN</td>"
						        			."</tr>";
						        	}

						        	$min_list++;
					        	}


					        	$no++;
					        }

					$sisa_baris = $max_baris - $sisa_baris;
		        	if($sisa_baris > 0){
		        		for ($i=0; $i < ($sisa_baris - 1) ; $i++) { 
		        			$html .= "<tr><td colspan='8' height='25' class='bdr-right bdr-left'></td></tr>";
		        		}
		        		$html .= "<tr><td colspan='8' class='bdr-bottom bdr-left bdr-right'></td></tr>";
		        	}else{

		        		$html .= "<tr><td colspan='8' class='bdr-bottom bdr-left bdr-right'></td></tr>";
		        	}
			        
			        

			    	$html .= "</table>
			    	</body>
			    	</head>
			    	</html>";
			        
			         $mpdf->WriteHTML($html);

			         $mpdf->Output('Purchase_order.pdf', 'I');
				}
			}
	    }
	}


}
 