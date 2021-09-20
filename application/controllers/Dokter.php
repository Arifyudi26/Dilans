<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public $menuID 	= 10;
	public $name 	= 'Dokter';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_dokter');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');	
	}

	public function ajax(){
		$get_barang = $this->M_dokter->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_barang);
	}

	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();

		$this->load->view('dokter/header');
		$this->load->view('dokter/V_dokter',$data);
	}

	public function insert(){
		$nama 		= $this->input->post('nama_dokter');
		$jenis   	= $this->input->post('jenis');
		$alamat   	= $this->input->post('alamat');
		$telpon  	= $this->input->post('telpon');
		$title   	= $this->input->post('title');
		$spesial   	= $this->input->post('spesial');
		$code 		= $this->input->post('code');
		$status 	= $this->input->post('status');
		$date 		= date('Y-m-d');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_dokter 	= $this->M_dokter->create_no_transaction();

			$data_insert = array(
							'ID_DOKTER' 		=> $id_dokter,
							'NAMA_DOKTER' 		=> $nama,
							'JENIS_KELAMIN' 	=> $jenis,
							'ALAMAT' 		=> $alamat,
							'NO_TELPON' 		=> $telpon,
							'TITLE' 	=> $title,
							'SPESIALIST'        => $spesial,
							'status' 			=> 0,
							'ID_USER' 			=> 1,
							'CREATE_DATE' 		=> $date);

			$this->M_dokter->save_data($data_insert);

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

		}else if($status == 2){

			$data_update = array(
						    'NAMA_DOKTER' 		=> $nama,
							'JENIS_KELAMIN' 	=> $jenis,
							'ALAMAT' 		    => $alamat,
							'NO_TELPON' 		=> $telpon,
							'TITLE' 	        => $title,
							'SPESIALIST'        => $spesial,
							'status' 			=> 0,
							'ID_USER' 			=> 1);

			$this->M_dokter->update_data($data_update,$code);

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

		}else{

			$data_delete = array(
						'status' 		=> 1,
						'ID_USER' 		=> 1);

			$this->M_dokter->update_data($data_delete,$code);

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

		}

		echo json_encode($result);
	}

	public function print_data($start_date='',$end_date='',$id_dokter='',$nm_dokter=''){
		$id_dokter 		= str_replace('__', '/', $id_dokter);
		$start_date 		= str_replace('__', '-', $start_date);
		$end_date 			= str_replace('__', '-', $end_date);
		//$DepNumber 		= str_replace('__', ',', $DepNumber);
		$nm_dokter 				= str_replace('__', ',', $nm_dokter);
		$nm_dokter 				= str_replace('%20', ' ', $nm_dokter);
		// $TransStatus 		= str_replace('__', ',', $TransStatus);
		// $arrStatus 			= explode(',',$TransStatus);

		if($nm_dokter == 'no'){
			$nm_dokter = '';
		}
		if($id_dokter == 'no'){
			$id_dokter = '';
		}

		if($start_date == 'no'){
			$start_date = '';
		}
		if($end_date == 'no'){
			$end_date = '';
		}


		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        //$warehouse_data = $this->m_purchase_report->get_data_warehouse($warehouse);
        $data_list 		= $this->M_dokter->get_list_dokter($start_date,$end_date,$id_dokter,$nm_dokter);
        // echo $this->db->last_query();
        // die();

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 30;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		
        for($x=0;$x<$total_page;$x++){
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
	        	</style>
	        	</head>
	        	<body>
	        	<table width='100%'>
	        		<tr>
	        			<td valign='top' align='left'>
	        				<img src='".base_url('assets/logo2.jpg')."' width='150' height='50'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>JAKARTA, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3> Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : (0267) - 8485318</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='6' align='center'><h3>Laporan Dokter</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>";
		    		if($start_date !='' && $end_date!=''){
		    			$html .="<td colspan='6' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date);
		    		}else{
		    			//$html .="<td colspan='6' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date);
		    		}

		    		$html .= "</td>"
		    		."</tr>"
		    		."<tr><td colspan='6' height='15'></td></tr>";

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Jenis Kelamin</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Spesialist</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    				."<td>".$list[$i]['ID_DOKTER']."</td>"
		    				."<td>".$list[$i]['NAMA_DOKTER']."</td>"
		    				."<td>".substr($list[$i]['JENIS_KELAMIN'],0,30)."</td>"
		    				."<td>".$list[$i]['ALAMAT']."</td>"
		    				."<td>".$list[$i]['NO_TELPON']."</td>"
		    				."<td class='bdr-right'>".$list[$i]['SPESIALIST']."</td>"
		    				."</tr>";
				    				
	    			$no++;
	    			
	    			
				 }

				$footer 	= "<tr>"
		    					."<td class='bdr-left bdr-bottom bdr-top' colspan='5' align='right'></td>"
		    					."<td align='right' class='bdr-right bdr-top bdr-bottom' colspan='2'></td>"
		    					."</tr>"
		    					."</table>";


				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('DOKTER.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Jenis Kelamin</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Spesialist</td>"
				    		."</tr>";

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
						 $body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    			    ."<td>".$list[$i]['ID_DOKTER']."</td>"
		    				."<td>".$list[$i]['NAMA_DOKTER']."</td>"
		    				."<td>".substr($list[$i]['JENIS_KELAMIN'],0,30)."</td>"
		    				."<td>".$list[$i]['ALAMAT']."</td>"
		    				."<td>".$list[$i]['NO_TELPON']."</td>"
		    				."<td class='bdr-right'>".$list[$i]['SPESIALIST']."</td>"
		    				."</tr>";
				    				
			    			$no++;
			    			
					 }
				 
				 	$footer 	= "<tr>"
		    					."<td class='bdr-left bdr-bottom bdr-top' colspan='5' align='right'></td>"
		    					."<td align='right' class='bdr-right bdr-top bdr-bottom' colspan='2'></td>"
		    					."</tr>"
		    					."</table>";


					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('DOKTER.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    			."<td class='bdr-right bdr-top bdr-bottom'>Id Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Jenis Kelamin</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Spesialist</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    				 ."<td>".$list[$i]['ID_DOKTER']."</td>"
		    				."<td>".$list[$i]['NAMA_DOKTER']."</td>"
		    				."<td>".substr($list[$i]['JENIS_KELAMIN'],0,30)."</td>"
		    				."<td>".$list[$i]['ALAMAT']."</td>"
		    				."<td>".$list[$i]['NO_TELPON']."</td>"
		    				."<td class='bdr-right'>".$list[$i]['SPESIALIST']."</td>"
		    				."</tr>";
				    				
		    			$no++;
		    			
					 }

					$body 	.= "<tr><td colspan='7' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}

}
