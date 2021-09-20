<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {

	/*
	Author 		: Sisepus 
	Date 		: 23-03-2018
	*/

	public $menuID 	= 16;
	public $name 	= 'Kunjungan Pasien';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_kunjungan');
		$this->load->model('M_menu_daftar');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
	}

	public function ajax(){
		$get_kunjungan = $this->M_kunjungan->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_kunjungan);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_daftar->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$this->load->view('daftar/header1');
		$this->load->view('daftar/data_kunjungan',$data);
	}

	public function add(){
		$data['menu_link'] = $this->M_menu_daftar->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['TransNumber'] 	= $this->M_kunjungan->create_no_transaction();	
		$this->load->view('daftar/header1');
		$this->load->view('daftar/new_data_kunjungan',$data);
		$this->load->view('daftar/footer1');
	}

	public function edit($id_kunjungan){

		$data['menu_link'] 	= $this->M_menu_daftar->get_menu($this->menuID);	
		$data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_kunjungan->m_get_group($id_kunjungan);
		$this->load->view('daftar/header1');
		$this->load->view('daftar/edit_data_kunjungan',$data);
		$this->load->view('daftar/footer1');
	}
	
	function get_list_priksa(){
		$id_priksa 		= ($this->input->post('id_priksa')) ? $this->input->post('id_priksa'):'';
		$priksa    		= ($this->input->post('priksa')) ? $this->input->post('priksa'):'';

		$list_priksa 		= $this->M_kunjungan->m_get_list_priksa($id_priksa,$priksa);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_priksa);
	}
	
	
	function get_list_pasien(){
		$kd_pasien		= ($this->input->post('kd_pasien')) ? $this->input->post('kd_pasien'):'';
		$nama    		= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_pasien 		= $this->M_kunjungan->m_get_list_pasien($kd_pasien,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_pasien);
	}
	

	public function insert(){

		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_kunjungan 		= $this->M_kunjungan->create_no_transaction();	
		$kd_pasien      	= $this->input->post('kd_pasien');
		$nama     	 		= $this->input->post('nm_lengkap');
		$jenis			 	= $this->input->post('jenis');
		$tt_lahir 			= $this->input->post('tt_lahir');
		$umur				= $this->input->post('umur');
		$telpon 			= $this->input->post('telpon');
		$alamat 			= $this->input->post('alamat');
		$bpjs 				= $this->input->post('bpjs');
		$faskes 			= $this->input->post('faskes');

		$id_unit 			= $this->input->post('id_unit');
		$id_dokter 			= $this->input->post('id_dokter');
		$id_priksa 			= $this->input->post('id_priksa');
		$pemeriksaan		= $this->input->post('pemeriksaan');
		$biaya 		  		= $this->input->post('biaya');
		$status     		= $this->input->post('status');

			/*================== transaction begin ======================*/
			$this->db->trans_begin();

			$this->insert_data($id_kunjungan,$kd_pasien,$nama,$jenis,$tt_lahir,$umur,$telpon,$alamat,$bpjs,$faskes,$id_unit,$id_dokter,$id_priksa,$pemeriksaan,$biaya,$date);

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

	function insert_data($id_kunjungan,$kd_pasien,$nama,$jenis,$tt_lahir,$umur,$telpon,$alamat,$bpjs,$faskes,$id_unit,$id_dokter,$id_priksa,$pemeriksaan,$biaya,$date){
		$data_kunjungan = array(
						'ID_BEROBAT' 			=> $id_kunjungan,
						'KODE_PASIEN' 			=> $kd_pasien,
						'NAMA_LENGKAP' 			=> $nama,
						'JENIS_KELAMIN'	=> $jenis,
						'TEMPAT_TGL_LAHIR' 		=> $tt_lahir,
						'UMUR'            	=> $umur,
						'NO_TELPON' 			=> $telpon,
						'ALAMAT'            => $alamat,
						'NO_BPJS'           => $bpjs,
						'FASKES'        	=> $faskes,
						'ID_UNIT'   		=> $id_unit,
						'ID_DOKTER'         => $id_dokter,
						'ID_NAMA_PEMERIKSAAN' => $id_priksa,
						'PEMERIKSAAN'    	=> $pemeriksaan,
						'BIAYA' 			=> $biaya,
						'Status' 		    => 0,
						'ID_USER' 			=> 2,
						'CREATE_DATE'       => $date);

		$this->M_kunjungan->m_insert_data($data_kunjungan);
	}

	public function update(){

		date_default_timezone_set("Asia/Jakarta");

		$date 			= date('Y-m-d',strtotime($this->input->post('txt_date')));
		$id_kunjungan 		= $this->input->post('id_kunjungan');	
		$kd_pasien      	= $this->input->post('kd_pasien');
		$nama     	 		= $this->input->post('nm_lengkap');
		$jenis			 	= $this->input->post('jenis');
		$tt_lahir 			= $this->input->post('tt_lahir');
		$umur				= $this->input->post('umur');
		$telpon 			= $this->input->post('telpon');
		$alamat 			= $this->input->post('alamat');
		$bpjs 				= $this->input->post('bpjs');
		$faskes 			= $this->input->post('faskes');

		$id_unit 			= $this->input->post('id_unit');
		$id_dokter 			= $this->input->post('id_dokter');
		$id_priksa 			= $this->input->post('id_priksa');
		$pemeriksaan		= $this->input->post('pemeriksaan');
		$biaya 		  		= $this->input->post('biaya');
		$status     		= $this->input->post('status');
		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		$this->update_group($id_kunjungan,$kd_pasien,$nama,$jenis,$tt_lahir,$umur,$telpon,$alamat,$bpjs,$faskes,$id_unit,$id_dokter,$id_priksa,$pemeriksaan,$biaya,$status,$date);
	
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

	function update_group($id_kunjungan,$kd_pasien,$nama,$jenis,$tt_lahir,$umur,$telpon,$alamat,$bpjs,$faskes,$id_unit,$id_dokter,$id_priksa,$pemeriksaan,$biaya,$status,$date){
		$data_group = array(
						'KODE_PASIEN' 			=> $kd_pasien,
						'NAMA_LENGKAP' 			=> $nama,
						'JENIS_KELAMIN'    		=> $jenis,
						'TEMPAT_TGL_LAHIR' 		=> $tt_lahir,
						'UMUR'            	=> $umur,
						'NO_TELPON' 		=> $telpon,
						'ALAMAT'            => $alamat,
						'NO_BPJS'           => $bpjs,
						'FASKES'        	=> $faskes,
						'ID_UNIT'   		=> $id_unit,
						'ID_DOKTER'         => $id_dokter,
						'ID_NAMA_PEMERIKSAAN' => $id_priksa,
						'PEMERIKSAAN'    	=> $pemeriksaan,
						'BIAYA' 			=> $biaya,
						'Status' 		    => 0,
						'ID_USER' 			=> 2);

		$this->M_kunjungan->m_update_group($data_group,$id_kunjungan);
	}

	
	function get_list_unit(){
		$list_unit = $this->M_kunjungan->m_get_list_unit();
		echo json_encode($list_unit);
	}

	function get_list_dokter(){
		$list_dokter = $this->M_kunjungan->m_get_list_dokter();
		echo json_encode($list_dokter);
	}
	
	function suspend_data(){
		$no_transaction 	= $this->input->post('transaction_no');

		$data_suspend = array('status'=>1);

		$this->db->trans_begin();

		$this->M_kunjungan->m_suspend_data($data_suspend,$no_transaction);

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



	function print_kunjungan($id_kunjungan){

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', array(215,140), 10, '', 3,3,3,3,'','','P');

        $ri_number 		= $this->m_purchase_return->get_ri_number($pr_number);

        $group_pr 		= $this->m_purchase_return->m_get_group_print($pr_number);

        $list_detail 	= $this->m_purchase_return->m_get_detail_pr($pr_number,$ri_number);

		$detail_ri 		= json_encode($list_detail);
		$detail_ri 		= json_decode($detail_ri);


        $total_baris 	= $this->m_purchase_return->m_count_detail_pr($pr_number); 
        
        $max_baris 		= 6;


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
	        			<img src='".base_url('assets/logo_mitra.PNG')."' width='180' height='100'>
	        			<h2>PT.Je Soft Technologi</h2>		        		
		        		<h2>Telp : 089614979926 </h2>
	        		</td>
	        		<td valign='top' width='80%' align='center'>
		        			<br>
		        		<p style=font-size:35px><b>PURCHASE RETURN</b></p>
		        		</td>
	        			<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Karawang, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        		<!-- Hiden	<p style=font-size:24px>Tgl Return : ".convert_to_dmy($group_pr->PRDate)."</p>-->
		        		</td>
	        		</tr>
		        </table>";

		    $html .= "<table width='100%'>"
		    		."<tr>"
		    			."<td valign='top' width='40%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='40%'>Return Number</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_pr->PRNumber</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='40%'>Receipt Number</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>$group_pr->RINumber</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='40%'>Return Date</td>"
			    					."<td width='5%'>:</td>"
			    					."<td width='55%'>".convert_to_dmy($group_pr->PRDate)."</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    			."<td valign='top' width='60%'>"
		    				."<table width='100%'>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Vendor</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>$group_pr->VendorName</td>"
		    					."</tr>"
		    					."<tr>"
			    					."<td width='35%' valign='top'>Vendor Address</td>"
			    					."<td width='5%' valign='top'>:</td>"
			    					."<td width='60%' valign='top'>
			    						<p>
			    							$group_pr->VendorAddress
			    						</p>
			    					</td>"
		    					."</tr>"
		    				."</table>"
		    			."</td>"
		    		."</tr>"
		    		."</table>";

		    $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
		    		."<tr>"
		    		."<th width='5%' align='left' class=' bdr-bottom bdr-left bdr-top'>No</th>"
		    		."<th width='20%' align='left' class=' bdr-bottom bdr-right bdr-top'>Item Code</th>"
		    		."<th width='25%' align='left' class=' bdr-bottom bdr-right bdr-top'>Item Desc</th>"
		    		."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTY</th>"
		    		."<th align='center' width='10%' class=' bdr-bottom bdr-right bdr-top'>Unit</th>"
		    		//."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTYAR</th>"
		    		//."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTYRT</th>"
		    		."</tr>";
		    	$no = 1;

	        	foreach($detail_ri as $row){
	        		$html .= "<tr class='body-report'>"
	        			."<td align='left' class='bdr-left'>".($no++)."</td>"
	        			."<td align='left'>$row->ItemCode</td>"
	        			."<td align='left'>".substr($row->ItemDesc, 0,50)."</td>"
	        			//."<td align='right'>".formatRp_acc($row->QTY)."</td>"
	        			."<td align='right'>".formatRp_acc($row->QTYRT)."</td>"
	        			."<td align='center' class='bdr-right'>$row->ItemUnit</td>"
	        			//."<td align='right'>".formatRp_acc($row->QTYAR)."</td>"
	        			// ."<td align='right' class='bdr-right'>".formatRp_acc($row->QTY)."</td>"
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
	        			."<td colspan='5' class='' valign='top'>"
	        				."<p>Desc : "
	        				."<span style='font-size:10px;'>".substr($group_pr->PRDesc, 0,200)."</span></p>"
	        			."</td>"
	        			."</tr>"
	        			."<tr>"
	        			."<td colspan='5' valign='top'>"
	        				."<table>"
			    			."<tr>"
			    				."<td align='center'>Di Buat</td>"
			    				."<td align='center'>Di Setujui</td>"
			    				."<td align='center'>Gudang</td>"
			    				."<td align='center'>Pengirim</td>"
			    				."<td align='center'>Penerima</td>"
			    			."</tr>"
			    			."<tr>"
			    				."<td align='center' height='80'>________________   	 	&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td align='center' height='80'>&#x20;&#xA0;&#160;&nbsp; ________________  	&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td align='center' height='80'> 	&#x20;&#xA0;&#160;&nbsp; ________________   	&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td align='center' height='80'> 	&#x20;&#xA0;&#160;&nbsp; ________________   	&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td align='center' height='80'> 	&#x20;&#xA0;&#160;&nbsp; ________________   	&#x20;&#xA0;&#160;&nbsp;</td>"
			    			."</tr>"
			    			."</table>"
	        			."</td>"
	        			."</tr>";

	    	$html .= "</table>
	    	</body>
	    	</head>
	    	</html>";
	        
	         $mpdf->WriteHTML($html);

	         $mpdf->Output('purchase_return.pdf', 'I');
	    }else{

	    	$total_page 	= ceil($total_baris / $max_baris);
    		$sisa_baris 	= $total_baris % $max_baris;

    		for($Page=1;$Page<=$total_page;$Page++){
	    		if($Page < $total_page){
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
								font-size:16px
							}
							.content-table{
								font-size:100%
							}
			        	</style>
			        	</head>
			        	<body>
			        	<table width='100%'>
	        		<tr>
	        		<td valign='top' width='50%' align='left'>	
	        			<img src='".base_url('assets/logo_mitra.PNG')."' width='180' height='100'>
	        			<h2>PT.Je Soft Technologi</h2>		        		
		        		<h2>Telp : 089614979926 </h2>
	        		</td>
	        		<td valign='top' width='80%' align='center'>
		        			<br>
		        		<p style=font-size:35px><b>PURCHASE RETURN</b></p>
		        		</td>
	        			<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Karawang, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        			<!-- Hiden	<p style=font-size:24px>Tgl Return : ".convert_to_dmy($group_pr->PRDate)."</p>-->
		        		</td>
	        		</tr>
		        </table>";

				    $html .= "<table width='100%'>"
				    		."<tr>"
				    			."<td valign='top' width='40%'>"
				    				."<table width='100%'>"
				    					."<tr>"
					    					."<td width='40%'>Return Number</td>"
					    					."<td width='5%'>:</td>"
					    					."<td width='55%'>$group_pr->PRNumber</td>"
				    					."</tr>"
				    					."<tr>"
					    					."<td width='40%'>Receipt Number</td>"
					    					."<td width='5%'>:</td>"
					    					."<td width='55%'>$group_pr->RINumber</td>"
				    					."</tr>"
				    					."<tr>"
					    					."<td width='40%'>Return Date</td>"
					    					."<td width='5%'>:</td>"
					    					."<td width='55%'>".convert_to_dmy($group_pr->PRDate)."</td>"
				    					."</tr>"
				    				."</table>"
				    			."</td>"
				    			."<td valign='top' width='60%'>"
				    				."<table width='100%'>"
				    					."<tr>"
					    					."<td width='35%' valign='top'>Vendor</td>"
					    					."<td width='5%' valign='top'>:</td>"
					    					."<td width='60%' valign='top'>$group_pr->VendorName</td>"
				    					."</tr>"
				    					."<tr>"
					    					."<td width='35%' valign='top'>Vendor Address</td>"
					    					."<td width='5%' valign='top'>:</td>"
					    					."<td width='60%' valign='top'>
					    						<p>
					    							$group_pr->VendorAddress
					    						</p>
					    					</td>"
				    					."</tr>"
				    				."</table>"
				    			."</td>"
				    		."</tr>"
				    		."</table>";

				    $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
				    		."<tr>"
				    		."<th width='5%' align='left' class=' bdr-bottom bdr-left bdr-top'>No</th>"
				    		."<th width='20%' align='left' class=' bdr-bottom bdr-right bdr-top'>Item Code</th>"
				    		."<th width='25%' align='left' class=' bdr-bottom bdr-right bdr-top'>Item Desc</th>"
				    		."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTY</th>"
				    		."<th align='center' width='10%' class=' bdr-bottom bdr-right bdr-top'>Unit</th>"
				    		//."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTYAR</th>"
				    		//."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTYRT</th>"
				    		."</tr>";
				    		
			    	$min_list = ($Page - 1) * $max_baris;
			    	$max_list = $min_list > 0 ? ($min_list + $max_baris): $max_baris;
			    	$no 	  = 0;

		        	foreach($detail_ri as $row){
		        		if($no==$min_list){
					        if($min_list<$max_list){
				        		$html .= "<tr class='body-report'>"
				        			."<td align='left' class='bdr-left'>".($min_list+1)."</td>"
				        			."<td align='left'>$row->ItemCode</td>"
				        			."<td align='left'>".substr($row->ItemDesc, 0,50)."</td>"
				        			."<td align='right'>".formatRp_acc($row->QTYRT)."</td>"
        							."<td align='center' class='bdr-right'>$row->ItemUnit</td>"
				        			//."<td align='right'>".formatRp_acc($row->QTYAR)."</td>"
				        			//."<td align='right' class='bdr-right'>".formatRp_acc($row->QTYRT)."</td>"
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
	        			<img src='".base_url('assets/logo_mitra.PNG')."' width='180' height='100'>
	        			<h2>PT.Je Soft Technologi</h2>		        		
		        		<h2>Telp : 089614979926 </h2>
	        		</td>
	        		<td valign='top' width='80%' align='center'>
		        			<br>
		        		<p style=font-size:35px><b>PURCHASE RETURN</b></p>
		        		</td>
	        			<td valign='top' width='70%' align='right'>
		        			<br>
		        			<p style=font-size:24px><b>Karawang, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</b></p>
		        		<!-- Hiden	<p style=font-size:24px>Tgl Return : ".convert_to_dmy($group_pr->PRDate)."</p>-->
		        		</td>
	        		</tr>
		        </table>";

				    $html .= "<table width='100%'>"
				    		."<tr>"
				    			."<td valign='top' width='40%'>"
				    				."<table width='100%'>"
				    					."<tr>"
					    					."<td width='40%'>PR Number</td>"
					    					."<td width='5%'>:</td>"
					    					."<td width='55%'>$group_pr->PRNumber</td>"
				    					."</tr>"
				    					."<tr>"
					    					."<td width='40%'>RI Number</td>"
					    					."<td width='5%'>:</td>"
					    					."<td width='55%'>$group_pr->RINumber</td>"
				    					."</tr>"
				    					."<tr>"
					    					."<td width='40%'>PR Date</td>"
					    					."<td width='5%'>:</td>"
					    					."<td width='55%'>".convert_to_dmy($group_pr->PRDate)."</td>"
				    					."</tr>"
				    				."</table>"
				    			."</td>"
				    			."<td valign='top' width='60%'>"
				    				."<table width='100%'>"
				    					."<tr>"
					    					."<td width='35%' valign='top'>Vendor</td>"
					    					."<td width='5%' valign='top'>:</td>"
					    					."<td width='60%' valign='top'>$group_pr->VendorName</td>"
				    					."</tr>"
				    					."<tr>"
					    					."<td width='35%' valign='top'>Vendor Address</td>"
					    					."<td width='5%' valign='top'>:</td>"
					    					."<td width='60%' valign='top'>
					    						<p>
					    							$group_pr->VendorAddress
					    						</p>
					    					</td>"
				    					."</tr>"
				    				."</table>"
				    			."</td>"
				    		."</tr>"
				    		."</table>";

				    $html .= "<table width='100%' border='0' cellpadding='2' cellspacing='0' class='content-table'>"
				    		."<tr>"
				    		."<th width='5%' align='left' class=' bdr-bottom bdr-left bdr-top'>No</th>"
				    		."<th width='20%' align='left' class=' bdr-bottom bdr-right bdr-top'>Item Code</th>"
				    		."<th width='25%' align='left' class=' bdr-bottom bdr-right bdr-top'>Item Desc</th>"
				    		."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTY</th>"
				    		."<th align='center' width='10%' class=' bdr-bottom bdr-right bdr-top'>Unit</th>"
				    		//."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTYAR</th>"
				    		//."<th align='right' width='10%' class=' bdr-bottom bdr-right bdr-top'>QTYRT</th>"
				    		."</tr>";
				    	$min_list = ($Page - 1) * $max_baris;
				    	$max_list = $min_list > 0 ? ($min_list + $max_baris): $max_baris;
				    	$no 	  = 0;

			        	foreach($detail_ri as $row){
			        		if($no==$min_list){
						        if($min_list<$max_list){
					        		$html .= "<tr class='body-report'>"
					        			."<td align='left' class='bdr-left'>".($min_list+1)."</td>"
					        			."<td align='left'>$row->ItemCode</td>"
					        			."<td align='left'>".substr($row->ItemDesc, 0,50)."</td>"
					        			."<td align='right'>".formatRp_acc($row->QTYRT)."</td>"
	        							."<td align='center' class='bdr-right'>$row->ItemUnit</td>"
					        			//."<td align='right'>".formatRp_acc($row->QTYAR)."</td>"
					        			//."<td align='right' class='bdr-right'>".formatRp_acc($row->QTYRT)."</td>"
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
	        			."<td colspan='5' class='' valign='top'>"
	        				."<p>Desc : "
	        				."<span style='font-size:10px;'>".substr($group_pr->PRDesc, 0,200)."</span></p>"
	        			."</td>"
	        			."</tr>"
	        			."<tr>"
	        			."<td colspan='5' valign='top'>"
	        				."<table>"
			    			."<tr>"
			    				."<td align='center'>Di Buat</td>"
			    				."<td align='center'>Di Setujui</td>"
			    				."<td align='center'>Gudang</td>"
			    				."<td align='center'>Pengirim</td>"
			    				."<td align='center'>Penerima</td>"
			    			."</tr>"
			    			."<tr>"
			    				."<td align='center' height='80'>________________   	 	&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td align='center' height='80'>&#x20;&#xA0;&#160;&nbsp; ________________  	&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td align='center' height='80'> 	&#x20;&#xA0;&#160;&nbsp; ________________   	&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td align='center' height='80'> 	&#x20;&#xA0;&#160;&nbsp; ________________   	&#x20;&#xA0;&#160;&nbsp;</td>"
			    				."<td align='center' height='80'> 	&#x20;&#xA0;&#160;&nbsp; ________________   	&#x20;&#xA0;&#160;&nbsp;</td>"
			    			."</tr>"
			    			."</table>"
	        			."</td>"
	        			."</tr>";

			    	$html .= "</table>
			    	</body>
			    	</head>
			    	</html>";
			        
			         $mpdf->WriteHTML($html);
			         $mpdf->Output('Purchase_return.pdf', 'I');
	    		}
	    	}
	    }
	}


}