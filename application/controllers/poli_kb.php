<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class poli_kb extends CI_Controller {

    public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_index_poli_kb');
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
	 	$menu_group 		= $this->M_index_poli_kb->get_menu_group();

		/*====================== get menu dengan level != 0 ================*/
		$child_menu 		= $this->M_index_poli_kb->get_menu_child($usercode);

		$data['menu_group'] = $menu_group;
		$data['child_menu'] = $child_menu;

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/nav', $data);
					$this->load->view('poli_kb/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
	public function search(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_poli_kb($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'tt_lahir' => $pasien->TEMPAT_TGL_LAHIR, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'umur'   => $pasien->UMUR,
		'pendidikan'   => $pasien->PENDIDIKAN,
		'pekerjaan'   => $pasien->PEKERJAAN,
		'alamat' => $pasien->ALAMAT,
		'bpjs' => $pasien->NO_BPJS,
		
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	

	public function input_poli_kb()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['pkb']= $this->Mcrud->id_poli_kb();

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/input_poli_kb', $data);
					$this->load->view('poli_kb/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_poli_kb	  = htmlentities(strip_tags($this->input->post('id_kb')));
							$kd_faskes	  = htmlentities(strip_tags($this->input->post('kd_faskes')));
							$no_seri	  = htmlentities(strip_tags($this->input->post('no_seri')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$tt_lahir	  = htmlentities(strip_tags($this->input->post('tt_lahir')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$pendidikan	  = htmlentities(strip_tags($this->input->post('pendidikan')));
							$pekerjaan	  = htmlentities(strip_tags($this->input->post('pekerjaan')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$bpjs = htmlentities(strip_tags($this->input->post('no_bpjs')));
							$tahapan	  = htmlentities(strip_tags($this->input->post('tahapan')));
							$nm_suami	  = htmlentities(strip_tags($this->input->post('nm_suami')));
							$pen_suami	  = htmlentities(strip_tags($this->input->post('pendidikan_suami')));
							$pek_suami	  = htmlentities(strip_tags($this->input->post('pekerjaan_suami')));
							$j_anak  = htmlentities(strip_tags($this->input->post('jumlah_anak')));
							$uat	  = htmlentities(strip_tags($this->input->post('uat')));
							$s_kb	  = htmlentities(strip_tags($this->input->post('status_kb')));
							$ckt	  = htmlentities(strip_tags($this->input->post('ckt')));
							$tgl_haid = htmlentities(strip_tags($this->input->post('tgl_haid')));
							$hdh = htmlentities(strip_tags($this->input->post('hdh')));
							$menyusui = htmlentities(strip_tags($this->input->post('menyusui')));
							$rps	  = htmlentities(strip_tags($this->input->post('rps')));
							$ku  = htmlentities(strip_tags($this->input->post('ku')));
							$bb	  = htmlentities(strip_tags($this->input->post('bb')));
							$td  = htmlentities(strip_tags($this->input->post('td')));
							$posisi_rahim	  = htmlentities(strip_tags($this->input->post('posisi_rahim')));
							$spim	  = htmlentities(strip_tags($this->input->post('spim')));
							$pem_tambah	  = htmlentities(strip_tags($this->input->post('pem_tambah')));
							$akbd	  = htmlentities(strip_tags($this->input->post('akbd')));
							$mjp	  = htmlentities(strip_tags($this->input->post('mjp')));
							$tgl_dipesan	  = htmlentities(strip_tags($this->input->post('tdk')));
							$tgl_dilayani	  = htmlentities(strip_tags($this->input->post('tgl_dilayani')));
							$tgl_dicabut	  = htmlentities(strip_tags($this->input->post('tgl_dicabut')));
							$dokter	  = htmlentities(strip_tags($this->input->post('dokter')));
							

							$data = array(
							    'ID_POLI_KB'   => $id_poli_kb,
								'NO_KD_FASKES_KB' => $kd_faskes,
								'NO_SERI_KARTU'  => $no_seri,
								'KODE_PASIEN'		   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'TEMPAT_TGL_LAHIR'	   => $tt_lahir,
								'UMUR'			   => $umur,
								'PENDIDIKAN'   => $pendidikan,
								'PEKERJAAN'    => $pekerjaan,
								'ALAMAT'           => $alamat,
								'NO_BPJS'       => $bpjs,
								'TAHAPAN_KS'         => $tahapan,
								'NAMA_SUAMI'      => $nm_suami,
								'PENDIDIKAN_SUAMI' => $pen_suami,
								'PEKERJAAN_SUAMI'       => $pek_suami,
								'JUMLAH_ANAK'      => $j_anak,
								'UMUR_ANAK_TERKECIL'        => $uat,
								'STATUS_KB'  => $s_kb,
								'CARA_KB_TERAKHIR'   => $ckt,
								'HAID_TERAKHIR_TGL'        => $tgl_haid,
								'DUGAAN_HAMIL'             => $hdh,
								'MENYUSUI'           => $menyusui,
								'RPS'     => $rps,
								'KEADAAN_UMUM'   => $ku,
								'BERAT_BADAN'   => $bb,
								'TEKANAN_DARAH'   => $td,
								'POSISI_RAHIM'   => $posisi_rahim,
								'SPD'   => $spim,
								'PEMERIKSAAN_TAMBAHAN'   => $pem_tambah,
								'AKBD'   => $akbd,
								'MJP'   => $mjp,
								'TGL_DIPESAN'   => $tgl_dipesan,
								'TGL_DILAYANI'   => $tgl_dilayani,
								'TGL_DICABUT'   => $tgl_dicabut,
								'PENANGGUNG_JAWAB'   => $dokter,
								
							);
							$this->Mcrud->save_poli_kb($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Poli KB berhasil disimpan.
								</div>'
							);
							redirect('poli_kb/input_poli_kb');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_poli_kb()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['poli_kb']		  = $this->Mcrud->get_poli_kb();

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/data_poli_kb', $data);
					$this->load->view('poli_kb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search_kunjungan(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_kunjungan_kb($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
		'umur'   => $pasien->UMUR,
		'bpjs' => $pasien->NO_BPJS,
		'id_poli_kb' => $pasien->ID_POLI_KB,
		
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
		public function input_kunjungan_kb()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['kb']= $this->Mcrud->id_kunjungan_kb();

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/input_kunjungan_kb', $data);
					$this->load->view('poli_kb/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_kb	  = htmlentities(strip_tags($this->input->post('id_kunjungan')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$bpjs = htmlentities(strip_tags($this->input->post('bpjs')));
							$tgl_masuk	  = htmlentities(strip_tags($this->input->post('tgl_masuk')));
							$htt	  = htmlentities(strip_tags($this->input->post('htt')));
							$bb	  = htmlentities(strip_tags($this->input->post('bb')));
							$td	  = htmlentities(strip_tags($this->input->post('td')));
							$kb  = htmlentities(strip_tags($this->input->post('kb')));
							$kegagalan	  = htmlentities(strip_tags($this->input->post('kegagalan')));
							$pt	  = htmlentities(strip_tags($this->input->post('pt')));
							$tpk	  = htmlentities(strip_tags($this->input->post('tpk')));
							$id_poli_kb = htmlentities(strip_tags($this->input->post('id_poli_kb')));

							$data = array(
							    'ID_KUNJUNGAN_KB'   => $id_kb,
								'KODE_PASIEN'		   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'UMUR'			   => $umur,
								'NO_BPJS'       => $bpjs,
								'TGL_DATANG'         => $tgl_masuk,
								'HAID_TERAKHIR_TGL'      => $htt,
								'BERAT_BADAN' => $bb,
								'TEKANAN_DARAH'       => $td,
								'KOMPLIKASI_BERAT'      => $kb,
								'KEGAGALAN'        => $kegagalan,
								'PEMERIKSAAN'  => $pt,
								'TGL_KEMBALI'        => $tpk,
								'ID_POLI_KB'           => $id_poli_kb,
								
								
								
							);
							$this->Mcrud->save_kunjungan_kb($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Kunjungan KB berhasil disimpan.
								</div>'
							);
							redirect('poli_kb/input_kunjungan_kb');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_kunjungan_kb()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['kunjungan']		  = $this->Mcrud->get_kunjungan_kb();

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/data_kunjungan_kb', $data);
					$this->load->view('poli_kb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search_rujukan(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_rujukan_kb($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
		'umur'   => $pasien->UMUR,
		'alamat' => $pasien->ALAMAT,
		'no_bpjs' => $pasien->NO_BPJS,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	
	public function input_rujukan()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['rujukan']= $this->Mcrud->id_rujukan();

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/input_rujukan', $data);
					$this->load->view('poli_kb/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_rujukan	  = htmlentities(strip_tags($this->input->post('id_rujukan')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$jenis	  = htmlentities(strip_tags($this->input->post('jenis_kelamin')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$bpjs = htmlentities(strip_tags($this->input->post('no_bpjs')));
							$poli_pengirim = htmlentities(strip_tags($this->input->post('poli_pengirim')));
							$petugas = htmlentities(strip_tags($this->input->post('petugas')));
							$tgl = htmlentities(strip_tags($this->input->post('tanggal')));
							$yth  = htmlentities(strip_tags($this->input->post('yth')));
							$rujukan	  = htmlentities(strip_tags($this->input->post('poli_rujukan')));
							$pemeriksaan	  = htmlentities(strip_tags($this->input->post('pemeriksaan')));
							$icd	  = htmlentities(strip_tags($this->input->post('icd')));
							$terapi  = htmlentities(strip_tags($this->input->post('terapi')));
							
							$data = array(
							    'ID_RUJUKAN'   => $id_rujukan,
								'KODE_PASIEN'		   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'JENIS_KELAMIN'	   => $jenis,
								'UMUR'			   => $umur,
								'ALAMAT'           => $alamat,
								'NO_BPJS'       => $bpjs,
								'POLI_PENGIRIM'        => $poli_pengirim,
								'PETUGAS_PENGIRIM'             => $petugas,
								'TANGGAL'           => $tgl,
								'KEPADA_YTH'     => $yth,
								'POLI_RUJUKAN'         => $rujukan,
								'PEMERIKSAAN'      => $pemeriksaan,
								'ICD_SEMENTARA' => $icd,
								'TERAPI'       => $terapi,
								
							);
							$this->Mcrud->save_rujukan($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Rujukan berhasil disimpan.
								</div>'
							);
							redirect('poli_kb/input_rujukan');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_rujukan()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['rujukan']		  = $this->Mcrud->get_rujukan();

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/data_rujukan', $data);
					$this->load->view('poli_kb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search_umb(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_umbrujukan_kb($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'jenis' => $pasien->JENIS_KELAMIN, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'umur'   => $pasien->UMUR,
		'alamat' => $pasien->ALAMAT,
		'no_bpjs' => $pasien->NO_BPJS,
		'id_rujukan' => $pasien->ID_RUJUKAN,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	public function input_umb_rujukan()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['umb']= $this->Mcrud->id_umb_rujukan();

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/input_umb_rujukan', $data);
					$this->load->view('poli_kb/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_umb  = htmlentities(strip_tags($this->input->post('id_umb_rujukan')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$jenis	  = htmlentities(strip_tags($this->input->post('jenis_kelamin')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$bpjs = htmlentities(strip_tags($this->input->post('no_bpjs')));
							$poli_pengirim = htmlentities(strip_tags($this->input->post('poli_pengirim')));
							$petugas = htmlentities(strip_tags($this->input->post('petugas')));
							$tgl = htmlentities(strip_tags($this->input->post('tanggal')));
							$yth  = htmlentities(strip_tags($this->input->post('yth')));
							$poli_umb	  = htmlentities(strip_tags($this->input->post('poli_umb')));
							$hasil_pemeriksaan	  = htmlentities(strip_tags($this->input->post('hasil_pemeriksaan')));
							$t_terapi  = htmlentities(strip_tags($this->input->post('t_terapi')));
							$id_rujukan	  = htmlentities(strip_tags($this->input->post('id_rujukan')));
							
							$data = array(
							    'ID_UMB_RUJUKAN'   => $id_umb,
								'KODE_PASIEN'		   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'JENIS_KELAMIN'	   => $jenis,
								'UMUR'			   => $umur,
								'ALAMAT'           => $alamat,
								'NO_BPJS'       => $bpjs,
								'POLI_PENGIRIM'        => $poli_pengirim,
								'PETUGAS_PENGIRIM'             => $petugas,
								'TANGGAL'           => $tgl,
								'KEPADA_YTH'     => $yth,
								'POLI_UMB'         => $poli_umb,
								'HASIL_PEMERIKSAAN'      => $hasil_pemeriksaan,
								'TINDAKAN_TERAPI'       => $t_terapi,
								'ID_RUJUKAN'        => $id_rujukan,
								
							);
							$this->Mcrud->save_umb_rujukan($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Umpan Balik Rujukan berhasil disimpan.
								</div>'
							);
							redirect('poli_kb/input_umb_rujukan');
					}
			}else{
					$this->load->view('404_content');

			}

		}
	}

	public function data_umb_rujukan()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['umb_rujukan']		  = $this->Mcrud->get_umb_rujukan();

			if ($data['user']->row()->level == "poli kb") {
					$this->load->view('poli_kb/header', $data);
					$this->load->view('poli_kb/data_umb_rujukan', $data);
					$this->load->view('poli_kb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	
	
	
	}