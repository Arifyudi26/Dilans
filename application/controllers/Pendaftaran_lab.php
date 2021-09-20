<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_lab extends CI_Controller {

	/*
	Author 		: Sisepus 
	Date 		: 11-05-2018
	*/

	public $menuID 	= 11;
	public $name 	= 'Pendaftaran Lab';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_daftar_lab');
		$this->load->model('M_menu_lab');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
		
	}

	public function ajax(){
		$get_pemeriksaan = $this->M_daftar_lab->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_pemeriksaan);
	}

	public function index(){

		$data['menu_link'] 	= $this->M_menu_lab->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		$data['daftar'] = $this->M_daftar_lab->create_no_transaction();

		$this->load->view('lab/header1');
		$this->load->view('lab/data_daftar_lab',$data);
	}

	function get_list_dokter(){
		$list_dokter = $this->M_daftar_lab->m_get_list_dokter();
		echo json_encode($list_dokter);
	}
	
	function get_list_lab(){
		$id_dt_lab 		= ($this->input->post('id_dt_lab')) ? $this->input->post('id_dt_lab'):'';
		$pemeriksaan 	= ($this->input->post('pemeriksaan')) ? $this->input->post('pemeriksaan'):'';

		$list_lab		= $this->M_daftar_lab->m_get_lab($id_dt_lab,$pemeriksaan);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_lab);
	}
	
	function get_list_pasien(){
		$kd_pasien 		= ($this->input->post('kd_pasien')) ? $this->input->post('kd_pasien'):'';
		$nama 	= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_pasien		= $this->M_daftar_lab->m_get_list_pasien($kd_pasien,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_pasien);
	}
	
	public function insert(){
		$kd_pasien 	= $this->input->post('kd_pasien');
		$nama   	= $this->input->post('nm_lengkap');
		$umur   	= $this->input->post('umur');
		$alamat		   	= $this->input->post('alamat');
		$bpjs			= $this->input->post('bpjs');
		$tgl		   	= date('Y-m-d',strtotime($this->input->post('tgl')));
		$id_dt_lab    	= $this->input->post('id_dt_lab');
		$pemeriksaan    	= $this->input->post('pemeriksaan');
		$id_dokter    	= $this->input->post('id_dokter');
		$id_berobat    	= $this->input->post('id_berobat');

		$code 		= $this->input->post('code');
		$id_daftar	= $this->input->post('id_daftar');
		$status 	= $this->input->post('status');
		
		/*================== transaction begin ======================*/
		$this->db->trans_begin();
		if($status == 1){			
			$data = array(
							'ID_DAFTAR_LAB' 	=> $id_daftar,
							'KODE_PASIEN' 		=> $kd_pasien,
							'NAMA_LENGKAP' 	    => $nama,
							'UMUR' 				=> $umur,
							'ALAMAT' 		    => $alamat,
							'NO_BPJS' 			=> $bpjs,
							'TGL_MASUK' 		=> $tgl,
							'ID_DT_LAB' 	    => $id_dt_lab,
							'PEMERIKSAAN_LAB'	=> $pemeriksaan,
							'ID_DOKTER'   		=> $id_dokter,
							'ID_BEROBAT'		=> $id_berobat,
							'status'			=> 0,
						    'ID_USER' 			=> 17);

			$this->M_daftar_lab->m_insert_data($data);
			
			$data_priksa = array('trans_status'=>2);
			$this->M_daftar_lab->m_false_data($data_priksa,$id_berobat);

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
						   'KODE_PASIEN' 		=> $kd_pasien,
							'NAMA_LENGKAP' 	    => $nama,
							'UMUR' 				=> $umur,
							'ALAMAT' 		    => $alamat,
							'NO_BPJS' 			=> $bpjs,
							'TGL_MASUK' 		=> $tgl,
							'ID_DT_LAB' 	    => $id_dt_lab,
							'PEMERIKSAAN_LAB'	=> $pemeriksaan,
							'ID_DOKTER'   		=> $id_dokter,
							'ID_BEROBAT'		=> $id_berobat,
							'status'			=> 0,
						    'ID_USER' 			=> 17);

			$this->M_daftar_lab->m_update_group($data_update,$code);

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
						'ID_USER' 	=> 17);

			$this->M_daftar_lab->m_update_group($data_delete,$code);

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
	
}