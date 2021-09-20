<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan_gizi extends CI_Controller {

      public function __construct(){
        parent::__construct();
		$this->load->model('M_index_pemgizi');
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
	 	$menu_group 		= $this->M_index_pemgizi->get_menu_group();

		/*====================== get menu dengan level != 0 ================*/
		$child_menu 		= $this->M_index_pemgizi->get_menu_child($usercode);

		$data['menu_group'] = $menu_group;
		$data['child_menu'] = $child_menu;
			
			if ($data['user']->row()->level == "pemeriksaan gizi") {
					$this->load->view('pemeriksaan_gizi/header', $data);
					$this->load->view('pemeriksaan_gizi/nav', $data);
					$this->load->view('pemeriksaan_gizi/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
    public function search_anak(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_pmg_anak($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
		'tt_lahir'   => $pasien->TEMPAT_TGL_LAHIR,
		'alamat' => $pasien->ALAMAT,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	 public function search_dewasa(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_pmg_dewasa($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
		'tt_lahir'   => $pasien->TEMPAT_TGL_LAHIR,
		'alamat' => $pasien->ALAMAT,
		'agama' => $pasien->AGAMA,
		'pendidikan' => $pasien->PENDIDIKAN,
		'pekerjaan' => $pasien->PEKERJAAN,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	
	
}
