<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public $menuID 	= 38;
	public $name 	= 'Employee';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_employee');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
		
	}

	public function ajax(){
		$get_em = $this->M_employee->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_em);
	}
	
	public function get_list_job(){
		$get_job = $this->M_employee->m_get_list_job();
		//echo $this->db->last_query();
		echo json_encode($get_job);	
	}

	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();
		$this->load->view('employe/header');
		$this->load->view('employe/v_employe',$data);
	}

	public function insert(){
		$nama 	= $this->input->post('nama');
		$alamat   	= $this->input->post('alamat');
		$id_job   	= $this->input->post('id_job');
		$id_user    	= $this->input->post('id_user');
		$code 		= $this->input->post('code');
		$status 	= $this->input->post('status');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_emp	= $this->M_employee->create_no_transaction();

			$data = array(
							'ID_EMPLOYEE' 		=> $id_emp,
							'NAMA_LENGKAP' 	=> $nama,
							'ALAMAT' 	=> $alamat,
							'ID_JOB' 		=> $id_job,
							'status' 		=> 0,
							'ID_USER' 		=> 1);

			$this->M_employee->save_data($data);

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
						  'NAMA_LENGKAP' 	=> $nama,
							'ALAMAT' 	=> $alamat,
							'ID_JOB' 		=> $id_job,
							'status' 		=> 0,
							'ID_USER' 		=> 1);

			$this->M_employee->update_data($data,$code);

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

			$this->M_employee->update_data($data,$code);

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
