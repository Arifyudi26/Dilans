<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_pemeriksaan extends CI_Controller {
	
	public $menuID 	= 12;
	public $name 	= 'Jenis Pemeriksaan';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_jenispemeriksaan');
		$this->load->model('M_menu');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');	
	}

	public function ajax(){
		$get_barang = $this->M_jenispemeriksaan->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_barang);
	}

	public function index(){

		$data['menu_link'] = $this->M_menu->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();

		$this->load->view('jenis_pemeriksaan/header');
		$this->load->view('jenis_pemeriksaan/v_jenispemeriksaan',$data);
	}

	public function insert(){
		$jenis 		= $this->input->post('jenis');
		$ket   	= $this->input->post('ket');

		$id_jenis 		= $this->input->post('id_jenis');
		$status 	= $this->input->post('status');
		$date 		= date('Y-m-d');

		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_jenis1 	= $this->M_jenispemeriksaan->create_no_transaction();

			$data_insert = array(
							'ID_JENIS' 		=> $id_jenis1,
							'JENIS_PEMERIKSAAN' 		=> $jenis,
							'KETERANGAN' 	=> $ket,
							'status' 			=> 0,
							'LAST_USER' 			=> 'admin',
							'CREATE_DATE' 		=> $date);

			$this->M_jenispemeriksaan->save_data($data_insert);

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
						'JENIS_PEMERIKSAAN' 		=> $jenis,
						'KETERANGAN' 	=> $ket,
						'LAST_USER' 			=> 'admin');

			$this->M_jenispemeriksaan->update_data($data_update,$id_jenis);

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

			$this->M_jenispemeriksaan->update_data($data_delete,$id_jenis);

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
