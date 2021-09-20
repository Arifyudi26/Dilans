<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class poli_lansia extends CI_Controller {

    public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_index_poli_lansia');
	}


	public function index()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks))
		{ 
		redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$usercode 			= $this->session->userdata('id_user');

		/*====================== get menu dengan level = 0 ================*/
	 	$menu_group 		= $this->M_index_poli_lansia->get_menu_group();

		/*====================== get menu dengan level != 0 ================*/
		$child_menu 		= $this->M_index_poli_lansia->get_menu_child($usercode);

		$data['menu_group'] = $menu_group;
		$data['child_menu'] = $child_menu;

			if ($data['user']->row()->level == "poli lansia") {
					$this->load->view('poli_lansia/header', $data);
					$this->load->view('poli_lansia/nav', $data);
					$this->load->view('poli_lansia/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
	public function search(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_medrec_lansia($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'jenis' => $pasien->JENIS_KELAMIN, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'umur'   => $pasien->UMUR,
		'alamat' => $pasien->ALAMAT,
		'bpjs' => $pasien->NO_BPJS,
		'tgl' => $pasien->TGL_MASUK,
		'keluhan' => $pasien->KELUHAN,
		'tb' => $pasien->TINGGI_BADAN,
		'bb' => $pasien->BERAT_BADAN,
		'ss' => $pasien->SISTOLE,
		'ds' => $pasien->DIASISTOLE,
		'rr' => $pasien->RASPIRATORY_RATE,
		'hr' => $pasien->HEART_RATE,
		'id_pemeriksaan' => $pasien->ID_PEMERIKSAAN,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	

	
	
	
	}