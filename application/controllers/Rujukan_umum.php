<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rujukan_umum extends CI_Controller {

	/*
	Author 		: sisepus 
	Date 		: 08-04-2018
	*/

	public $menuID 	= 8;
	public $name 	= 'Rujukan';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_rujukan_umum');
		$this->load->model('M_menu_poli_umum');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
		
	}

	public function ajax(){
		$get_rujukan = $this->M_rujukan_umum->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_rujukan);
		
	}
	
	function get_list_dokter(){
		$list_dokter = $this->M_rujukan_umum->m_get_list_dokter();
		echo json_encode($list_dokter);
	}
	
	function get_list_poli(){
		$list_poli = $this->M_rujukan_umum->m_get_list_poli();
		echo json_encode($list_poli);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_poli_umum->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('medrec/header1');
		$this->load->view('medrec/data_rujukan',$data);
	}

	public function add(){
		$data['menu_link'] = $this->M_menu_poli_umum->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['TransNumber'] 	= $this->M_rujukan_umum->create_no_transaction();	
		$this->load->view('medrec/header1');
		$this->load->view('medrec/new_data_rujukan',$data);
		$this->load->view('medrec/footer1');
	}

	public function edit($id_rujukan){

		$data['menu_link'] 	= $this->M_menu_poli_umum->get_menu($this->menuID);	
		$data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_rujukan_umum->m_get_group($id_rujukan);
		$this->load->view('medrec/header1');
		$this->load->view('medrec/preview_data_rujukan',$data);
		$this->load->view('medrec/footer1');
	}
	
	function get_list_diagnosa(){
		$id_diagnosa 		= ($this->input->post('id_diagnosa')) ? $this->input->post('id_diagnosa'):'';
		$des_icd    		= ($this->input->post('des_icd')) ? $this->input->post('des_icd'):'';

		$list_diagnosa 		= $this->M_rujukan_umum->m_get_list_diagnosa($id_diagnosa,$des_icd);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_diagnosa);
	}
	
	 function get_list_pasien(){
		$kd_pasien		= ($this->input->post('kd_pasien')) ? $this->input->post('kd_pasien'):'';
		$nama    		= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_pasien 		= $this->M_rujukan_umum->m_get_list_pasien($kd_pasien,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_pasien);
	}
	
	public function insert(){
		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_rujukan 		= $this->M_rujukan_umum->create_no_transaction();	
		$kd_pasien      	= $this->input->post('kd_pasien');
		$nama     	 		= $this->input->post('nm_lengkap');
		$jenis			 	= $this->input->post('jenis');
		$umur				= $this->input->post('umur');
		$alamat 			= $this->input->post('alamat');
		$bpjs 				= $this->input->post('bpjs');
		$polrim 			= $this->input->post('poli_pengirim');
		$petugas		 			= $this->input->post('petugas');
		$yth		 			= $this->input->post('yth');
		$poli_rujukan					= $this->input->post('poli_rujukan');
		$pemeriksaan 		  		= $this->input->post('pemeriksaan');
		$diagnosa 		  		= $this->input->post('ID_DIAGNOSA');
		$des 		  		= $this->input->post('DESKRIPSI_ICD');
		$terapi 		  		= $this->input->post('terapi');
		$poli_umum          = $this->input->post('id_poli_umum');
		$status		  		= $this->input->post('status');
		
		   $data_priksa = array('trans_status'=>2);
			/*================== transaction begin ======================*/
			$this->db->trans_begin();
			$this->insert_data($id_rujukan,$kd_pasien,$nama,$jenis,$umur,$alamat,$bpjs,$polrim,$petugas,$yth,$poli_rujukan,$pemeriksaan,$diagnosa,$des,$terapi,$poli_umum,$status,$date);
            
			$this->M_rujukan_umum->m_false_data($data_priksa,$poli_umum);
			
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

	function insert_data($id_rujukan,$kd_pasien,$nama,$jenis,$umur,$alamat,$bpjs,$polrim,$petugas,$yth,$poli_rujukan,$pemeriksaan,$diagnosa,$des,$terapi,$poli_umum,$status,$date){
		$data_rujukan = array(
						'ID_RUJUKAN_UMUM' 	=> $id_rujukan,
						'KODE_PASIEN' 		=> $kd_pasien,
						'NAMA_LENGKAP' 		=> $nama,
						'JENIS_KELAMIN'  	=> $jenis,
						'UMUR'            	=> $umur,
						'ALAMAT'            => $alamat,
						'NO_BPJS'           => $bpjs,
						'POLI_PENGIRIM'        	=> $polrim,
						'PETUGAS_PENGIRIM'   		=> $petugas,
						'TANGGAL'           => $date,
						'KEPADA_YTH'         => $yth,
						'POLI_RUJUKAN'	    	=> $poli_rujukan,
						'PEMERIKSAAN' 		=> $pemeriksaan,
						'ID_DIAGNOSA'  => $diagnosa,
						'ICD_SEMENTARA'        => $des,
						'TERAPI'            => $terapi,
						'ID_POLI_UMUM'      => $poli_umum,
						'Status' 		    => 0,
						'ID_USER' 			=> 4);

		$this->M_rujukan_umum->m_insert_data($data_rujukan);
	}

	public function update(){
		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('tgl')));
		$id_rujukan 		= $this->input->post('id_rujukan');	
		$kd_pasien      	= $this->input->post('kd_pasien');
		$nama     	 		= $this->input->post('nm_lengkap');
		$jenis			 	= $this->input->post('jenis');
		$umur				= $this->input->post('umur');
		$alamat 			= $this->input->post('alamat');
		$bpjs 				= $this->input->post('bpjs');
		$polrim 			= $this->input->post('poli_pengirim');
		$petugas		    = $this->input->post('petugas');
		$yth		 		= $this->input->post('yth');
		$poljuk				= $this->input->post('poli_rujukan');
		$pemeriksaan  		= $this->input->post('pemeriksaan');
		$id_diag 			= $this->input->post('ID_DIAGNOSA');
		$des 		  		= $this->input->post('DESKRIPSI_ICD');
		$terapi 			= $this->input->post('terapi');
		$id_polmum 		  	= $this->input->post('id_poli_umum');
     	$status		  		= $this->input->post('status');
		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		$this->update_data($id_rujukan,$kd_pasien,$nama,$jenis,$umur,$alamat,$bpjs,$polrim,$petugas,$yth,$poljuk,$pemeriksaan,$id_diag,$des,$terapi,$id_polmum,$date,$status);
	
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

	function update_data($id_rujukan,$kd_pasien,$nama,$jenis,$umur,$alamat,$bpjs,$polrim,$petugas,$yth,$poljuk,$pemeriksaan,$id_diag,$des,$terapi,$id_polmum,$date,$status){
		$data_rujukan = array(
						'KODE_PASIEN' 			=> $kd_pasien,
						'NAMA_LENGKAP' 			=> $nama,
						'JENIS_KELAMIN'  	=> $jenis,
						'UMUR'            	=> $umur,
						'ALAMAT'            => $alamat,
						'NO_BPJS'           => $bpjs,
						'POLI_PENGIRIM'     	=> $polrim,
						'PETUGAS_PENGIRIM'   		=> $petugas,
						'TANGGAL'           => $date,
						'KEPADA_YTH'         => $yth,
						'POLI_RUJUKAN'	    	=> $poljuk,
						'PEMERIKSAAN' 		=> $pemeriksaan,
						'ID_DIAGNOSA'  => $id_diag,
						'ICD_SEMENTARA'        => $des,
						'TERAPI'            => $terapi,
						'ID_POLI_UMUM'      => $id_polmum,
						'Status' 		    => 0,
						'ID_USER' 			=> 4);

		$this->M_rujukan_umum->m_update_data($data_rujukan,$id_rujukan);
	}

    function suspend_data(){
		$no_transaction 	= $this->input->post('transaction_no');
		$data_suspend = array('status'=>1);

		$this->db->trans_begin();
		$this->M_rujukan_umum->m_suspend_data($data_suspend,$no_transaction);

		if ($this->db->trans_status() === TRUE) {
			$this->db->trans_commit();
			$result['status'] 	= TRUE;
			$result['message']	= get_notification('delete',1);
		}
		else{
			$this->db->trans_rollback();
			$result['status'] 	= FALSE;
			$result['message']	= get_notification('delete',0);
		}
		echo json_encode($result);
	}
  
	function print_preview($id_rujukan){

		include(APPPATH . 'libraries/mpdf/mpdf.php');
         $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $group_rs 		= $this->M_rujukan_umum->get_group_ps($id_rujukan);

        $total_baris 	= $this->M_rujukan_umum->count_detail_ps($id_rujukan); 
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
		        		<p style=font-size:35px><b>Rujukan Internal</b></p>
		        		</td>
	        			<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        		</td>
	        		</tr>
		        </table>";




		    $html .= "<table width='100%'>"
		    		."<tr>"
		    			."<td valign='top' width='60%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='50%'>Id Rujukan</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->ID_RUJUKAN_UMUM</td>"
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
								."<tr>"
			    					."<td width='40%'>Jenis Kelamin</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->JENIS_KELAMIN</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Umur</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->UMUR</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Alamat</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->ALAMAT</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>No Bpjs</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->NO_BPJS</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Poli Pengirim</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->POLI_PENGIRIM</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Petugas Pengirim</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->PETUGAS_PENGIRIM</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    			."<td valign='top' width='60%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Kepada YTH</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->KEPADA_YTH</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Poli Rujukan</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->POLI_RUJUKAN</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Pemeriksaan</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>
			    						<p>
			    							$group_rs->PEMERIKSAAN
			    						</p>
			    					</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Icd Sementara</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->ICD_SEMENTARA</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Terapi</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>
			    						<p>
			    							$group_rs->TERAPI
			    						</p>
			    					</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    		."</tr>"
		    		."</table>";

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
			    				."<td height='120'>".$group_rs->lev."&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td height='120'>_________________&#x20;&#xA0;&#160;&nbsp;</td>"
			    			."</tr>"
			    			."</table>"
	        			."</td>"
	        			."</tr>"
	        			."<tr>"
	        			."<td colspan='6' class='' valign='top'>"
	        				."<p>Desc : "
	        				."<span style='font-size:10px;'>Semoga Lekas Sembuh</span></p>"
	        			."</td>";

	    	$html .= "</table>
	    	</body>
	    	</head>
	    	</html>";
	        
	         $mpdf->WriteHTML($html);

	         $mpdf->Output('Rujukan_umum.pdf', 'I');
	    }
	}
}