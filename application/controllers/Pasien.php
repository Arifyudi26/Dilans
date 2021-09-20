<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public $menuID 	= 11; 
	public $name 	= 'Data pasien';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_daftar');
		$this->load->model('M_menu_daftar');
		$this->load->helper('message_helper');
	}

	public function ajax(){
		$get = $this->M_daftar->get_all();
		//echo $this->db->last_query();
		echo json_encode($get);
	}
	

	public function index(){

		$data['menu_link'] = $this->M_menu_daftar->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');
		//echo $this->db->last_query();
		$this->load->view('daftar/header1');
		$this->load->view('daftar/data_pasien',$data);
	}

	public function insert(){
		$ktp 	= $this->input->post('ktp');
		$nama   	= $this->input->post('nm_lengkap');
		$jenis   	= $this->input->post('jenis');
		$tt_lahir   	= $this->input->post('tt_lahir');
		$umur  = $this->input->post('umur');
		$status   	= $this->input->post('status_menikah');
		$agama   	= $this->input->post('agama');
		$telpon    	= $this->input->post('telpon');
		$alamat    	= $this->input->post('alamat');
		$pendidikan    	= $this->input->post('pendidikan');
		$pekerjaan    	= $this->input->post('pekerjaan');
		$bpjs   	= $this->input->post('bpjs');
		$faskes    	= $this->input->post('faskes');

		$code 		= $this->input->post('code');
		$status 	= $this->input->post('status');
		$date 		= date('Y-m-d');
		/*================== transaction begin ======================*/
		$this->db->trans_begin();

		if($status == 1){
			/*==================== create no transaction =================*/
			$kd_pasien 	= $this->M_daftar->create_no_transaction();

			$data_insert = array(
							'kd_pasien' 		=> $kd_pasien,
							'NIK_KTP' 	=> $ktp,
							'NAMA_LENGKAP' 	=> $nama,
							'JENIS_KELAMIN' 		=> $jenis,
							'TEMPAT_TGL_LAHIR' 	=> $tt_lahir,
							'UMUR' 	=> $umur,
							'STATUS_MENIKAH' 	=> $status,
							'AGAMA' 	=> $agama,
							'NO_TELPON'    => $telpon,
							'ALAMAT'    => $alamat,
							'PENDIDIKAN'    => $pendidikan,
							'PEKERJAAN'    => $pekerjaan,
							'NO_BPJS'    => $bpjs,
							'FASKES'    => $faskes,
							'status' 		=> 0,
							'ID_USER' 		=> 2,
							'CREATE_DATE'   => $date);

			$this->M_daftar->save_data($data_insert);

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
						    'NIK_KTP' 	=> $ktp,
							'NAMA_LENGKAP' 	=> $nama,
							'JENIS_KELAMIN' 		=> $jenis,
							'TEMPAT_TGL_LAHIR' 	=> $tt_lahir,
							'UMUR' 	=> $umur,
							'STATUS_MENIKAH' 	=> $status,
							'AGAMA' 	=> $agama,
							'NO_TELPON'    => $telpon,
							'ALAMAT'    => $alamat,
							'PENDIDIKAN'    => $pendidikan,
							'PEKERJAAN'    => $pekerjaan,
							'NO_BPJS'    => $bpjs,
							'FASKES'    => $faskes,
							'ID_USER' 		=> 2);

			$this->M_daftar->update_data($data_update,$code);

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
						'ID_USER' 	=> 2);

			$this->M_daftar->update_data($data_delete,$code);

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
