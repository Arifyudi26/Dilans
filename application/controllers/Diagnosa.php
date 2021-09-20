<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

	public $menuID 	= 15;
	public $name 	= 'Diagnosa';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_diagnosa');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
		
	}

	public function ajax(){
		$get_diagnosa = $this->M_diagnosa->get_all();
		echo json_encode($get_diagnosa);
	}
	

	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('diagnosa/header');
		$this->load->view('diagnosa/v_diagnosa',$data);
	}

	public function insert(){
		$des_icd 	= $this->input->post('des_icd');
		$sub_icd   	= $this->input->post('sub_icd');

		$code 		= $this->input->post('code');
		$status 	= $this->input->post('status');
		$date 		= date('Y-m-d');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_diagnosa 	= $this->M_diagnosa->create_no_transaction();

			$data_insert = array(
							'ID_DIAGNOSA' 		=> $id_diagnosa,
							'DESKRIPSI_ICD' 	=> $des_icd,
							'SUB_ICD' 	=> $sub_icd,
							'status' 		=> 0,
							'LAST_USER' 		=> 'Admin',
							'CREATE_DATE'   => $date);

			$this->M_diagnosa->save_data($data_insert);

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
						    'DESKRIPSI_ICD' 	=> $des_icd,
							'SUB_ICD' 	    => $sub_icd,
						    'LAST_USER' 	=> 'Admin');

			$this->M_diagnosa->update_data($data_update,$code);

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

			$this->M_diagnosa->update_data($data_delete,$code);

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
