<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umb_rujukan_umum extends CI_Controller {

	/*
	Author 		: Sisepus 
	Date 		: 08-04-2018
	*/

	public $menuID 	= 5;
	public $name 	= 'Umb Rujukan';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_umb_umum');
		$this->load->model('M_menu_poli_umum');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
		
	}

	public function ajax(){
		$get_umb = $this->M_umb_umum->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_umb);
		
	}
	
	function get_list_dokter(){
		$list_dokter = $this->M_umb_umum->m_get_list_dokter();
		echo json_encode($list_dokter);
	}
	
	function get_list_poli(){
		$list_poli = $this->M_umb_umum->m_get_list_poli();
		echo json_encode($list_poli);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_poli_umum->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('medrec/header1');
		$this->load->view('medrec/data_umb_rujukan',$data);
	}

	public function add(){
		$data['menu_link'] = $this->M_menu_poli_umum->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['TransNumber'] 	= $this->M_umb_umum->create_no_transaction();	
		$this->load->view('medrec/header1');
		$this->load->view('medrec/new_umb_rujukan',$data);
		$this->load->view('medrec/footer1');
	}

	public function preview($id_umb){

		$data['menu_link'] 	= $this->M_menu_poli_umum->get_menu($this->menuID);	
		$data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_umb_umum->m_get_group($id_umb);
		$this->load->view('medrec/header1');
		$this->load->view('medrec/prev_umb_rujukan',$data);
		$this->load->view('medrec/footer1');
	}
	
	 function get_list_pasien(){
		$kd_pasien		= ($this->input->post('kd_pasien1')) ? $this->input->post('kd_pasien1'):'';
		$nama    		= ($this->input->post('nama1')) ? $this->input->post('nama1'):'';

		$list_pasien 		= $this->M_umb_umum->m_get_list_pasien($kd_pasien,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_pasien);
	}
	
	public function insert(){
		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_umb 		= $this->M_umb_umum->create_no_transaction();	
		$kd_pasien      	= $this->input->post('kd_pasien');
		$nama     	 		= $this->input->post('nm_lengkap');
		$jenis			 	= $this->input->post('jenis');
		$umur				= $this->input->post('umur');
		$alamat 			= $this->input->post('alamat');
		$bpjs 				= $this->input->post('bpjs');
		$polrim 			= $this->input->post('poli_pengirim');
		$petugas	 			= $this->input->post('petugas');
		$yth		 			= $this->input->post('yth');
		$poli_umb					= $this->input->post('poli_umb');
		$hasil 		  		= $this->input->post('hasil');
		$terapi 		  		= $this->input->post('terapi');
		$id_poli         = $this->input->post('id_poli');
		$status		  		= $this->input->post('status');
		
		     $data_priksa = array('trans_status'=>2);
			/*================== transaction begin ======================*/
			$this->db->trans_begin();
			$this->insert_data($id_umb,$kd_pasien,$nama,$jenis,$umur,$alamat,$bpjs,$polrim,$petugas,$yth,$poli_umb,$hasil,$terapi,$id_poli,$status,$date);
			$this->M_umb_umum->m_false_data($data_priksa,$poli);

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

	function insert_data($id_umb,$kd_pasien,$nama,$jenis,$umur,$alamat,$bpjs,$polrim,$petugas,$yth,$poli_umb,$hasil,$terapi,$id_poli,$status,$date){
		$data_umb = array(
						'ID_UMB_UMUM' 	=> $id_umb,
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
						'POLI_UMB'	    	=> $poli_umb,
						'HASIL_PEMERIKSAAN' 		=> $hasil,
						'TINDAKAN_TERAPI'  => $terapi,
						'ID_POLI_UMUM'  => $id_poli,
						'Status' 		    => 0,
						'ID_USER' 			=> 4);

		$this->M_umb_umum->m_insert_data($data_umb);
	}

	public function update(){
		
		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_umb 		= $this->input->post('id_umb');	
		$kd_pasien      	= $this->input->post('kd_pasien');
		$nama     	 		= $this->input->post('nm_lengkap');
		$jenis			 	= $this->input->post('jenis');
		$umur				= $this->input->post('umur');
		$alamat 			= $this->input->post('alamat');
		$bpjs 				= $this->input->post('bpjs');
		$polrim 			= $this->input->post('poli_pengirim');
		$petugas	 			= $this->input->post('petugas');
		$yth		 			= $this->input->post('yth');
		$poli_umb					= $this->input->post('poli_umb');
		$hasil 		  		= $this->input->post('hasil');
		$terapi 		  		= $this->input->post('terapi');
		$id_poli         = $this->input->post('id_poli');
		$status		  		= $this->input->post('status');
        /*================== transaction begin ======================*/
		$this->db->trans_begin();
		$this->update_data($id_umb,$kd_pasien,$nama,$jenis,$umur,$alamat,$bpjs,$polrim,$petugas,$yth,$poli_umb,$hasil,$terapi,$id_poli,$status,$date);
	
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

	function update_data($id_umb,$kd_pasien,$nama,$jenis,$umur,$alamat,$bpjs,$polrim,$petugas,$yth,$poli_umb,$hasil,$terapi,$id_poli,$status,$date){
		$data_umb = array(
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
						'POLI_UMB'	    	=> $poli_umb,
						'HASIL_PEMERIKSAAN' 		=> $hasil,
						'TINDAKAN_TERAPI'  => $terapi,
						'ID_POLI_UMUM'  => $id_poli,
						'Status' 		    => 0,
						'ID_USER' 			=> 4);

		$this->M_umb_umum->m_update_data($data_umb,$id_umb);
	}

    function suspend_data(){
		$no_transaction 	= $this->input->post('transaction_no');
		$data_suspend = array('status'=>1);

		$this->db->trans_begin();
		$this->M_umb_umum->m_suspend_data($data_suspend,$no_transaction);

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

	function print_preview($id_umb_umum){

		include(APPPATH . 'libraries/mpdf/mpdf.php');
         $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $group_rs 		= $this->M_umb_umum->get_group_umb($id_umb_umum);
		$total_baris 	= $this->M_umb_umum->count_detail_umb($id_umb_umum); 
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
		        		<p style=font-size:35px><b>Umpan balik Rujukan Internal</b></p>
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
			    					."<td width='50%'>Id Umb Rujukan</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_rs->ID_UMB_UMUM</td>"
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
			    					."<td width='35%' valign='top'>Poli UMB</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->POLI_UMB</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='35%' valign='top'> Hasil Pemeriksaan</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_rs->HASIL_PEMERIKSAAN</td>"
		    					."</tr>"
								."<tr>"
			    					."<td width='35%' valign='top'>Tindakan/Terapi</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>
			    						<p>
			    							$group_rs->TINDAKAN_TERAPI
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
	         $mpdf->Output('UMB_Rujukan_umum.pdf', 'I');
	    }
	}
}