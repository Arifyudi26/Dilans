<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan_poli_kb extends CI_Controller {

	/*

	Author 		: Asfani 
	Date 		: 23-03-2018

	*/

	public $menuID 	= 11;
	public $name 	= 'Status KB';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_poli_kb');
		$this->load->model('M_menu_poli_kb');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
		
	}

	public function ajax(){
		$get_tindakan = $this->M_poli_kb->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_tindakan);
		
	}
	
	function get_list_dokter(){
		$list_dokter = $this->M_poli_kb->m_get_list_dokter();
		echo json_encode($list_dokter);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_poli_kb->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('poli_kb/header1');
		$this->load->view('poli_kb/data_poli_kb',$data);
	}

	public function add(){
		$data['menu_link'] = $this->M_menu_poli_kb->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['TransNumber'] 	= $this->M_poli_kb->create_no_transaction();	
		$this->load->view('poli_kb/header1');
		$this->load->view('poli_kb/new_poli_kb',$data);
		$this->load->view('poli_kb/footer');
	}

	public function preview($id_poli_kb){

		$data['menu_link'] 	= $this->M_menu_poli_kb->get_menu($this->menuID);	
		$data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_poli_kb->m_get_group($id_poli_kb);
		$this->load->view('poli_kb/header1');
		$this->load->view('poli_kb/prev_poli_kb',$data);
		$this->load->view('poli_kb/footer');
	}
	
	function get_list_diagnosa(){
		$id_diagnosa 		= ($this->input->post('id_diagnosa')) ? $this->input->post('id_diagnosa'):'';
		$des_icd    		= ($this->input->post('des_icd')) ? $this->input->post('des_icd'):'';

		$list_diagnosa 		= $this->M_poli_lansia->m_get_list_diagnosa($id_diagnosa,$des_icd);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_diagnosa);
	}
	
	function get_list_pasien(){
		$kd_pasien 		= ($this->input->post('kd_pasien')) ? $this->input->post('kd_pasien'):'';
		$nama    		= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_pasien 		= $this->M_poli_kb->m_get_list_pasien($kd_pasien,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_pasien);
	}
	

	public function insert(){

		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_poli		= $this->M_poli_kb->create_no_transaction();
		$kd_pasien      	= $this->input->post('kd_pasien');
		$nkfk      	= $this->input->post('nkfk');	
		$nsk      	= $this->input->post('nsk');
		$nama     	 		= $this->input->post('nm_lengkap');
		$tt_lahir			 	= $this->input->post('tt_lahir');
		$umur				= $this->input->post('umur');
		$pen				= $this->input->post('pendidikan');
		$pek				= $this->input->post('pekerjaan');
		$alamat 			= $this->input->post('alamat');
		$bpjs 				= $this->input->post('bpjs');
		$tks 			= $this->input->post('tks');
		$ns 			= $this->input->post('ns');
		$pensum		 			= $this->input->post('pensum');
		$peksum		 			= $this->input->post('peksum');
		$ja					= $this->input->post('ja');
		$uat 		  		= $this->input->post('uat');
		$kt 		  		= $this->input->post('kt');
		$sk 		  		= $this->input->post('sk');
		$ht 		  		= $this->input->post('ht');
		$dh 		  		= $this->input->post('dh');
		$td 		  		= $this->input->post('td');
		$bb 		  		= $this->input->post('bb');
		$menyusui				= $this->input->post('menyusui');
		$rp				= $this->input->post('rp');
		$ku				= $this->input->post('ku');
		$pr				= $this->input->post('pr');
		$spi				= $this->input->post('spi');
		$pt				= $this->input->post('pt');
		$akd				= $this->input->post('akd');
		$mjd				= $this->input->post('mjd');
		$tgp				= $this->input->post('tgp');
		$tgd				= $this->input->post('tgd');
		$tgc				= $this->input->post('tgc');
		$pj				= $this->input->post('pj');
		$id_pemkb 		  		= $this->input->post('id_pemkb');
		$status		  		= $this->input->post('status');


			/*================== transaction begin ======================*/
			$this->db->trans_begin();

			$this->insert_data($id_poli,$nkfk,$nsk,$kd_pasien,$nama,$tt_lahir,$umur,$pen,$pek,$alamat,$bpjs,$tks,$ns,$pensum,$peksum,$ja,$uat,$kt,$sk,$ht,$dh,$td,$bb,$menyusui,$rp,$ku,$pr,$spi,$pt,$akd,$mjd,$tgp,$tgd,$tgc,$pj,$id_pemkb,$status,$date);

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

	function insert_data($id_poli,$nkfk,$nsk,$kd_pasien,$nama,$tt_lahir,$umur,$pen,$pek,$alamat,$bpjs,$tks,$ns,$pensum,$peksum,$ja,$uat,$kt,$sk,$ht,$dh,$td,$bb,$menyusui,$rp,$ku,$pr,$spi,$pt,$akd,$mjd,$tgp,$tgd,$tgc,$pj,$id_pemkb,$status,$date){
		$data_kb = array(
						'ID_POLI_KB' 		=> $id_poli,
						'NO_KD_FASKES_KB'	=> $nkfk,
						'NO_SERI_KARTU'		=> $nsk,
						'KODE_PASIEN' 		=> $kd_pasien,
						'NAMA_LENGKAP' 		=> $nama,
						'TEMPAT_TGL_LAHIR'  => $tt_lahir,
						'UMUR'            	=> $umur,
						'PENDIDIKAN'		=> $pen,
						'PEKERJAAN'			=> $pek,
						'ALAMAT'            => $alamat,
						'NO_BPJS'           => $bpjs,
						'TAHAPAN_KS'			=> $tks,
						'NAMA_SUAMI'        	=> $ns,
						'PENDIDIKAN_SUAMI'   	=> $pensum,
						'PEKERJAAN_SUAMI'       => $peksum,
						'JUMLAH_ANAK'	    	=> $ja,
						'UMUR_ANAK_TERKECIL' 	=> $uat,
						'STATUS_KB' 			=> $sk,
						'CARA_KB_TERAKHIR'      => $kt,
						'HAID_TERAKHIR_TGL'  	=> $ht,
						'DUGAAN_HAMIL'			=> $dh,
						'MENYUSUI'				=> $menyusui,
						'RPS'					=> $rp,
						'KEADAAN_UMUM'			=> $ku,
						'BERAT_BADAN'			=> $bb,
						'TEKANAN_DARAH'			=> $td,
						'POSISI_RAHIM'			=> $pr,
						'SPD'					=> $spi,
						'PEMERIKSAAN_TAMBAHAN'	=> $pt,
						'AKBD'					=> $akd,
						'MJP'					=> $mjd,
						'TGL_DIPESAN'			=> $tgp,
						'TGL_DILAYANI'			=> $tgd,
						'TGL_DICABUT'			=> $tgc,
						'PENANGGUNG_JAWAB'		=> $pj,
						'ID_PEM_KB' 			=> $id_pemkb,
						'Status' 		   		=> 0,
						'ID_USER' 				=> 9);

		$this->M_poli_kb->m_insert_data($data_kb);
	}

	public function update(){

		
		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('tgl')));
		$id_poli		= $this->input->post('code');	
		$kd_pasien      	= $this->input->post('kd_pasien');
		$nkfk      	= $this->input->post('nkfk');	
		$nsk      	= $this->input->post('nsk');
		$nama     	 		= $this->input->post('nm_lengkap');
		$tt_lahir			 	= $this->input->post('tt_lahir');
		$umur				= $this->input->post('umur');
		$pen				= $this->input->post('pendidikan');
		$pek				= $this->input->post('pekerjaan');
		$alamat 			= $this->input->post('alamat');
		$bpjs 				= $this->input->post('bpjs');
		$tks 			= $this->input->post('tks');
		$ns 			= $this->input->post('ns');
		$pensum		 			= $this->input->post('pensum');
		$peksum		 			= $this->input->post('peksum');
		$ja					= $this->input->post('ja');
		$uat 		  		= $this->input->post('uat');
		$kt 		  		= $this->input->post('kt');
		$sk 		  		= $this->input->post('sk');
		$ht 		  		= $this->input->post('ht');
		$dh 		  		= $this->input->post('dh');
		$td 		  		= $this->input->post('td');
		$bb 		  		= $this->input->post('bb');
		$menyusui				= $this->input->post('menyusui');
		$rp				= $this->input->post('rp');
		$ku				= $this->input->post('ku');
		$pr				= $this->input->post('pr');
		$spi				= $this->input->post('spi');
		$pt				= $this->input->post('pt');
		$akd				= $this->input->post('akd');
		$mjd				= $this->input->post('mjd');
		$tgp				= $this->input->post('tgp');
		$tgd				= $this->input->post('tgd');
		$tgc				= $this->input->post('tgc');
		$pj				= $this->input->post('pj');
		$id_pemkb 		  		= $this->input->post('id_pemkb');
		$status		  		= $this->input->post('status');
		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		$this->update_data($id_poli,$nkfk,$nsk,$kd_pasien,$nama,$tt_lahir,$umur,$pen,$pek,$alamat,$bpjs,$tks,$ns,$pensum,$peksum,$ja,$uat,$kt,$sk,$ht,$dh,$td,$bb,$menyusui,$rp,$ku,$pr,$spi,$pt,$akd,$mjd,$tgp,$tgd,$tgc,$pj,$id_pemkb,$status,$date);
	
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

	function update_data($id_poli,$nkfk,$nsk,$kd_pasien,$nama,$tt_lahir,$umur,$pen,$pek,$alamat,$bpjs,$tks,$ns,$pensum,$peksum,$ja,$uat,$kt,$sk,$ht,$dh,$td,$bb,$menyusui,$rp,$ku,$pr,$spi,$pt,$akd,$mjd,$tgp,$tgd,$tgc,$pj,$id_pemkb,$status,$date){
		$data_kb = array(
						'NO_KD_FASKES_KB'	=> $nkfk,
						'NO_SERI_KARTU'		=> $nsk,
						'KODE_PASIEN' 		=> $kd_pasien,
						'NAMA_LENGKAP' 		=> $nama,
						'TEMPAT_TGL_LAHIR'  => $tt_lahir,
						'UMUR'            	=> $umur,
						'PENDIDIKAN'		=> $pen,
						'PEKERJAAN'			=> $pek,
						'ALAMAT'            => $alamat,
						'NO_BPJS'           => $bpjs,
						'TAHAPAN_KS'			=> $tks,
						'NAMA_SUAMI'        	=> $ns,
						'PENDIDIKAN_SUAMI'   	=> $pensum,
						'PEKERJAAN_SUAMI'       => $peksum,
						'JUMLAH_ANAK'	    	=> $ja,
						'UMUR_ANAK_TERKECIL' 	=> $uat,
						'STATUS_KB' 			=> $sk,
						'CARA_KB_TERAKHIR'      => $kt,
						'HAID_TERAKHIR_TGL'  	=> $ht,
						'DUGAAN_HAMIL'			=> $dh,
						'MENYUSUI'				=> $menyusui,
						'RPS'					=> $rp,
						'KEADAAN_UMUM'			=> $ku,
						'BERAT_BADAN'			=> $bb,
						'TEKANAN_DARAH'			=> $td,
						'POSISI_RAHIM'			=> $pr,
						'SPD'					=> $spi,
						'PEMERIKSAAN_TAMBAHAN'	=> $pt,
						'AKBD'					=> $akd,
						'MJP'					=> $mjd,
						'TGL_DIPESAN'			=> $tgp,
						'TGL_DILAYANI'			=> $tgd,
						'TGL_DICABUT'			=> $tgc,
						'PENANGGUNG_JAWAB'		=> $pj,
						'ID_PEM_KB' 			=> $id_pemkb,
						'Status' 		   		=> 0,
						'ID_USER' 				=> 9);

		$this->M_poli_kb->m_update_data($data_kb,$id_poli);
	}


	function print_preview($pq_number){
		$pq_number = str_replace('__', '/', $pq_number);

		include(APPPATH . 'libraries/mpdf/mpdf.php');
         $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $group_pq 		= $this->m_purchase_request->get_group_pq($pq_number);

        $detail_pq 		= $this->m_purchase_request->get_detail_pq($pq_number);

        $total_baris 	= $this->m_purchase_request->count_detail_pq($pq_number); 
        $max_baris 		= 30;

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
	        			<img src='".base_url('assets/logo_mitra.PNG')."' width='180' height='100'>
	        			<h2>PT.Je Soft Technologi</h2>		        		
		        		<h2>Telp : 089614979926 </h2>
	        		</td>
	        		<td valign='top' width='80%' align='center'>
		        			<br>
		        		<p style=font-size:35px><b>PURCHASE REQUEST</b></p>
		        		</td>
	        			<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Karawang, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        			<!--<p style=font-size:24px>Tanggal PO : ".convert_to_dmy($group_po->PODate)."</p>-->
		        		</td>
	        		</tr>
		        </table>";


		    $html .= "<table width='100%'>"
		    		."<tr>"
		    			."<td valign='top' width='50%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='40%'>Request Number</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_pq->PQNumber</td>"
		    					."</tr>"

		    					."<!--<tr>"
			    					."<td width='40%'>Request Date</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>".convert_to_dmy($group_pq->PQDate)."</td>"
		    					."</tr>-->"
		    					
		    					."<tr>"
		    						."<td width='40%'>Warehouse</td>"
		    						."<td width='5%'>:</td>"
		    						."<td width='55%'>$group_pq->WarehouseDesc</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    			."<td valign='top' width='50%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='50%' valign='top'>Department</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='45%' valign='top'>$group_pq->DepartmentName</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='50%' valign='top'></td>"
			    					."<td width='5%' valign='top'></td>"
			    					."<td width='45%' valign='top'></td>"
		    					."</tr>"
		    					
		    				."</table>"
		    			."</td>"
		    		."</tr>"
		    		."</table>";

		    $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
		    		."<tr>"
		    		."<th width='5%' align='left' class=' bdr-bottom bdr-left bdr-top'>No</th>"
		    		."<th width='15%' align='left' class=' bdr-bottom bdr-left bdr-top'>Item Code</th>"
		    		."<th width='60%' align='left' class=' bdr-bottom bdr-left bdr-top'>Item Desc</th>"
		    		."<th align='right' width='10%' class=' bdr-bottom bdr-left bdr-top'>QTY</th>"
		      		."<th align='center' width='10%' class=' bdr-bottom bdr-left bdr-top  bdr-right'>Unit</th>"
		    		."</tr>";
		    	$no = 1;
	        	foreach($detail_pq as $row){
	        		$html .= "<tr class='body-report'>"
	        			."<td align='left' class='bdr-left'>".($no++)."</td>"
	        			."<td align='left'>$row->ItemCode</td>"
	        			."<td align='left'>".substr($row->ItemDesc, 0,35)."</td>"
	        			."<td align='right'>".formatRp_acc($row->QTY)."</td>"
	        			."<td align='center' class='bdr-right'>$row->ItemUnit</td>"
	        			."</tr>";
	        	}

	        	$sisa_baris = $max_baris - $total_baris;

	        	if($sisa_baris > 0){
	        		for ($i=0; $i < ($sisa_baris - 1) ; $i++) { 
	        			$html .= "<tr><td colspan='5' height='25' class='bdr-right bdr-left'></td></tr>";
	        		}
	        		$html .= "<tr><td colspan='5' class='bdr-bottom bdr-left bdr-right'></td></tr>";
	        	}else{

	        		$html .= "<tr><td colspan='5' class='bdr-bottom bdr-left bdr-right'></td></tr>";
	        	}

	        	$html .= "<tr>"
	        			."<td colspan='3' class='' valign='top'>"
	        				."<p>"
	        			."</td>"
	        			."<td valign='top' colspan='2' rowspan='2'>"
	        				."<table width='100%'>"
	        				."<tr>"
	        					."<td>Total QTY</td>"
	        					."<td>:</td>"
	        					."<td align='right' class='bdr-bottom'>".formatRp_acc($group_pq->TotalQTY)."</td>"
	        				."</tr>"
	        				."</table>"
	        			."</td>"
	        			."</tr>"
	        			."<tr>"
	        			."<td colspan='3' valign='top'>"
	        				."<table>"
			    			."<tr>"
			    				."<td align='center'>Dibuat Oleh</td>"
			    				."<td align='center'>Disetujui Oleh</td>"
			    			."</tr>"
			    			."<tr>"
			    				."<td height='120'>_________________&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td height='120'>_________________&#x20;&#xA0;&#160;&nbsp;</td>"
			    			."</tr>"
			    			."</table>"
	        			."</td>"
	        			."</tr>"
	        			."<tr>"
	        			."<td colspan='3' class='' valign='top'>"
	        				."<p>Desc : "
	        				."<span style='font-size:10px;'>".substr($group_pq->PQDesc, 0,200)."</span></p>"
	        			."</td>"
	        			."</tr>";

	    	$html .= "</table>
	    	</body>
	    	</head>
	    	</html>";
	        
	         $mpdf->WriteHTML($html);

	         $mpdf->Output('purchase_request.pdf', 'I');

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
	        			<img src='".base_url('assets/logo_mitra.PNG')."' width='180' height='100'>
	        			<h2>PT.Je Soft Technologi</h2>		        		
		        		<h2>Telp : 089614979926 </h2>
	        		</td>
	        		<td valign='top' width='80%' align='center'>
		        			<br>
		        		<p style=font-size:35px><b>PURCHASE REQUEST</b></p>
		        		</td>
	        			<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Karawang, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        			<!--<p style=font-size:24px>Tanggal PO : ".convert_to_dmy($group_po->PODate)."</p>-->
		        		</td>
	        		</tr>
		        </table>";
						$html .= "<table width='100%'>"
					    		."<tr>"
					    			."<td valign='top' width='50%'>"
					    				."<table width='100%'>"
					    					."<tr>"
						    					."<td width='40%'>Request Number</td>"
						    					."<td width='5%'>:</td>"
						    					."<td width='55%'>$group_pq->PQNumber</td>"
					    					."</tr>"
					    					."<tr>"
						    					."<td width='40%'>Request Date</td>"
						    					."<td width='5%'>:</td>"
						    					."<td width='55%'>".convert_to_dmy($group_pq->PQDate)."</td>"
					    					."</tr>"
					    				."</table>"
					    			."</td>"
					    			."<td valign='top' width='50%'>"
					    				."<table width='100%'>"
					    					."<tr>"
						    					."<td width='50%' valign='top'>Department</td>"
						    					."<td width='5%' valign='top'>:</td>"
						    					."<td width='45%' valign='top'>$group_pq->DepartmentName</td>"
					    					."</tr>"
					    					."<tr>"
						    					."<td width='50%' valign='top'></td>"
						    					."<td width='5%' valign='top'></td>"
						    					."<td width='45%' valign='top'></td>"
					    					."</tr>"
					    					
					    				."</table>"
					    			."</td>"
					    		."</tr>"
					    		."</table>";
					     $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
						    		."<tr>"
						    		."<th width='5%' align='left' class=' bdr-bottom bdr-left bdr-top'>No</th>"
						    		."<th width='20%' align='left' class=' bdr-bottom bdr-left bdr-top'>Item Code</th>"
						    		."<th width='55%' align='left' class=' bdr-bottom bdr-left bdr-top'>Item Desc</th>"
						    		."<th align='right' width='10%' class=' bdr-bottom bdr-left bdr-top'>QTY</th>"
						    		."<th align='center' width='10%' class=' bdr-bottom bdr-left bdr-top bdr-right'>Unit</th>"
						    		."</tr>";

						    	$min_list = ($Page - 1) * $max_baris;
						    	$max_list = $min_list > 0 ? ($min_list + $max_baris): $max_baris;
						    	$no 	  = 0;
					        	foreach($detail_pq as $row){
					        		if($no==$min_list){
						        		if($min_list<$max_list){
							        		$html .= "<tr class='body-report'>"
							        			."<td align='left' class='bdr-left'>".($min_list+1)."</td>"
							        			."<td align='left'>$row->ItemCode</td>"
							        			."<td align='left'>".substr($row->ItemDesc, 0,35)."</td>"
							        			."<td align='right'>".formatRp_acc($row->QTY)."</td>"
							        			."<td align='center' class='bdr-right'>$row->ItemUnit</td>"
							        			."</tr>";
							        		}

					        			$min_list++;
					        		}
					        		$no++;
					        	}
					$html .= "<tr><td colspan='5' class='bdr-bottom bdr-left bdr-right'></td></tr>";
					$html .= "</table>
			    	</body>
			    	</head>
			    	</html>";
			        
			         $mpdf->WriteHTML($html);
			         $mpdf->AddPage();
	    		}else{
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
			        	<table width='100%'>
				        		<tr>
				        		<td valign='top' width='50%' align='left' class='head-table'>	
				        			<img src='".base_url('assets/logo_mitra.PNG')."' width='180' height='100'>
	        			<h2>PT.Je Soft Technologi</h2>		        		
		        		<h2>Telp : 089614979926 </h2>
				        		</td>
				        		<td valign='top' width='80%' align='center'>
					        			<br>
					        		<p style=font-size:35px><b>PURCHASE REQUEST</b></p>
					        		</td>
				        			<td valign='top' width='70%' align='right'>
					        			<br>
					        			<p style=font-size:24px><b>Karawang, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
					        			<!--<p style=font-size:24px>Tanggal PO : ".convert_to_dmy($group_po->PODate)."</p>-->
					        		</td>
				        		</tr>
		        		</table>";
					    $html .= "<table width='100%'>"
					    		."<tr>"
					    			."<td valign='top' width='50%'>"
					    				."<table width='100%'>"
					    					."<tr>"
						    					."<td width='40%'>Request Number</td>"
						    					."<td width='5%'>:</td>"
						    					."<td width='55%'>$group_pq->PQNumber</td>"
					    					."</tr>"
					    					."<tr>"
						    					."<td width='40%'>Request Date</td>"
						    					."<td width='5%'>:</td>"
						    					."<td width='55%'>".convert_to_dmy($group_pq->PQDate)."</td>"
					    					."</tr>"
					    				."</table>"
					    			."</td>"
					    			."<td valign='top' width='50%'>"
					    				."<table width='100%'>"
					    					."<tr>"
						    					."<td width='50%' valign='top'>Department</td>"
						    					."<td width='5%' valign='top'>:</td>"
						    					."<td width='45%' valign='top'>$group_pq->DepartmentName</td>"
					    					."</tr>"
					    					."<tr>"
						    					."<td width='50%' valign='top'></td>"
						    					."<td width='5%' valign='top'></td>"
						    					."<td width='45%' valign='top'></td>"
					    					."</tr>"
					    					
					    				."</table>"
					    			."</td>"
					    		."</tr>"
					    		."</table>";

						    $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
						    		."<tr>"
						    		."<th width='5%' align='left' class=' bdr-bottom bdr-left bdr-top'>No</th>"
						    		."<th width='10%' align='left' class=' bdr-bottom bdr-left bdr-top'>Item Code</th>"
						    		."<th width='65%' align='left' class=' bdr-bottom bdr-left bdr-top'>Item Desc</th>"
						    		."<th align='right' width='10%' class=' bdr-bottom bdr-left bdr-top'>QTY</th>"
						    		."<th align='center' width='10%' class=' bdr-bottom bdr-left bdr-top bdr-right'>Unit</th>"
						    		."</tr>";
					        	$min_list = ($Page - 1) * $max_baris;
						    	$max_list = $min_list > 0 ? ($min_list + $max_baris): $max_baris;
						    	$no 	  = 0;
					        	foreach($detail_pq as $row){
					        		if($no==$min_list){
						        		if($min_list<$max_list){
							        		$html .= "<tr class='body-report'>"
							        			."<td align='left' class='bdr-left'>".($min_list+1)."</td>"
							        			."<td align='left'>$row->ItemCode</td>"
							        			."<td align='left'>".substr($row->ItemDesc, 0,35)."</td>"
							        			."<td align='right'>".formatRp_acc($row->QTY)."</td>"
							        			."<td align='center' class='bdr-right'>$row->ItemUnit</td>"
							        			."</tr>";
							        		}

					        			$min_list++;
					        		}
					        		$no++;
					        	}

					        	$sisa_baris = $max_baris - $sisa_baris;
					        	if($sisa_baris > 0){
					        		for ($i=0; $i < ($sisa_baris - 1) ; $i++) { 
					        			$html .= "<tr><td colspan='5' height='25' class='bdr-right bdr-left'></td></tr>";
					        		}
					        		$html .= "<tr><td colspan='5' class='bdr-bottom bdr-left bdr-right'></td></tr>";
					        	}else{

					        		$html .= "<tr><td colspan='5' class='bdr-bottom bdr-left bdr-right'></td></tr>";
					        	}

					        	$html .= "<tr>"
					        			."<td colspan='3' class='' valign='top'>"
					        				."<p>"
					        			."</td>"
					        			."<td valign='top' colspan='2' rowspan='2'>"
					        				."<table width='100%'>"
					        				."<tr>"
					        					."<td>Total QTY</td>"
					        					."<td>:</td>"
					        					."<td align='right' class='bdr-bottom'>".formatRp_acc($group_pq->TotalQTY)."</td>"
					        				."</tr>"
					        				."</table>"
					        			."</td>"
					        			."</tr>"
					        			."<tr>"
					        			."<td colspan='3' valign='top'>"
					        				."<table>"
							    			."<tr>"
							    				."<td align='center'>Dibuat Oleh</td>"
							    				."<td align='center'>Disetujui Oleh</td>"
							    			."</tr>"
							    			."<tr>"
							    				."<td height='120'>_________________&#x20;&#xA0;&#160;&nbsp;</td>"
			    								."<td height='120'>_________________&#x20;&#xA0;&#160;&nbsp;</td>"
							    			."</tr>"
							    			."</table>"
					        			."</td>"
					        			."</tr>"
					        			."<tr>"
					        			."<td colspan='3' class='' valign='top'>"
					        				."<p>Desc : "
					        				."<span style='font-size:10px;'>".substr($group_pq->PQDesc, 0,200)."</span></p>"
					        			."</td>"
					        			."</tr>";

					    	$html .= "</table>
					    	</body>
					    	</head>
					    	</html>";
	        
				         $mpdf->WriteHTML($html);

				         $mpdf->Output('purchase_request.pdf', 'I');
	    		}
	    	}
	    }
	}
}