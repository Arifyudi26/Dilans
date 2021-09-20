<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class poli_gizi extends CI_Controller {

    public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_index_poli_gizi');
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
	 	$menu_group 		= $this->M_index_poli_gizi->get_menu_group();

		/*====================== get menu dengan level != 0 ================*/
		$child_menu 		= $this->M_index_poli_gizi->get_menu_child($usercode);

		$data['menu_group'] = $menu_group;
		$data['child_menu'] = $child_menu;

			if ($data['user']->row()->level == "poli gizi") {
					$this->load->view('poli_gizi/header', $data);
					$this->load->view('poli_gizi/nav', $data);
					$this->load->view('poli_gizi/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
	public function search_dewasa(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_poli_gizi_dewasa($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'tt_lahir' => $pasien->TEMPAT_TGL_LAHIR, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'alamat' => $pasien->ALAMAT,
		'agama'   => $pasien->AGAMA,
		'pendidikan'   => $pasien->PENDIDIKAN,
		'pekerjaan'   => $pasien->PEKERJAAN,
		'medis'   => $pasien->DIAGNOSA_MEDIS,
		'bb'   => $pasien->BERAT_BADAN,
		'tb'   => $pasien->TINGGI_BADAN,
		'imt'   => $pasien->IMT,
		'lla'   => $pasien->LLA,
		'l_perut'   => $pasien->LINGKAR_PERUT,
		'l_panggul'   => $pasien->LINGKAR_PANGGUL,
		'sg'   => $pasien->STATUS_GIZI,
		'biokimia'   => $pasien->BIOKIMIA,
		'ku'   => $pasien->KONDISI_UMUM,
		'td'   => $pasien->TEKANAN_DARAH,
		'st'   => $pasien->SUHU_TUBUH,
		'klinis'   => $pasien->KLINIS,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

	
	public function search_anak(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_poli_gizi_anak($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'tt_lahir' => $pasien->TEMPAT_TGL_LAHIR, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'alamat' => $pasien->ALAMAT,
		'nm_ortu'   => $pasien->NAMA_ORTU,
		'pekerjaan_ortu'   => $pasien->PEKERJAAN_ORTU,
		'anak_ke'   => $pasien->ANAK_KE_DARI,
		'medis'   => $pasien->DIAGNOSA_MEDIS,
		'bbl'   => $pasien->BB_LAHIR,
		'pbl'   => $pasien->PB_LAHIR,
		'uk'   => $pasien->UMUR_KEHAMILAN,
		'kelahiran'   => $pasien->KELAHIRAN,
		'bb'   => $pasien->BERAT_BADAN,
		'tb'   => $pasien->TINGGI_BADAN,
		'imt'   => $pasien->IMT,
		'biokimia'   => $pasien->BIOKIMIA,
		'fk'   => $pasien->FISIK_KLINIS,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	
}
