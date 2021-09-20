<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

	public $menuID 	= 11;
	public $name 	= 'Unit';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_unit');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');		
	}

	public function ajax(){
		$get_barang = $this->M_unit->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_barang);
	}

	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();

		$this->load->view('unit/header');
		$this->load->view('unit/v_unit',$data);
	}

	public function insert(){
		$nama  	= $this->input->post('nama_unit');
		$ket   	= $this->input->post('ket');
		
		$id_unit 		= $this->input->post('id_unit');
		$status 	= $this->input->post('status');
		$date 		= date('Y-m-d');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_poli 	= $this->M_unit->create_no_transaction();

			$data_insert = array(
							'ID_UNIT' 		    => $id_poli,
							'NAMA_UNIT' 		    => $nama,
					    	'KETERANGAN' 	        => $ket,
							'status' 			=> 0,
							'LAST_USER' 		=> 'Admin');

			$this->M_unit->save_data($data_insert);

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
						'NAMA_UNIT' 		    => $nama,
						'KETERANGAN' 	        => $ket,
						'LAST_USER' 			=> 'admin');

			$this->M_unit->update_data($data_update,$id_unit);

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
						'LAST_USER' 		=> 'admin');

			$this->M_unit->update_data($data_delete,$id_unit);

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
