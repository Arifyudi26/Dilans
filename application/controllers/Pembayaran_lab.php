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
		$this->load->helper('number_helper');

	}

	public function ajax(){
		$get_lab = $this->M_bayar_lab->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_lab);
	}
	
	 function get_list_pasien(){
		$kd_pasien		= ($this->input->post('kd_pasien')) ? $this->input->post('kd_pasien'):'';
		$nama    		= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_pasien 		= $this->M_bayar_lab->m_get_list_pasien($kd_pasien,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_pasien);
	}
	
	function get_list_dokter(){
		$list_dokter = $this->M_bayar_lab->m_get_list_dokter();
		echo json_encode($list_dokter);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_lab->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$this->load->view('lab/header1');
		$this->load->view('lab/data_bayar_lab',$data);
	}

	public function add(){
		$data['menu_link'] = $this->M_menu_lab->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['gigi'] 	= $this->M_bayar_lab->create_no_transaction();	
		$this->load->view('lab/header1');
		$this->load->view('lab/new_pembayaran_lab',$data);
		$this->load->view('lab/footer');
	}

	public function preview($id_bayar_lab){

		$data['menu_link'] 	= $this->M_menu_lab->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_bayar_lab->m_get_group($id_bayar_lab);
		$this->load->view('lab/header1');
		$this->load->view('lab/prev_pembayaran_lab',$data);
		$this->load->view('lab/footer');
	}

	public function insert(){
	
        date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_bayar 		    = $this->input->post('id_bayar');	
		$kd_pasien		 	= $this->input->post('kd_pasien');
		$nama 				= $this->input->post('nm_lengkap');
		$umur			 	= $this->input->post('umur');
		$bpjs 			= $this->input->post('bpjs');
	    $dokter				= $this->input->post('id_dokter');
		$total_by			= $this->input->post('total_by');
		$id_daftar		    = $this->input->post('id_poli');
		$detail1 			= $this->input->post('detail');
		$detail 			= json_decode($detail1);

			$this->db->trans_begin();
			$this->insert_lab($id_bayar,$kd_pasien,$nama,$umur,$bpjs,$dokter,$total_by,$id_daftar,$date);
			$this->insert_detail($id_bayar,$kd_pasien,$detail,$date);
			
			 $data_priksa = array('trans_status'=>2);
			$this->M_bayar_lab->m_false_data($data_priksa,$id_daftar);
			
			
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

	function insert_lab($id_bayar,$kd_pasien,$nama,$umur,$bpjs,$dokter,$total_by,$id_daftar,$date){
		$data_lab = array(
						'ID_PEMBAYARAN_LAB' => $id_bayar,
						'KODE_PASIEN' 		=> $kd_pasien,
						'NAMA_LENGKAP' 		=> $nama,
						'UMUR'				=> $umur,
						'NO_BPJS' 			=> $bpjs,
						'TGL_BAYAR' 		=> $date,
						'ID_DOKTER'			=> $dokter,
						'TOTAL_BIAYA'		=> $total_by,
						'ID_DAFTAR_LAB' 	=> $id_daftar,
						'status' 	  		=> 0,
						'ID_USER' 			=> 17);

		$this->M_bayar_lab->m_insert_lab($data_lab);
	}

	function insert_detail($id_bayar,$kd_pasien,$detail,$date){

		foreach($detail as $row){
			$data_detail = array(
							'ID_PEMBAYARAN_LAB' => $id_bayar,
							'TGL_BAYAR'      	=> $date,
							'ID_DT_LAB'		    => $row->ID_DT_LAB,
							'NAMA_PEMERIKSAAN' 	=> $row->NAMA_PEMERIKSAAN,
							'TARIF' 			=> $row->TARIF,
							'KETERANGAN' 		=> $row->KETERANGAN,
							'KODE_PASIEN'   => $kd_pasien,
							'status'        => 0,
							'ID_USER'		=> 17);
			
			$this->M_bayar_lab->m_insert_detail($data_detail);
		}
	}

	public function update(){
		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_bayar 		    = $this->input->post('id_bayar');	
		$kd_pasien		 	= $this->input->post('kd_pasien');
		$nama 				= $this->input->post('nm_lengkap');
		$umur			 	= $this->input->post('umur');
		$bpjs 			= $this->input->post('bpjs');
	    $dokter				= $this->input->post('id_dokter');
		$total_by			= $this->input->post('total_by');
		$id_daftar		    = $this->input->post('id_poli');
		$detail1 			= $this->input->post('detail');
		$detail 			= json_decode($detail1);
		
		/*================== transaction begin ======================*/
		$this->db->trans_begin();
		$this->update_group($id_bayar,$kd_pasien,$nama,$umur,$bpjs,$dokter,$total_by,$id_daftar,$date);
		$this->M_bayar_lab->delete_detail($id_bayar);
		$this->insert_detail($id_bayar,$kd_pasien,$detail,$date);

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

	function update_group($id_bayar,$kd_pasien,$nama,$umur,$bpjs,$dokter,$total_by,$id_daftar,$date){
		$data_group = array(
						'KODE_PASIEN' 		=> $kd_pasien,
						'NAMA_LENGKAP' 		=> $nama,
						'UMUR'				=> $umur,
						'NO_BPJS' 			=> $bpjs,
						'TGL_BAYAR' 		=> $date,
						'ID_DOKTER'			=> $dokter,
						'TOTAL_BIAYA'		=> $total_by,
						'ID_DAFTAR_LAB' 	=> $id_daftar,
						'status' 	  		=> 0,
						'ID_USER' 			=> 17);

		$this->M_bayar_lab->m_update_group($data_group,$id_bayar);
	}
	
	function suspend_data(){
		$no_transaction 	= $this->input->post('transaction_no');
		$data_suspend = array('status'=>1);

		$this->db->trans_begin();
		$this->M_bayar_lab->m_suspend_data($data_suspend,$no_transaction);

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

	function get_list_lab(){
		$id_data			= ($this->input->post('id_data')) ? $this->input->post('id_data'):'';
		$pemeriksaan 	= ($this->input->post('pemeriksaan')) ? $this->input->post('pemeriksaan'):'';

		$list_lab 		= $this->M_bayar_lab->m_get_list_lab($id_data,$pemeriksaan);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_lab);
	}

	function get_detail_lab($id_bayar_lab){
		$list_detail = $this->M_bayar_lab->m_get_detail($id_bayar_lab);
		echo json_encode($list_detail);
	}
	
	function print_preview($id_bayar_lab){

		include(APPPATH . 'libraries/mpdf/mpdf.php');
         $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $group_rs		= $this->M_bayar_lab->get_group_lab($id_bayar_lab);
        $detail_rs 		= $this->M_bayar_lab->get_detail_lab($id_bayar_lab);
        $total_baris 	= $this->M_bayar_lab->count_detail_lab($id_bayar_lab); 
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
		        		<p style=font-size:35px><b>Pembayaran Laboratorium</b></p>
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
			    					."<td width='40%'>Id Pembayaran Lab</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='60%'>$group_rs->ID_PEMBAYARAN_LAB</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='40%'>Kode Pasien</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='60%'>$group_rs->KODE_PASIEN</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='40%'>Nama Pasien</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='60%'>$group_rs->NAMA_LENGKAP</td>"
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
			    					."<td width='35%' valign='top'>No Bpjs</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->NO_BPJS</td>"
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
		    		."<th width='20%' align='center' class=' bdr-bottom bdr-left bdr-top'>Id data Lab</th>"
		    		."<th width='30%' align='center' class=' bdr-bottom bdr-left bdr-top'>Nama Pemeriksaan</th>"
		    		."<th align='center' width='20%' class=' bdr-bottom bdr-left bdr-top'>Tarif</th>"
		    		."<th align='center' width='25%' class=' bdr-bottom bdr-left bdr-top bdr-right'>Keterangan</th>"
		    		."</tr>";
		    	$no = 1;
	        	foreach($detail_rs as $row){
	        		$html .= "<tr class='body-report'>"
	        			."<td align='center' class='bdr-left'>".($no++)."</td>"
	        			."<td align='center'>$row->ID_DT_LAB</td>"
	        			."<td align='center'>".substr($row->NAMA_PEMERIKSAAN, 0,35)."</td>"
	        			."<td align='center'>".formatRp_acc($row->TARIF)."</td>"
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
	        					."<td>Total Biaya</td>"
	        					."<td>:</td>"
	        					."<td align='right' class='bdr-bottom'>Rp.".formatRp_acc($group_rs->TOTAL_BIAYA)."</td>"
	        				."</tr>"
	        				."</table>"
	        			."</td>"
	        			."</tr>"
	        			."<tr>"
	        			."<td colspan='6' valign='top'>"
	        				."<table>"
			    			."<tr>"
			    				."<td align='center'>Dibuat Oleh</td>"
			    				."<td align='center'>Paraf</td>"
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
	        				."<span style='font-size:10px;'>Terima kasih</span></p>"
	        			."</td>";
 	    	$html .= "</table>
	    	</body>
	    	</head>
	    	</html>";
	        
	         $mpdf->WriteHTML($html);

	         $mpdf->Output('Pembayaran_lab.pdf', 'I');
	    }
	}

}
 