<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry_obat extends CI_Controller {

	public $menuID 	= 5;
	public $name 	= 'Entry obat';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_entry_obat');
		$this->load->model('M_menu_farmasi');
		$this->load->helper('message_helper');
		
	}

	public function ajax(){
		$get_obat = $this->M_entry_obat->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_obat);
	}

	public function index(){

		$data['menu_link'] = $this->M_menu_farmasi->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();

		$this->load->view('farmasi/header1');
		$this->load->view('farmasi/data_obat',$data);
	}

	public function insert(){
		$nm_obat 	= $this->input->post('nm_obat');
		$satuan   	= $this->input->post('satuan');
		$jenis   	= $this->input->post('jenis');
		$generik   	= $this->input->post('generik');
		$sub_jenis  = $this->input->post('sub_jenis');
		$masa   	= date('Y-m-d',strtotime($this->input->post('masa_berlaku')));
		$stok   	= $this->input->post('stok');
		$ket    	= $this->input->post('ket');
		$status 	= $this->input->post('status');
		$date 		= date('Y-m-d');
		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$id_obat 	= $this->M_entry_obat->create_no_transaction();
			$data = array(
							'ID_OBAT' 		=> $id_obat,
							'NAMA_OBAT' 	=> $nm_obat,
							'SATUAN' 		=> $satuan,
							'JENIS_OBAT' 	=> $jenis,
							'GENERIC' 		=> $generik,
							'SUB_JENIS' 	=> $sub_jenis,
							'MASA_BERLAKU' 	=> $masa,
							'STOK' 			=> $stok,
							'KETERANGAN'    => $ket,
							'status' 		=> 0,
							'LAST_USER' 	=> 'Farmasi');

			$this->M_entry_obat->save_data($data);

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
