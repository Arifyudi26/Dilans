<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joblevel extends CI_Controller {

	public $menuID 	= 39;
	public $name 	= 'JobLevel';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_joblevel');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');	
	}

	public function ajax(){
		$get_job = $this->M_joblevel->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_job);
	}

	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();
		$this->load->view('joblevel/header');
		$this->load->view('joblevel/v_joblevel',$data);
	}

	public function insert(){
		$jname 	= $this->input->post('job_name');
		$level   	= $this->input->post('level');
		$job   	= $this->input->post('job_desc');
		$id_user    	= $this->input->post('id_user');
		$code 		= $this->input->post('code');
		$status 	= $this->input->post('status');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_job 	= $this->M_joblevel->create_no_transaction();

			$data_insert = array(
							'ID_JOB' 		=> $id_job,
							'JOB_NAME' 	=> $jname,
							'LEVEL' 	=> $level,
							'JOB_DESC' 		=> $job,
							'status' 		=> 0,
							'ID_USER' 		=> 1);

			$this->M_joblevel->save_data($data_insert);

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
						   'JOB_NAME' 	=> $jname,
							'LEVEL' 	=> $level,
							'JOB_DESC' 		=> $job,
							'status' 		=> 0,
							'ID_USER' 		=> 1);

			$this->M_joblevel->update_data($data,$code);

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

}
