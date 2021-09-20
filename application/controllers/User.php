<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public $menuID 	= 9;
	public $name 	= 'User';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
		
	}

	public function ajax(){
		$get_barang = $this->M_user->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_barang);
	}

	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();

		$this->load->view('user/header');
		$this->load->view('user/v_user',$data);
	}

	public function insert(){
	    $id_emp		= $this->input->post('id_employe');
		$username		= $this->input->post('username');
		$pass  	= $this->input->post('pass');
		$id_job		= $this->input->post('id_job');
		$level   	= $this->input->post('level');
		$code   	= $this->input->post('code');
		$status   	= $this->input->post('status');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_user 	= $this->M_user->create_no_transaction();

			$data = array(
							'id_user' 		=> $id_user,
							'id_employee'	=> $id_emp,
							'username' 		=> $username,
							'password'  	=> $pass,
							'terakhir_login' => 0,
							'id_job'		=> $id_job,
							'level' 	=> $level,
							'status'	=> 0,
							'LAST_USER'	=>'Admin');

			$this->M_user->save_data($data);

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
							'id_employee'	=> $id_emp,
							'username' 		=> $username,
							'password'  	=> $pass,
							'terakhir_login' => 0,
							'id_job'		=> $id_job,
							'level' 	=> $level,
							'status'	=> 0,
							'LAST_USER'	=>'Admin');

			$this->M_user->update_data($data_update,$code);

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

			$this->M_user->update_data($data_delete,$code);

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
	
	function get_list_level(){
		$id_job 		= ($this->input->post('id_job')) ? $this->input->post('id_job'):'';
		$job_name    		= ($this->input->post('job_name')) ? $this->input->post('job_name'):'';

		$list_level 		= $this->M_user->m_get_list_level($id_job,$job_name);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_level);
	}
	
	function get_list_employe(){
		$id_employe 		= ($this->input->post('id_employe')) ? $this->input->post('id_employe'):'';
		$nama    		= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_employe 		= $this->M_user->m_get_list_employe($id_employe,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_employe);
	}

}
