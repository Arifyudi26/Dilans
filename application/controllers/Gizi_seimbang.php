<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gizi_seimbang extends CI_Controller {


	public $menuID 	= 17;
	public $name 	= 'Pem Gizi Seimbang';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_gizi_seimbang');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');

	}

	public function ajax(){
		$get = $this->M_gizi_seimbang->get_all();
		//echo $this->db->last_query();
		echo json_encode($get);
	}
	
	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();

		$this->load->view('m_bersalin/header');
		$this->load->view('m_bersalin/v_pem_gizi_seimbang',$data);
	}

	public function insert(){
		$mkn 	= $this->input->post('mkn');
		$tarif   	= $this->input->post('tarif');
		$ket   	= $this->input->post('ket');
		$code 		= $this->input->post('code');
		$status 	= $this->input->post('status');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_gizi 	= $this->M_gizi_seimbang->create_no_transaction();

			$data_insert = array(
							'ID_GIZI_SMBNG' 	=> $id_gizi,
							'PEMBERIAN_MAKANAN'		=> $mkn,
							'TARIF' 	=> $tarif,
							'KETERANGAN' 	=> $ket,
							'status' 		=> 0,
							'ID_USER' 		=> 1);

			$this->M_gizi_seimbang->save_data($data_insert);

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

			$data = array(
						   'PEMBERIAN_MAKANAN' 	=> $mkn,
							'TARIF' 	=> $tarif,
							'KETERANGAN' 		=> $ket,
							'status' 		=> 0,
							'ID_USER' 		=> 1);

			$this->M_gizi_seimbang->update_data($data,$code);

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

			$data = array(
						'status' 		=> 1,
						'ID_USER' 	=> 1);

			$this->M_gizi_seimbang->update_data($data,$code);

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
	
		public function print_data($start_date='',$end_date='',$id_gizi='',$gizi=''){
		$id_gizi		= str_replace('__', '/', $id_gizi);
		$start_date 		= str_replace('__', '-', $start_date);
		$end_date 			= str_replace('__', '-', $end_date);

		$gizi				= str_replace('__', ',', $gizi);
		$gizi				= str_replace('%20', ' ', $gizi);

		if($gizi == 'no'){
			$gizi = '';
		}
		if($id_gizi == 'no'){
			$id_gizi = '';
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

        $data_list 		= $this->M_gizi_seimbang->get_list_gizi($start_date,$end_date,$id_gizi,$gizi);

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
		    		."<td colspan='7' align='center'><h3>Laporan Pemberian Gizi Seimbang</h3>"
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
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Pem Gizi Smbng</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemberian Makanan</td>"
							."<td class='bdr-right bdr-top bdr-bottom' align='center'>Tarif</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='center'>Keterangan</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    				."<td>".$list[$i]['ID_GIZI_SMBNG']."</td>"
		    				."<td>".$list[$i]['PEMBERIAN_MAKANAN']."</td>"
		    				."<td class='bdr-center'>".$list[$i]['TARIF']."</td>"
		    				."<td class='bdr-right'>".$list[$i]['KETERANGAN']."</td>"
		    				."</tr>";
	    			$no++;
				 }

				$footer 	= "<tr>"
		    					."<td class='bdr-left bdr-bottom bdr-top' colspan='4' align='right'></td>"
		    					."<td align='right' class='bdr-right bdr-top bdr-bottom' colspan='2'></td>"
		    					."</tr>"
		    					."</table>";


				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('Data_Pgizi.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	  ."<td class='bdr-right bdr-top bdr-bottom'>Id Pem Gizi Smbng</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemberian Makanan</td>"
							."<td class='bdr-right bdr-top bdr-bottom' align='center'>Tarif</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='center'>Keterangan</td>"
				    		."</tr>";

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
						 $body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    				."<td>".$list[$i]['ID_GIZI_SMBNG']."</td>"
		    				."<td>".$list[$i]['PEMBERIAN_MAKANAN']."</td>"
		    				."<td class='bdr-center'>".$list[$i]['TARIF']."</td>"
		    				."<td class='bdr-right'>".$list[$i]['KETERANGAN']."</td>"
		    				."</tr>";
			    			$no++;
					 }
				 
				 	$footer 	= "<tr>"
		    					."<td class='bdr-left bdr-bottom bdr-top' colspan='3' align='right'></td>"
		    					."<td align='right' class='bdr-right bdr-top bdr-bottom' colspan='2'></td>"
		    					."</tr>"
		    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Data_Pgizi.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	    ."<td class='bdr-right bdr-top bdr-bottom'>Id Pem Gizi Smbng</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemberian Makanan</td>"
							."<td class='bdr-right bdr-top bdr-bottom' align='center'>Tarif</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='center'>Keterangan</td>"
				    		."</tr>";

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
		    				."<td class='bdr-left'>".$no."</td>"
		    			    ."<td>".$list[$i]['ID_GIZI_SMBNG']."</td>"
		    				."<td>".$list[$i]['PEMBERIAN_MAKANAN']."</td>"
		    				."<td class='bdr-center'>".$list[$i]['TARIF']."</td>"
		    				."<td class='bdr-right'>".$list[$i]['KETERANGAN']."</td>"
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
