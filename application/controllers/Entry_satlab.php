<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_satlab extends CI_Controller {

	public $menuID 	= 5;
	public $name 	= 'Entry Satuan Lab';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_entry_satlab');
		$this->load->model('M_menu_lab');
		$this->load->helper('message_helper');
	}

	public function ajax(){
		$get = $this->M_entry_satlab->get_all();
		//echo $this->db->last_query();
		echo json_encode($get);
	}
	
	function get_list_lab(){
		$id_dt_lab 		= ($this->input->post('id_dt_lab')) ? $this->input->post('id_dt_lab'):'';
		$nama    		= ($this->input->post('nama')) ? $this->input->post('nama'):'';

		$list_lab 		= $this->M_entry_satlab->m_get_list_lab($id_dt_lab,$nama);
		// echo $this->db->last_query();
		// die();
		echo json_encode($list_lab);
	}

	public function index(){

		$data['menu_link'] = $this->M_menu_lab->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();
		$this->load->view('lab/header1');
		$this->load->view('lab/data_satuan_lab',$data);
	}

	public function insert(){
		$id_dt 	= $this->input->post('id_dt_lab');
		$pem_lab   	= $this->input->post('pem_lab');
	    $priksa 	= $this->input->post('priksa');
		$n_normal   	= $this->input->post('n_normal');
		$satuan   	= $this->input->post('satuan');
		$code 		= $this->input->post('code');
		$status 	= $this->input->post('status');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_cek 	= $this->M_entry_satlab->create_no_transaction();
			$data_lab = array(
							'ID_CEK_LAB'  		=> $id_cek,
							'PEMERIKSAAN_LAB'	=> $pem_lab,
							'PRIKSA' 			=> $priksa,
							'NILAI_NORMAL'		=> $n_normal,
							'SATUAN' 		=> $satuan,
							'ID_DT_LAB' 		=> $id_dt,
							'status' 			=> 0,
							'ID_USER' 			=> 17);

			$this->M_entry_satlab->save_data($data_lab);

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
		}
		echo json_encode($result);
	}

}
