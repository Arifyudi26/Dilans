<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pulang_rb extends CI_Controller {

	/*
	Author 		: Sisepus 
	Date 		: 16-05-2018
	*/

	public $menuID 	= 6;
	public $name 	= 'Pulang RB';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_pulang_rb');
		$this->load->model('M_daftar_rb');
		$this->load->model('M_menu_rb');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');		
		$this->load->helper('number_helper');

	}

	public function ajax(){
		$get_rb = $this->M_pulang_rb->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_rb);
	}
	
	public function ajax_rawat(){
		$get_rb = $this->M_daftar_rb->get_all1();
		//echo $this->db->last_query();
		echo json_encode($get_rb);
	}
	
	function get_list_pasien(){
		$kd_pasien 		= ($this->input->post('kd_pasien')) ? $this->input->post('kd_pasien'):'';
		$nama 	= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_pasien		= $this->M_pulang_rb->m_get_list_pasien($kd_pasien,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_pasien);
	}
	
	function get_list_petugas(){
		$list_dokter = $this->M_pulang_rb->m_get_list_petugas();
		echo json_encode($list_dokter);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_rb->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('ruang_bersalin/header1');
		$this->load->view('ruang_bersalin/data_rawat',$data);
	}

	public function data_pulang(){
		$data['menu_link'] = $this->M_menu_rb->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		
		$this->load->view('ruang_bersalin/header1');
		$this->load->view('ruang_bersalin/data_pulang_rb',$data);
	}

	
	public function add($id_daftar_rb){
		$data['menu_link'] = $this->M_menu_rb->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['gigi'] 	= $this->M_pulang_rb->create_no_transaction();	
		$data['group'] 		= $this->M_daftar_rb->m_get_group($id_daftar_rb);
		$this->load->view('ruang_bersalin/header1');
		$this->load->view('ruang_bersalin/new_pulang_rb',$data);
		$this->load->view('ruang_bersalin/footer');
	}

	public function preview($id_pulang_rb){

		$data['menu_link'] 	= $this->M_menu_rb->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_pulang_rb->m_get_group($id_pulang_rb);
		$this->load->view('ruang_bersalin/header1');
		$this->load->view('ruang_bersalin/prev_pulang_rb',$data);
		$this->load->view('ruang_bersalin/footer');
	}

	public function insert(){
        date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_pulang 		    = $this->input->post('id_pulang');	
		$kd_pasien		 	= $this->input->post('kd_pasien');
		$nama 				= $this->input->post('nm_lengkap');
		$umur			 	= $this->input->post('umur');
		$alamat		 		= $this->input->post('alamat');
		$bpjs 			    = $this->input->post('bpjs');
	    $id_employe			= $this->input->post('petugas');
		$total				= $this->input->post('total_by');
		$id_daftar		    = $this->input->post('id_poli');
		$detail1 			= $this->input->post('detail');
		$detail 			= json_decode($detail1);
		
		  $data_pulang = array('STATUS_RAWAT'=>1);

			$this->db->trans_begin();

			$this->insert_rb($id_pulang,$kd_pasien,$nama,$umur,$alamat,$bpjs,$id_employe,$total,$id_daftar,$date);
			$this->insert_detail($id_pulang,$kd_pasien,$detail,$date);
     		$this->M_pulang_rb->m_pulang_data($data_pulang,$id_daftar);

			
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

	function insert_rb($id_pulang,$kd_pasien,$nama,$umur,$alamat,$bpjs,$id_employe,$total,$id_daftar,$date){
		$data_rb = array(
						'ID_PULANG_RB' 			=> $id_pulang,
						'KODE_PASIEN' 			=> $kd_pasien,
						'NAMA_LENGKAP' 			=> $nama,
						'UMUR'				=> $umur,
						'ALAMAT'			=> $alamat,
						'NO_BPJS' 			=> $bpjs,
						'TGL_PULANG' 		=> $date,
						'TOTAL_BIAYA'		=> $total,
						'ID_EMPLOYEE'		=> $id_employe,
						'ID_DAFTAR_RB'  	=> $id_daftar,
						'status' 	  		=> 0,
						'ID_USER' 			=> 14);

		$this->M_pulang_rb->m_insert_rb($data_rb);
	}

	function insert_detail($id_pulang,$kd_pasien,$detail,$date){

		foreach($detail as $row){
			$data_detail = array(
							'ID_PULANG_RB' 		=> $id_pulang,
							'TGL_PULANG'      	=> $date,
							'ID_PENUNJANG'		=> $row->ID_PENUNJANG,
							'PENUNJANG' 		=> $row->PENUNJANG,
							'TARIF' 		=> $row->TARIF,
							'SELAMA'		=> $row->SELAMA,
							'SUB_TOTAL'		=> $row->SUB_TOTAL,
							'KODE_PASIEN'   => $kd_pasien,
							'status'        => 0,
							'ID_USER'		=> 14);
			
			$this->M_pulang_rb->m_insert_detail($data_detail);

		}
	}

	public function update(){
	    date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_pulang 		    = $this->input->post('id_pulang');	
		$kd_pasien		 	= $this->input->post('kd_pasien');
		$nama 				= $this->input->post('nm_lengkap');
		$umur			 	= $this->input->post('umur');
		$alamat		 		= $this->input->post('alamat');
		$bpjs 			    = $this->input->post('bpjs');
	    $id_employe			= $this->input->post('petugas');
		$total				= $this->input->post('total_by');
		$id_daftar		    = $this->input->post('id_poli');
		$detail1 			= $this->input->post('detail');
		$detail 			= json_decode($detail1);

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		$this->update_group($id_pulang,$kd_pasien,$nama,$umur,$alamat,$bpjs,$id_employe,$total,$id_daftar,$date);
		$this->M_pulang_rb->delete_detail($id_pulang);
		$this->insert_detail($id_pulang,$kd_pasien,$detail,$date);

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

	function update_group($id_pulang,$kd_pasien,$nama,$umur,$alamat,$bpjs,$id_employe,$total,$id_daftar,$date){
		$data_group = array(
						'KODE_PASIEN' 			=> $kd_pasien,
						'NAMA_LENGKAP' 			=> $nama,
						'UMUR'				=> $umur,
						'ALAMAT'			=> $alamat,
						'NO_BPJS' 			=> $bpjs,
						'TGL_PULANG' 		=> $date,
						'TOTAL_BIAYA'		=> $total,
						'ID_EMPLOYEE'		=> $id_employe,
						'ID_DAFTAR_RB'  	=> $id_daftar,
						'status' 	  		=> 0,
						'ID_USER' 			=> 14);
						
		$this->M_pulang_rb->m_update_group($data_group,$id_pulang);
	}
	
	function suspend_data(){
		$no_transaction 	= $this->input->post('transaction_no');
		$data_suspend = array('status'=>1);

		$this->db->trans_begin();
		$this->M_pulang_rb->m_suspend_data($data_suspend,$no_transaction);

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

	function get_list_kamar(){
		$id_kamar	= ($this->input->post('id_kamar')) ? $this->input->post('id_kamar'):'';
		$nm_kamar 	= ($this->input->post('nm_kamar')) ? $this->input->post('nm_kamar'):'';

		$list_kamar 		= $this->M_pulang_rb->m_get_list_kamar($id_kamar,$nm_kamar);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_kamar);
	}
	
	
	function get_list_partus(){
		$id_partus	= ($this->input->post('id_partus')) ? $this->input->post('id_partus'):'';
		$partus 	= ($this->input->post('partus')) ? $this->input->post('partus'):'';

		$list_partus 		= $this->M_pulang_rb->m_get_list_partus($id_partus,$partus);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_partus);
	}
	
	
	function get_list_ibu(){
		$id_ibu	= ($this->input->post('id_ibu')) ? $this->input->post('id_ibu'):'';
		$p_ibu 	= ($this->input->post('p_ibu')) ? $this->input->post('p_ibu'):'';

		$list_ibu 		= $this->M_pulang_rb->m_get_list_ibu($id_ibu,$p_ibu);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_ibu);
	}
	
	function get_list_bayi(){
		$id_bayi	= ($this->input->post('id_bayi')) ? $this->input->post('id_bayi'):'';
		$p_bayi 	= ($this->input->post('p_bayi')) ? $this->input->post('p_bayi'):'';

		$list_bayi 		= $this->M_pulang_rb->m_get_list_bayi($id_bayi,$p_bayi);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_bayi);
	}
	
	function get_list_bersalin(){
		$id_bersalin	= ($this->input->post('id_bersalin')) ? $this->input->post('id_bersalin'):'';
		$bersalin 	 	= ($this->input->post('bersalin')) ? $this->input->post('bersalin'):'';

		$list_bersalin 		= $this->M_pulang_rb->m_get_list_bersalin($id_bersalin,$bersalin);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_bersalin);
	}
	
	function get_list_gizi(){
		$id_gizi	= ($this->input->post('id_gizi')) ? $this->input->post('id_gizi'):'';
		$makan 	 	= ($this->input->post('makan')) ? $this->input->post('makan'):'';

		$list_gizi 		= $this->M_pulang_rb->m_get_list_gizi($id_gizi,$makan);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_gizi);
	}

	function get_detail_rb($id_pulang_rb){
		$list_detail = $this->M_pulang_rb->m_get_detail($id_pulang_rb);
		echo json_encode($list_detail);
	}

	function print_preview($id_pulang_rb){

		include(APPPATH . 'libraries/mpdf/mpdf.php');
         $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $group_rs		= $this->M_pulang_rb->get_group_rb($id_pulang_rb);
        $detail_rs 		= $this->M_pulang_rb->get_detail_rb($id_pulang_rb);
        $total_baris 	= $this->M_pulang_rb->count_detail_rb($id_pulang_rb); 
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
	        			<img src='".base_url('assets/Logo2.PNG')."' width='240' height='190'>
	        			<h2>Puskesmas Kec.Sawah besar</h2>	
						<h3>Jl.mangga dua dalam K no.13,kel.mangga dua selatan</h3>	        		
		        		<h3>Telp : 021-6256101 </h3>
	        		</td>
	        		<td valign='top' width='80%' align='center'>
		        			<br>
		        		<p style=font-size:35px><b>Pembayaran Ruang Bersalin</b></p>
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
			    					."<td width='40%'>Id Pulang Rb</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->ID_PULANG_RB</td>"
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
			    					."<td width='35%' valign='top'>Umur</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->UMUR</td>"
		    					."</tr>"
								
		    				."</table>"
		    			."</td>"
		    			."<td valign='top' width='60%'>"
		    				."<table width='100%'>"
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
			    					."<td width='35%' valign='top'>Petugas</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>
			    						<p>
			    							$group_rs->petugas
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
		    		."<th width='13%' align='center' class=' bdr-bottom bdr-left bdr-top'>Id Penunjang</th>"
		    		."<th width='28%' align='center' class=' bdr-bottom bdr-left bdr-top'>Penunjang</th>"
					."<th width='20%' align='center' class=' bdr-bottom bdr-left bdr-top'>Tarif</th>"
					."<th width='17%' align='center' class=' bdr-bottom bdr-left bdr-top'>Selama</th>"
		    		."<th align='center' width='20%' class=' bdr-bottom bdr-left bdr-top bdr-right'>Sub Total</th>"
		    		."</tr>";
		    	$no = 1;

	        	foreach($detail_rs as $row){
	        		$html .= "<tr class='body-report'>"
	        			."<td align='center' class='bdr-left'>".($no++)."</td>"
	        			."<td align='left'>$row->ID_PENUNJANG</td>"
	        			."<td align='left'>".substr($row->PENUNJANG, 0,35)."</td>"
						."<td align='center'>Rp.".formatRp_acc($row->TARIF)."</td>"
						."<td align='center'>$row->SELAMA <span>Hari</span></td>"
	        			."<td align='center' class='bdr-right'>Rp.".formatRp_acc($row->SUB_TOTAL)."</td>"
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
	        				."<p>Rimeks : "
	        				."<span style='font-size:10px;'>Terima Kasih</span></p>"
	        			."</td>";
	    	$html .= "</table>
	    	</body>
	    	</head>
	    	</html>";
	        
	         $mpdf->WriteHTML($html);
	         $mpdf->Output('Pulang_rb.pdf', 'I');
	    }
	}

}
 