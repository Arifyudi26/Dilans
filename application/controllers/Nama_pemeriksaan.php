<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nama_pemeriksaan extends CI_Controller {

	public $menuID 	= 13;
	public $name 	= 'Nama Pemeriksaan';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_namapemeriksaan');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
		
	}

	public function ajax(){
		$get_nama = $this->M_namapemeriksaan->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_nama);
	}
	
	public function get_list_unit(){
		$get_unit = $this->M_namapemeriksaan->m_get_list_unit();
		//echo $this->db->last_query();
		echo json_encode($get_unit);	
	}
	
	public function get_list_jenis(){
		$get_jenis = $this->M_namapemeriksaan->m_get_list_jenis();
		//echo $this->db->last_query();
		echo json_encode($get_jenis);	
	}

	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();

		$this->load->view('nama_pemeriksaan/header');
		$this->load->view('nama_pemeriksaan/v_namapemeriksaan',$data);
	}

	public function insert(){
		$nm_pemeriksaan 			= $this->input->post('nm_pemeriksaan');
		$ket   	= $this->input->post('ket');
		$id_unit   	= $this->input->post('id_unit');
		$id_jenis   	= $this->input->post('id_jenis');

		$code 		= $this->input->post('id_nama');
		$status 	= $this->input->post('status');
		$date 		= date('Y-m-d');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_nama 	= $this->M_namapemeriksaan->create_no_transaction();

			$data_insert = array(
							'ID_NAMA_PEMERIKSAAN' 	=> $id_nama,
							'ID_UNIT' 				=> $id_unit,
							'ID_JENIS' 				=> $id_jenis,
							'NAMA_PEMERIKSAAN' 		=> $nm_pemeriksaan,
							'KETERANGAN'   		    => $ket,
							'status' 				=> 0,
							'LAST_USER' 			=> 'Admin');

			$this->M_namapemeriksaan->save_data($data_insert);

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
						'NAMA_PEMERIKSAAN' 		=> $nm_pemeriksaan,
						'KETERANGAN' => $ket,
						'ID_UNIT' 	=> $id_unit,
						'ID_JENIS' 	=> $id_jenis,
						'LAST_USER' 		=> 'Admin');

			$this->M_namapemeriksaan->update_data($data_update,$code);

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
						'LAST_USER' 		=> 'Admin');

			$this->M_namapemeriksaan->update_data($data_delete,$code);

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

	function get_list_employee(){
		$list_employee = $this->m_unit->m_get_list_employee();
		echo json_encode($list_employee);
	}

}
