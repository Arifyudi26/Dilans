<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {

	public $menuID 	= 9;
	public $name 	= 'Data Pasien';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_pelayanan');
		$this->load->model('M_menu_kpelayanan');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
		$this->load->helper('number_helper');
		
	}
	
	public function pasien(){
		$get = $this->M_pelayanan->get_pasien();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_pasien(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_pasien',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function kunjungan(){
		$get = $this->M_pelayanan->get_kunjungan();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_kunjungan(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_kunjungan',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function pemeriksaan(){
		$get = $this->M_pelayanan->get_pemeriksaan();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_pemeriksaan(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_pemeriksaan',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function poli(){
		$get = $this->M_pelayanan->get_poli();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_poli(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_poli_umum',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function resep(){
		$get = $this->M_pelayanan->get_resep();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_resep(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_resep_obat',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function edit($id_tu_obat){
		$data['menu_link'] 	= $this->M_menu_kpelayanan->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_pelayanan->m_get_group($id_tu_obat);
		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/prev_resep_obat',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
    function get_detail_resep($id_tu_obat){
		$list_detail = $this->M_pelayanan->m_get_detail($id_tu_obat);
		
		echo json_encode($list_detail);
	}
	
	function get_list_dokter(){
		$list_dokter = $this->M_pelayanan->m_get_list_dokter();
		
		echo json_encode($list_dokter);
	}

   public function rujukan(){
		$get = $this->M_pelayanan->get_rujukan();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_rujukan(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_rujukan',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
   public function umb_rujukan(){
		$get = $this->M_pelayanan->get_umb();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_umb_rujukan(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_umb_rujukan',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
    public function daftar_rb(){
		$get = $this->M_pelayanan->get_daftar_rb();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_daftar_rb(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_daftar_rb',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function preview($id_daftar_rb){

		$data['menu_link'] 	= $this->M_menu_kpelayanan->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_pelayanan->m_get_group_rb($id_daftar_rb);
		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/prev_daftar_rb',$data);
		$this->load->view('kepala_pelayanan/footer');
	}

    function get_list_petugas(){
		$list_dokter = $this->M_pelayanan->m_get_list_petugas();
		echo json_encode($list_dokter);
	}
	
	function get_detail_rb($id_daftar_rb){
		$list_detail = $this->M_pelayanan->m_get_detail_rb($id_daftar_rb);
		echo json_encode($list_detail);
	}
	
	public function pulang_rb(){
		$get = $this->M_pelayanan->get_pulang_rb();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_pulang_rb(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_pulang_rb',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function preview_rb($id_pulang_rb){

		$data['menu_link'] 	= $this->M_menu_kpelayanan->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_pelayanan->m_get_group_prb($id_pulang_rb);
		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/prev_pulang_rb',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	function get_detail_prb($id_pulang_rb){
		$list_detail = $this->M_pelayanan->m_get_detail_prb($id_pulang_rb);
		echo json_encode($list_detail);
	}

   	public function farmasi(){
		$get = $this->M_pelayanan->get_farmasi();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_farmasi(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_farmasi',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function preview_ob($id_farmasi){

		$data['menu_link'] 	= $this->M_menu_kpelayanan->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_pelayanan->m_get_group_ob($id_farmasi);
		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/prev_ambil_obat',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	function get_detail_farmasi($id_farmasi){
	
		$list_detail = $this->M_pelayanan->m_get_detail_ob($id_farmasi);
		echo json_encode($list_detail);
	}

	public function daftar_lab(){
		$get = $this->M_pelayanan->get_daftar_lab();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_daftar_lab(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_daftar_lab',$data);
		$this->load->view('kepala_pelayanan/footer');
	}

    public function hasil_lab(){
		$get = $this->M_pelayanan->get_hasil_lab();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_hasil_lab(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_hasil_lab',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function preview_hlab($id_hasil_lab){

		$data['menu_link'] 	= $this->M_menu_kpelayanan->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_pelayanan->m_get_group_hlab($id_hasil_lab);
		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/prev_hasil_lab',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	function get_detail_lab($id_hasil_lab){
		$list_detail = $this->M_pelayanan->m_get_detail_hlab($id_hasil_lab);
		echo json_encode($list_detail);
	}
	
	 public function bayar_lab(){
		$get = $this->M_pelayanan->get_bayar_lab();
		//echo $this->db->last_query();
		echo json_encode($get);
	}

	public function get_bayar_lab(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/v_bayar_lab',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	public function preview_blab($id_bayar_lab){

		$data['menu_link'] 	= $this->M_menu_kpelayanan->get_menu($this->menuID);	
	    $data['date_now'] 	= date('Y-m-d');
		$data['group'] 		= $this->M_pelayanan->m_get_group_blab($id_bayar_lab);
		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/prev_bayar_lab',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	function get_detail_blab($id_bayar_lab){
		$list_detail = $this->M_pelayanan->m_get_detail_blab($id_bayar_lab);
		echo json_encode($list_detail);
	}
	
    public function get_laporan(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/laporan_pelayanan',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	 public function get_lap_rujukan(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/laporan_rujukan',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	 public function get_lap_farmasi(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/laporan_farmasi',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	 public function get_laporan_lab(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/laporan_lab',$data);
		$this->load->view('kepala_pelayanan/footer');
	}
	
	 public function get_laporan_rb(){
		$data['menu_link'] = $this->M_menu_kpelayanan->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('kepala_pelayanan/header1');
		$this->load->view('pelayanan/laporan_rb',$data);
		$this->load->view('kepala_pelayanan/footer');
	}


	public function print_pasien($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_pasien($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3> Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Data Pasien</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nik KTP</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Kelamin</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Faskes</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['kd_pasien']."</td>"
			    				."<td>".$list[$i]['NIK_KTP']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['JENIS_KELAMIN']."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_TELPON']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['FASKES']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
					$Total += $list[$i][''];
				 }
				  $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'>Keterangan </td>"
		    					."<td colspan='10' align='right' class='bdr-right bdr-top bdr-bottom'>Harus sukses</td>"
		    					."</tr>"
		    					."</table>";


				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan data pasien.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nik KTP</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Kelamin</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Faskes</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['kd_pasien']."</td>"
			    				."<td>".$list[$i]['NIK_KTP']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['JENIS_KELAMIN']."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_TELPON']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['FASKES']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['BIAYA'];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan Data Pasien.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nik KTP</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Kelamin</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Faskes</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			   	."<td>".$list[$i]['kd_pasien']."</td>"
			    				."<td>".$list[$i]['NIK_KTP']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['JENIS_KELAMIN']."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_TELPON']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['FASKES']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['BIAYA'];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}

	public function print_kunjungan($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_kunjungan($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Data Kunjungan</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Kunjungan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Poli</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Biaya</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_BEROBAT']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['unit']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN']."</td>"
			    				."<td class='bdr-right' align='right'>".formatRp_acc($list[$i]['BIAYA'])."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i]['BIAYA'];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
		    					."<td colspan='10' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Kunjungan.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Kunjungan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Poli</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Biaya</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_BEROBAT']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['unit']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN']."</td>"
			    				."<td class='bdr-right' align='right'>".formatRp_acc($list[$i]['BIAYA'])."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['BIAYA'];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan kunjungan.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Kunjungan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Poli</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Biaya</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			 	."<td>".$list[$i]['ID_BEROBAT']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['unit']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN']."</td>"
			    				."<td class='bdr-right' align='right'>".formatRp_acc($list[$i]['BIAYA'])."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['BIAYA'];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
	public function print_priksa($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_priksa($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Data Pemeriksaan</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Pemeriksaan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keluhan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tinggi Badan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Berat Badan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sistole</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Diastole</td>"
						   ."<td class='bdr-right bdr-top bdr-bottom'>Raspiratory Rate</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Heart Rate</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_PEMERIKSAAN']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['KELUHAN']."</td>"
								."<td>".$list[$i]['TINGGI_BADAN']."</td>"
								."<td>".$list[$i]['BERAT_BADAN']."</td>"
								."<td>".$list[$i]['SISTOLE']."</td>"
								."<td>".$list[$i]['DIASTOLE']."</td>"
								."<td>".$list[$i]['RASPIRATORY_RATE']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['HEART_RATE']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$user = $list[$i]['user'];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'>Petugas</td>"
		    					."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'>".$user."</td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Pemeriksaan.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Pemeriksaan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keluhan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tinggi Badan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Berat Badan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sistole</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Diastole</td>"
						   ."<td class='bdr-right bdr-top bdr-bottom'>Raspiratory Rate</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Heart Rate</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_PEMERIKSAAN']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['KELUHAN']."</td>"
								."<td>".$list[$i]['TINGGI_BADAN']."</td>"
								."<td>".$list[$i]['BERAT_BADAN']."</td>"
								."<td>".$list[$i]['SISTOLE']."</td>"
								."<td>".$list[$i]['DIASTOLE']."</td>"
								."<td>".$list[$i]['RASPIRATORY_RATE']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['HEART_RATE']."</td>"

			    				."</tr>";
			    				
		    			$no++;
		    				$user = $list[$i]['user'];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Petugas</td>"
		    				     	."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'>".$user."</td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan Pemeriksaan.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Pemeriksaan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keluhan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tinggi Badan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Berat Badan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sistole</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Diastole</td>"
						   ."<td class='bdr-right bdr-top bdr-bottom'>Raspiratory Rate</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Heart Rate</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			    ."<td>".$list[$i]['ID_PEMERIKSAAN']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['KELUHAN']."</td>"
								."<td>".$list[$i]['TINGGI_BADAN']."</td>"
								."<td>".$list[$i]['BERAT_BADAN']."</td>"
								."<td>".$list[$i]['SISTOLE']."</td>"
								."<td>".$list[$i]['DIASTOLE']."</td>"
								."<td>".$list[$i]['RASPIRATORY_RATE']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['HEART_RATE']."</td>"

			    				."</tr>";
			    				
		    			$no++;
		    				$user = $list[$i]['user'];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
	public function print_poli($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_poli($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Data Poli Umum</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Poli Umum</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keluhan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pd</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Diagnosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_POLI_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
								."<td>".$list[$i]['KELUHAN']."</td>"
								."<td>".$list[$i]['PD']."</td>"
								."<td>".$list[$i]['DESKRIPSI_ICD']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i][''];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
		    					."<td colspan='10' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Poli umum.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Poli Umum</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keluhan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pd</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Diagnosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_POLI_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
								."<td>".$list[$i]['KELUHAN']."</td>"
								."<td>".$list[$i]['PD']."</td>"
								."<td>".$list[$i]['DESKRIPSI_ICD']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan poli umum.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Poli Umum</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keluhan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pd</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Diagnosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			 	."<td>".$list[$i]['ID_POLI_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
								."<td>".$list[$i]['KELUHAN']."</td>"
								."<td>".$list[$i]['PD']."</td>"
								."<td>".$list[$i]['DESKRIPSI_ICD']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
	public function print_resep($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_resep($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Resep Obat</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Resep Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Dignosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jumlah Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Id Poli Umum</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_TU_OBAT']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['DIAGNOSA']."</td>"
								."<td>".formatRp_acc($list[$i]['JUMLAH_OBAT'])."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['ID_POLI_UMUM']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i]['JUMLAH_OBAT'];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
		    					."<td colspan='10' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan resep obat.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Resep Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Dignosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jumlah Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Id Poli Umum</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"

				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_TU_OBAT']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['DIAGNOSA']."</td>"
								."<td>".formatRp_acc($list[$i]['JUMLAH_OBAT'])."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['ID_POLI_UMUM']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['JUMLAH_OBAT'];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan resep obat.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Resep Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Dignosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jumlah Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Id Poli Umum</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"

				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			 	."<td>".$list[$i]['ID_TU_OBAT']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['DIAGNOSA']."</td>"
								."<td>".formatRp_acc($list[$i]['JUMLAH_OBAT'])."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['ID_POLI_UMUM']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['JUMLAH_OBAT'];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
public function print_farmasi($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_farmasi($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Pengambilan Obat</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Farmasi</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Dignosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jumlah Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Tujuan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_FARMASI']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['DIAGNOSA']."</td>"
								."<td>".formatRp_acc($list[$i]['JUMLAH_OBAT'])."</td>"
								."<td>".$list[$i]['unit']."</td>"
								."<td>".$list[$i]['petugas']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i]['JUMLAH_OBAT'];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
		    					."<td colspan='10' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Farmasi.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Farmasi</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Dignosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jumlah Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Tujuan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"

				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_FARMASI']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['DIAGNOSA']."</td>"
								."<td>".formatRp_acc($list[$i]['JUMLAH_OBAT'])."</td>"
								."<td>".$list[$i]['unit']."</td>"
								."<td>".$list[$i]['petugas']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['JUMLAH_OBAT'];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan farmasi.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Farmasi</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Dignosa</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jumlah Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Tujuan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"

				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			 	."<td>".$list[$i]['ID_FARMASI']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['DIAGNOSA']."</td>"
								."<td>".formatRp_acc($list[$i]['JUMLAH_OBAT'])."</td>"
								."<td>".$list[$i]['unit']."</td>"
								."<td>".$list[$i]['petugas']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['JUMLAH_OBAT'];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}

public function print_obat($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_obat($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Data Obat</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Satuan Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sub Jenis</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Masa Berlaku</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Stok</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keterangan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_OBAT']."</td>"
			    				."<td>".$list[$i]['NAMA_OBAT']."</td>"
			    				."<td>".substr($list[$i]['SATUAN'],0,30)."</td>"
								."<td>".$list[$i]['JENIS_OBAT']."</td>"
								."<td>".$list[$i]['SUB_JENIS']."</td>"
								."<td>".$list[$i]['MASA_BERLAKU']."</td>"
								."<td>".formatRp_acc($list[$i]['STOK'])."</td>"
								."<td>".$list[$i]['KETERANGAN']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['LAST_USER']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i][''];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
		    					."<td colspan='10' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan data obat.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	."<td class='bdr-right bdr-top bdr-bottom'>Id Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Satuan Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sub Jenis</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Masa Berlaku</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Stok</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keterangan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"

				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_OBAT']."</td>"
			    				."<td>".$list[$i]['NAMA_OBAT']."</td>"
			    				."<td>".substr($list[$i]['SATUAN'],0,30)."</td>"
								."<td>".$list[$i]['JENIS_OBAT']."</td>"
								."<td>".$list[$i]['SUB_JENIS']."</td>"
								."<td>".$list[$i]['MASA_BERLAKU']."</td>"
								."<td>".formatRp_acc($list[$i]['STOK'])."</td>"
								."<td>".$list[$i]['KETERANGAN']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['LAST_USER']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan data obat.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Obat</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Satuan Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Jenis Obat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Sub Jenis</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Masa Berlaku</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Stok</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Keterangan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Last User</td>"

				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			 	."<td>".$list[$i]['ID_OBAT']."</td>"
			    				."<td>".$list[$i]['NAMA_OBAT']."</td>"
			    				."<td>".substr($list[$i]['SATUAN'],0,30)."</td>"
								."<td>".$list[$i]['JENIS_OBAT']."</td>"
								."<td>".$list[$i]['SUB_JENIS']."</td>"
								."<td>".$list[$i]['MASA_BERLAKU']."</td>"
								."<td>".formatRp_acc($list[$i]['STOK'])."</td>"
								."<td>".$list[$i]['KETERANGAN']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['LAST_USER']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}

	
public function print_rujukan($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_rujukan($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Data Rujukan Internal</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Rujukan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Kepada Yth</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Rujukan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Icd Sementara</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Terapi</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_RUJUKAN_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['POLI_PENGIRIM']."</td>"
								."<td>".$list[$i]['PETUGAS_PENGIRIM']."</td>"
								."<td>".$list[$i]['KEPADA_YTH']."</td>"
								."<td>".$list[$i]['POLI_RUJUKAN']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN']."</td>"
								."<td>".$list[$i]['ICD_SEMENTARA']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['TERAPI']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i][''];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
		    					."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Rujukan Internal.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Rujukan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Kepada Yth</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Rujukan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Icd Sementara</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Terapi</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_RUJUKAN_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['POLI_PENGIRIM']."</td>"
								."<td>".$list[$i]['PETUGAS_PENGIRIM']."</td>"
								."<td>".$list[$i]['KEPADA_YTH']."</td>"
								."<td>".$list[$i]['POLI_RUJUKAN']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN']."</td>"
								."<td>".$list[$i]['ICD_SEMENTARA']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['TERAPI']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan rujukan Internal.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Rujukan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Kepada Yth</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Rujukan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Icd Sementara</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>Terapi</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_RUJUKAN_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['POLI_PENGIRIM']."</td>"
								."<td>".$list[$i]['PETUGAS_PENGIRIM']."</td>"
								."<td>".$list[$i]['KEPADA_YTH']."</td>"
								."<td>".$list[$i]['POLI_RUJUKAN']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN']."</td>"
								."<td>".$list[$i]['ICD_SEMENTARA']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['TERAPI']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}

  public function print_umb($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_umb($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Data Umpan Balik Rujukan</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Umb Rujukan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Kepada Yth</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Umb</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Hasil Pemeriksaan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tindakan / Terapi</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_UMB_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['POLI_PENGIRIM']."</td>"
								."<td>".$list[$i]['PETUGAS_PENGIRIM']."</td>"
								."<td>".$list[$i]['KEPADA_YTH']."</td>"
								."<td>".$list[$i]['POLI_UMB']."</td>"
								."<td>".$list[$i]['HASIL_PEMERIKSAAN']."</td>"
								."<td>".$list[$i]['TINDAKAN_TERAPI']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i][''];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
		    					."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Umb Rujukan.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	."<td class='bdr-right bdr-top bdr-bottom'>Id Umb Rujukan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Kepada Yth</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Umb</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Hasil Pemeriksaan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tindakan / Terapi</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_UMB_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['POLI_PENGIRIM']."</td>"
								."<td>".$list[$i]['PETUGAS_PENGIRIM']."</td>"
								."<td>".$list[$i]['KEPADA_YTH']."</td>"
								."<td>".$list[$i]['POLI_UMB']."</td>"
								."<td>".$list[$i]['HASIL_PEMERIKSAAN']."</td>"
								."<td>".$list[$i]['TINDAKAN_TERAPI']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan rujukan Internal.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Umb Rujukan</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Petugas Pengirim</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Kepada Yth</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Poli Umb</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Hasil Pemeriksaan</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tindakan / Terapi</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_UMB_UMUM']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['POLI_PENGIRIM']."</td>"
								."<td>".$list[$i]['PETUGAS_PENGIRIM']."</td>"
								."<td>".$list[$i]['KEPADA_YTH']."</td>"
								."<td>".$list[$i]['POLI_UMB']."</td>"
								."<td>".$list[$i]['HASIL_PEMERIKSAAN']."</td>"
								."<td>".$list[$i]['TINDAKAN_TERAPI']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
	
	  public function print_daftar_lab($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_dlab($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Pendaftaran Laboratorium</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan Lab</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_DAFTAR_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN_LAB']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i][''];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
		    					."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Pendaftaran Lab.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	   	."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan Lab</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_DAFTAR_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN_LAB']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan pendaftaran Lab.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    			."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan Lab</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_DAFTAR_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN_LAB']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
   	 public function print_hasil_lab($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_hlab($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Hasil Laboratorium</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Hasil Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Hasil</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan Lab</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_HASIL_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_HASIL']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN_LAB']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['ID_DAFTAR_LAB']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i][''];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
		    					."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Hasil Lab.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	   ."<td class='bdr-right bdr-top bdr-bottom'>Id Hasil Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Hasil</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan Lab</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_HASIL_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_HASIL']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN_LAB']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['ID_DAFTAR_LAB']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan Hasil Laboratorium.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Hasil Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Hasil</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Pemeriksaan Lab</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			."<td>".$list[$i]['ID_HASIL_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_HASIL']."</td>"
								."<td>".$list[$i]['PEMERIKSAAN_LAB']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".$list[$i]['ID_DAFTAR_LAB']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
   	 public function print_bayar_lab($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_blab($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Pembayaran Laboratorium</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Bayar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Bayar</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Total Biaya</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_PEMBAYARAN_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_BAYAR']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".formatRp_acc($list[$i]['TOTAL_BIAYA'])."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i]['TOTAL_BIAYA'];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
		    					."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'>Rp.".formatRp_acc($Total)."</td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Bayar Lab.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	  ."<td class='bdr-right bdr-top bdr-bottom'>Id Bayar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Bayar</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Total Biaya</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			    ."<td>".$list[$i]['ID_PEMBAYARAN_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_BAYAR']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".formatRp_acc($list[$i]['TOTAL_BIAYA'])."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['TOTAL_BIAYA'];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan Bayar Laboratorium.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	    ."<td class='bdr-right bdr-top bdr-bottom'>Id Bayar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Bayar</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Total Biaya</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			   ."<td>".$list[$i]['ID_PEMBAYARAN_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_BAYAR']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".formatRp_acc($list[$i]['TOTAL_BIAYA'])."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['TOTAL_BIAYA'];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
    public function print_daftar_rb($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_daftar_rb($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Pendaftaran Ruang bersalin</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Rb</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Suami</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Petugas</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_DAFTAR_RB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['NAMA_SUAMI']."</td>"
								."<td>".$list[$i]['NO_TELPON']."</td>"
								."<td>".$list[$i]['petugas']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i][''];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
		    					."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Pendaftaran Rb.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	    ."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Rb</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Suami</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Petugas</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_DAFTAR_RB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['NAMA_SUAMI']."</td>"
								."<td>".$list[$i]['NO_TELPON']."</td>"
								."<td>".$list[$i]['petugas']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'></td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'></td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan pendaftaran rb.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Daftar Rb</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Alamat</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Suami</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Telpon</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Petugas</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Masuk</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_DAFTAR_RB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['ALAMAT']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['NAMA_SUAMI']."</td>"
								."<td>".$list[$i]['NO_TELPON']."</td>"
								."<td>".$list[$i]['petugas']."</td>"
								."<td>".$list[$i]['TGL_MASUK']."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i][''];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
    public function print_pulang_rb($start_date,$end_date){
		$start_date 	= str_replace('__', '-', $start_date);
		$end_date 		= str_replace('__', '-', $end_date);
		$start_date 	= $start_date.' 00:00:00';
		$end_date 		= $end_date.' 23:59:59';

		include(APPPATH . 'libraries/mpdf/mpdf.php');
        $mpdf = new mPDF('utf-8', A4, 10, '', 5,5,5,5,'','','P');
        $mpdf->SetFooter('{PAGENO}');

        $data_list 		= $this->M_pelayanan->get_list_pulang_rb($start_date,$end_date);

        $list 			= $data_list['list'];

        $total_baris 	= $data_list['total_list'];
        
        $max_baris 		= 35;

        $total_page 	= ceil($total_baris / $max_baris);
        $sisa_page 		= $total_baris % $max_baris;
        $no 			= 1;
		$Total 			= 0;

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
	        				<img src='".base_url('assets/Logo2.PNG')."' width='150' height='90'>
	        			</td>
	        			<td valign='top' width='40%' align='right'>
		        			<P>Jakarta, ".date('d')." ".change_month_indonesia(date('m'))." ".date('Y')."</p>
		        		</td>
	        		</tr>
		        	<tr>
		        		<td valign='top' width='60%' align='left' colspan='2'>
		        			<h3>Puskesmas Kec.Sawah Besar</h2>
		        			<h4>Telp : 085775165112</h3>
		        		</td>
		        		
		        	<tr>
		        </table>";

		    $html .= "<table width='100%' cellpadding='5' cellspacing='0'>"
		    		."<tr>"
		    		."<td colspan='10' align='center'><h3>Laporan Pulang Ruang Bersalin</h3>"
		    		."</td>"
		    		."</tr>"
		    		."<tr>"
		    		."<td colspan='10' align='center'> From ".convert_to_d_M_y($start_date).' To '.convert_to_d_M_y($end_date)
		    		."</td>"
		    		."</tr>"
		    		."<tr><td colspan='5' height='15'></td></tr>";
					

		    if($total_baris < $max_baris){
		    	$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Id Pulang Rb</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Pulang</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Petugas</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Total Biaya</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;

				 for($i=$min_to_baris;$i<$max_to_baris;$i++){
				 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    				."<td>".$list[$i]['ID_PULANG_RB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_PULANG']."</td>"
								."<td>".$list[$i]['petugas']."</td>"
								."<td>".formatRp_acc($list[$i]['TOTAL_BIAYA'])."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
	    			$no++;
	    			$Total += $list[$i]['TOTAL_BIAYA'];
				 }

				 $footer 	= "<tr>"
		    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
		    					."<td colspan='12' align='right' class='bdr-right bdr-top bdr-bottom'>Rp.".formatRp_acc($Total)."</td>"
		    					."</tr>"
		    					."</table>";

				$mpdf->WriteHTML($html.$body.$footer);
	    		$mpdf->Output('laporan Pulang Rb.pdf', 'I');

		    }else{

		    	if(($x+1) == $total_page){

		    		 $max_to_baris	= $sisa_page == 0 ? (($x + 1) * $max_baris) : (($x) * $max_baris) + $sisa_page;
					 $min_to_baris 	= $sisa_page == 0 ? $max_to_baris - $max_baris : $x * $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	  ."<td class='bdr-right bdr-top bdr-bottom'>Id Bayar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Bayar</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Total Biaya</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			    ."<td>".$list[$i]['ID_PEMBAYARAN_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_BAYAR']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".formatRp_acc($list[$i]['TOTAL_BIAYA'])."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['TOTAL_BIAYA'];
					 }

					 $footer 	= "<tr>"
			    					."<td class='bdr-left bdr-top bdr-bottom'>Total</td>"
			    					."<td colspan='4' align='right' class='bdr-right bdr-top bdr-bottom'>".formatRp_acc($Total)."</td>"
			    					."</tr>"
			    					."</table>";

					$mpdf->WriteHTML($html.$body.$footer);
					$mpdf->Output('Laporan Bayar Laboratorium.pdf', 'I');

		    	}else{

		    		$max_to_baris	= (($x + 1) * $max_baris);
					$min_to_baris 	= $max_to_baris - $max_baris;

					$body 	= "<tr>"
				    		."<td class='bdr-left bdr-right bdr-top bdr-bottom' align='center'>No</td>"
				    	    ."<td class='bdr-right bdr-top bdr-bottom'>Id Bayar Lab</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Kode Pasien</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom'>Nama Pasien</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Umur</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>No Bpjs</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Tgl Bayar</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Nama Dokter</td>"
							."<td class='bdr-right bdr-top bdr-bottom'>Total Biaya</td>"
				    		."<td class='bdr-right bdr-top bdr-bottom' align='right'>last User</td>"
				    		."</tr>";
				 $max_to_baris	= $total_baris;
				 $min_to_baris 	= 0;
				

					 for($i=$min_to_baris;$i<$max_to_baris;$i++){
					 	$body 	.= "<tr>"
			    				."<td class='bdr-left'>".$no."</td>"
			    			   ."<td>".$list[$i]['ID_PEMBAYARAN_LAB']."</td>"
			    				."<td>".$list[$i]['KODE_PASIEN']."</td>"
			    				."<td>".substr($list[$i]['NAMA_LENGKAP'],0,30)."</td>"
								."<td>".$list[$i]['UMUR']."</td>"
								."<td>".$list[$i]['NO_BPJS']."</td>"
								."<td>".$list[$i]['TGL_BAYAR']."</td>"
								."<td>".$list[$i]['dokter']."</td>"
								."<td>".formatRp_acc($list[$i]['TOTAL_BIAYA'])."</td>"
			    				."<td class='bdr-right' align='right'>".$list[$i]['user']."</td>"
			    				."</tr>";
			    				
		    			$no++;
		    			$Total += $list[$i]['TOTAL_BIAYA'];
					 }

					$body 	.= "<tr><td colspan='5' align='right' height='10' class='bdr-right bdr-left bdr-bottom'></td></tr>"
		    					."</table>";
		    		$mpdf->WriteHTML($html.$body);

					$mpdf->AddPage();
		    	}

		    }
	        
	    }
	}
	
   
	
}