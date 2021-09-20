<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public $menuID 	= 14;
	public $name 	= 'Obat';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_obat');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
	    $this->load->helper('convert_date_helper');	
	}

	public function ajax(){
		$get_obat = $this->M_obat->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_obat);
	}
	
	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['obat'] = $this->M_obat->create_no_transaction();
				//echo $this->db->last_query();

		$this->load->view('obat/header');
		$this->load->view('obat/v_obat',$data);
	}

	public function insert(){
		$nm_obat 	= $this->input->post('nm_obat');
		$satuan   	= $this->input->post('satuan');
		$jenis   	= $this->input->post('jenis');
		$generik   	= $this->input->post('generik');
		$sub_jenis  = $this->input->post('sub_jenis');
		$masa   	= date('Y-m-d',strtotime($this->input->post('masa_berlaku')));
		$stok   	= $this->input->post('stok');
		$ket    	= $this->input->post('ket');

		$code 		= $this->input->post('code');
		$status 	= $this->input->post('status');
		$id_obat 	= $this->input->post('id_obat');
		
		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){

			$data_insert = array(
							'ID_OBAT' 		=> $id_obat,
							'NAMA_OBAT' 	=> $nm_obat,
							'SATUAN' 	    => $satuan,
							'JENIS_OBAT' 	=> $jenis,
							'GENERIC' 	    => $generik,
							'SUB_JENIS' 	=> $sub_jenis,
							'MASA_BERLAKU' 	=> $masa,
							'STOK' 	        => $stok,
							'KETERANGAN'    => $ket,
						    'LAST_USER' 	=> 'Admin');

			$this->M_obat->m_save_data($data_insert);

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
						    'NAMA_OBAT' 	=> $nm_obat,
							'SATUAN' 	    => $satuan,
							'JENIS_OBAT' 	=> $jenis,
							'GENERIC' 	    => $generik,
							'SUB_JENIS' 	=> $sub_jenis,
							'MASA_BERLAKU' 	=> $masa,
							'STOK' 	        => $stok,
							'KETERANGAN'    => $ket,
						    'LAST_USER' 	=> 'Admin');

			$this->M_obat->update_data($data_update,$code);

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
						'LAST_USER' 	=> 'Admin');

			$this->M_obat->update_data($data_delete,$code);

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
	
	
	public function print_data($start_date='',$end_date='',$id_obat='',$nama_obat=''){
		$id_obat 		= str_replace('__', '/', $id_obat);
		$start_date 		= str_replace('__', '-', $start_date);
		$end_date 			= str_replace('__', '-', $end_date);

		$nama_obat 				= str_replace('__', ',', $nama_obat);
		$nama_obat				= str_replace('%20', ' ', $nama_obat);
		// $TransStatus 		= str_replace('__', ',', $TransStatus);
		// $arrStatus 			= explode(',',$TransStatus);

		if($nama_obat == 'no'){
			$nama_obat = '';
		}
		if($id_obat == 'no'){
			$id_obat = '';
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
        $data_list 		= $this->M_obat->get_list_obat($start_date,$end_date,$id_obat,$nama_obat);
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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='100'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3> Puskesmas Ke.Sawah Besar</h2>
		        			<h4>Telp : (0267) - 6256101</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='7' align='center'><h3>Laporan Obat</h3>"
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
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Satuan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sub Jenis</td>"
							."<td class='bdr-right bdr-top bdr-bottom' align='center'>Masa Berlaku</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='center'>Stok</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    				."<td>".$list[$i]['ID_OBAT']."</td>"
		    				."<td>".$list[$i]['NAMA_OBAT']."</td>"
							."<td>".$list[$i]['SATUAN']."</td>"
							."<td>".$list[$i]['JENIS_OBAT']."</td>"
							."<td>".$list[$i]['SUB_JENIS']."</td>"
		    				."<td>".$list[$i]['MASA_BERLAKU']."</td>"
		    				."<td class='bdr-center'>".$list[$i]['STOK']."</td>"
		    				."</tr>";
				    				
	    			$no++;
	    					
				 }

				$footer 	= "<tr>"
		    					."<td class='bdr-left bdr-bottom bdr-top' colspan='7' align='right'></td>"
		    					."<td align='right' class='bdr-right bdr-top bdr-bottom' colspan='2'></td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('Data_obat.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	    ."<td class='bdr-right bdr-top bdr-bottom'>Id Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Satuan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sub Jenis</td>"
							."<td class='bdr-right bdr-top bdr-bottom' align='center'>Masa Berlaku</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='center'>Stok</td>"
				    		."</tr>";

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
						 $body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    				."<td>".$list[$i]['ID_OBAT']."</td>"
		    				."<td>".$list[$i]['NAMA_OBAT']."</td>"
							."<td>".$list[$i]['SATUAN']."</td>"
							."<td>".$list[$i]['JENIS_OBAT']."</td>"
							."<td>".$list[$i]['SUB_JENIS']."</td>"
		    				."<td>".$list[$i]['MASA_BERLAKU']."</td>"
		    				."<td class='bdr-center'>".$list[$i]['STOK']."</td>"
		    				."</tr>";
				    				
			    			$no++;		    			
					 }
				 
				 	$footer 	= "<tr>"
		    					."<td class='bdr-left bdr-bottom bdr-top' colspan='7' align='right'></td>"
		    					."<td align='right' class='bdr-right bdr-top bdr-bottom' colspan='2'></td>"
		    					."</tr>"
		    					."</table>";
								
					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Data_obat.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		 ."<td class='bdr-right bdr-top bdr-bottom'>Id Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Satuan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sub Jenis</td>"
							."<td class='bdr-right bdr-top bdr-bottom' align='center'>Masa Berlaku</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='center'>Stok</td>"
				    		."</tr>";

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    				."<td>".$list[$i]['ID_OBAT']."</td>"
		    				."<td>".$list[$i]['NAMA_OBAT']."</td>"
							."<td>".$list[$i]['SATUAN']."</td>"
							."<td>".$list[$i]['JENIS_OBAT']."</td>"
							."<td>".$list[$i]['SUB_JENIS']."</td>"
		    				."<td>".$list[$i]['MASA_BERLAKU']."</td>"
		    				."<td class='bdr-center'>".$list[$i]['STOK']."</td>"
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
