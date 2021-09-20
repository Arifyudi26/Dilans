<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengambilan_obat extends CI_Controller {

	/*
	Author 		: Sisepus 
	Date 		: 8-05-2018
	*/

	public $menuID 	= 11;
	public $name 	= 'Pengambilan Obat';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_ambil_obat');
		$this->load->model('M_menu_farmasi');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');		
	}

	public function ajax(){
		$get_resep = $this->M_ambil_obat->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_resep);
	}
	
	function get_list_petugas(){
		$list_petugas = $this->M_ambil_obat->m_get_list_petugas();
		echo json_encode($list_petugas);
	}
	
	function get_list_poli(){
		$list_poli = $this->M_ambil_obat->m_get_list_poli();
		echo json_encode($list_poli);
	}
	
	 function get_list_pasien(){
		$kd_pasien		= ($this->input->post('kd_pasien')) ? $this->input->post('kd_pasien'):'';
		$nama    		= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_pasien 		= $this->M_ambil_obat->m_get_list_pasien($kd_pasien,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_pasien);
	}
	
	function get_detail_resep(){
		$id_resep		= ($this->input->get('id_resep')) ? $this->input->get('id_resep'):'';

		$list_detail 	= $this->M_ambil_obat->m_get_detail_resep($id_resep);
		//echo $this->db->last_query();
		echo json_encode($list_detail);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_farmasi->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('farmasi/header1');
		$this->load->view('farmasi/data_ambil_obat',$data);
	}

	public function add(){
		$data['menu_link'] = $this->M_menu_farmasi->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['gigi'] 	= $this->M_ambil_obat->create_no_transaction();	
		$this->load->view('farmasi/header1');
		$this->load->view('farmasi/new_ambil_obat',$data);
		$this->load->view('farmasi/footer');
	}

	public function preview($id_farmasi){

		$data['menu_link'] 	= $this->M_menu_farmasi->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_ambil_obat->m_get_group($id_farmasi);
		$this->load->view('farmasi/header1');
		$this->load->view('farmasi/prev_ambil_obat',$data);
		$this->load->view('farmasi/footer');
	}

	public function insert(){
	
        date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_resep 			    = $this->input->post('id_resep');	
		$kd_pasien		 	= $this->input->post('kd_pasien');
		$nama 				= $this->input->post('nm_lengkap');
		$umur			 	= $this->input->post('umur');
		$diagnosa 			= $this->input->post('diagnosa');
		$total_qty 			= $this->input->post('total_qty');
	    $poli				= $this->input->post('poli');
	    $petugas			= $this->input->post('petugas');
		$id_poli			= $this->input->post('id_poli');
		$detail1 			= $this->input->post('detail');
		$detail 			= json_decode($detail1);
		
		$data_ambil = array('trans_status'=>1);
		
			$this->db->trans_begin();

			$this->insert_resep($id_resep,$kd_pasien,$nama,$umur,$diagnosa,$total_qty,$poli,$petugas,$id_poli);
			$this->insert_detail($id_resep,$kd_pasien,$nama,$poli,$detail,$date);
			$this->M_ambil_obat->m_ambil_data($data_ambil,$id_poli);
			
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

	function insert_resep($id_resep,$kd_pasien,$nama,$umur,$diagnosa,$total_qty,$poli,$petugas,$id_poli){
		$data_resep = array(
						'ID_FARMASI' 			=> $id_resep,
						'KODE_PASIEN' 			=> $kd_pasien,
						'NAMA_LENGKAP' 			=> $nama,
						'UMUR'				=> $umur,
						'DIAGNOSA' 			=> $diagnosa,
						'JUMLAH_OBAT' 		=> $total_qty,
						'ID_UNIT'			=> $poli,
						'ID_EMPLOYEE'			=> $petugas,
						'ID_RESEP_OBAT' 		=> $id_poli,
						'status' 	  		=> 0,
						'ID_USER' 			=> 16);

		$this->M_ambil_obat->m_insert_resep($data_resep);
	}

	function insert_detail($id_resep,$kd_pasien,$nama,$poli,$detail,$date){

		foreach($detail as $row){
			$data_detail = array(
							'ID_FARMASI' 	=> $id_resep,
							'TANGGAL'       => $date,
							'ID_OBAT' 		=> $row->ID_OBAT,
							'NAMA_OBAT' 	=> $row->NAMA_OBAT,
							'SATUAN' 		=> $row->SATUAN,
							'QTY' 			=> $row->QTY,
							'ATURAN'		=> $row->ATURAN,
							'KETERANGAN'    => $row->KETERANGAN,
							'KODE_PASIEN'   => $kd_pasien,
							'NAMA_LENGKAP'  => $nama,
							'ID_UNIT'		=> $poli,
							'status'        => 0,
							'ID_USER'		=> 16);
			
			$this->M_ambil_obat->m_insert_detail($data_detail);
		}
	}

	public function update(){
		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_resep 			    = $this->input->post('id_tou');	
		$kd_pasien		 	= $this->input->post('kd_pasien');
		$nama 				= $this->input->post('nm_lengkap');
		$umur			 	= $this->input->post('umur');
		$diagnosa 			= $this->input->post('diagnosa');
		$total_qty 			= $this->input->post('total_qty');
		$poli				= $this->input->post('poli');
	    $petugas			= $this->input->post('petugas');
		$id_poli			= $this->input->post('id_poli');
		$detail1 			= $this->input->post('detail');
		$detail 			= json_decode($detail1);
		/*================== transaction begin ======================*/
		$this->db->trans_begin();
		$this->update_resep($id_resep,$kd_pasien,$nama,$umur,$diagnosa,$total_qty,$poli,$petugas,$id_poli);
		$this->M_ambil_obat->delete_detail($id_resep);
		$this->insert_detail($id_resep,$kd_pasien,$nama,$poli,$detail,$date);

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

	function update_resep($id_resep,$kd_pasien,$nama,$umur,$diagnosa,$total_qty,$poli,$petugas,$id_poli){
		$data_resep = array(
						'KODE_PASIEN' 			=> $kd_pasien,
						'NAMA_LENGKAP' 			=> $nama,
						'UMUR'				=> $umur,
						'DIAGNOSA' 			=> $diagnosa,
						'JUMLAH_OBAT' 		=> $total_qty,
						'ID_UNIT'			=> $poli,
						'ID_EMPLOYEE'			=> $petugas,
						'ID_RESEP_OBAT' 		=> $id_poli,
						'status' 	  		=> 0,
						'ID_USER' 			=> 16);

		$this->M_ambil_obat->m_update_resep($data_resep,$id_resep);
	}
	
	function suspend_data(){
		$no_transaction 	= $this->input->post('transaction_no');

		$data_suspend = array('status'=>1);

		$this->db->trans_begin();
		$this->M_ambil_obat->m_suspend_data($data_suspend,$no_transaction);

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

	function get_list_diagnosa(){
		$id_diagnosa 		= ($this->input->post('id_diagnosa')) ? $this->input->post('id_diagnosa'):'';
		$des_icd    		= ($this->input->post('des_icd')) ? $this->input->post('des_icd'):'';

		$list_diagnosa 		= $this->M_ambil_obat->m_get_list_diagnosa($id_diagnosa,$des_icd);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_diagnosa);
	}
	
	function get_list_obat(){
		$id_obat 		= ($this->input->post('id_obat')) ? $this->input->post('id_obat'):'';
		$nama_obat 		= ($this->input->post('nama_obat')) ? $this->input->post('nama_obat'):'';
		$satuan         = ($this->input->post('satuan')) ? $this->input->post('satuan'):'';

		$list_obat 		= $this->M_ambil_obat->m_get_list_obat($id_obat,$nama_obat,$satuan);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_obat);
	}

	function get_detail_farmasi($id_farmasi){
	
		$list_detail = $this->M_ambil_obat->m_get_detail($id_farmasi);
		echo json_encode($list_detail);
	}

	function print_preview($id_farmasi){

		include(APPPATH . 'libraries/mpdf/mpdf.php');
         $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $group_rs		= $this->M_ambil_obat->get_group_farmasi($id_farmasi);
        $detail_rs 		= $this->M_ambil_obat->get_detail_farmasi($id_farmasi);
        $total_baris 	= $this->M_ambil_obat->count_detail_farmasi($id_farmasi); 
        $max_baris 		= 10;

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
		        		<p style=font-size:35px><b>Pengambilan Obat / Farmasi</b></p>
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
			    					."<td width='40%'>Id Farmasi</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->ID_FARMASI</td>"
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
			    					."<td width='35%' valign='top'>Poli Pemeriksaan</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>
			    						<p>
			    							$group_rs->unit
			    						</p>
			    					</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    		."</tr>"
		    		."</table>";
		    $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
		    		."<tr>"
		    		."<th width='5%' align='center' class=' bdr-bottom bdr-left bdr-top'>No</th>"
		    		."<th width='15%' align='center' class=' bdr-bottom bdr-left bdr-top'>Id Obat</th>"
		    		."<th width='30%' align='center' class=' bdr-bottom bdr-left bdr-top'>Nama obat</th>"
		    		."<th align='center' width='10%' class=' bdr-bottom bdr-left bdr-top'>Satuan</th>"
		    		."<th align='center' width='10%' class=' bdr-bottom bdr-left bdr-top'>Qty</th>"
		    		."<th align='center' width='12%' class=' bdr-bottom bdr-left bdr-top'>Aturan</th>"
		    		."<th align='center' width='20%' class=' bdr-bottom bdr-left bdr-top bdr-right'>Keterangan</th>"
		    		."</tr>";
		    	$no = 1;
	        	foreach($detail_rs as $row){
	        		$html .= "<tr class='body-report'>"
	        			."<td align='center' class='bdr-left'>".($no++)."</td>"
	        			."<td align='center'>$row->ID_OBAT</td>"
	        			."<td align='center'>".substr($row->NAMA_OBAT, 0,35)."</td>"
	        			."<td align='center'>$row->SATUAN</td>"
	        			."<td align='center'>$row->QTY</td>"
	        			."<td align='center'>$row->ATURAN</td>"
	        			."<td align='center' class='bdr-right'>$row->KETERANGAN</td>"
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
	        			."<td valign='right' colspan='2' rowspan='2'>"
	        				."<table width='100%'>"
	        				."<tr>"
	        					."<td>Jumlah Obat</td>"
	        					."<td>:</td>"
	        					."<td align='right' class='bdr-bottom'>".$group_rs->JUMLAH_OBAT."</td>"
	        				."</tr>"
	        				."</table>"
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
			    				."<td height='120'>".$group_rs->petugas."&#x20;&#xA0;&#160;&nbsp;</td>"
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
	         $mpdf->Output('Ambil_obat.pdf', 'I');
	  
	    }
	}

}
 