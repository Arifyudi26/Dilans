<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli_tb extends CI_Controller {

	public function index()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks))
		{ 
		redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/beranda', $data);
					$this->load->view('poli_tb/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
	public function search(){
	
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_poli_tb($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'jenis' => $pasien->JENIS_KELAMIN, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'umur'   => $pasien->UMUR,
		'alamat' => $pasien->ALAMAT,
		'bpjs' => $pasien->NO_BPJS,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	

	public function input_poli_tb()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['tb']= $this->Mcrud->id_poli_tb();

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/input_poli_tb', $data);
					$this->load->view('poli_tb/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_tb	  = htmlentities(strip_tags($this->input->post('id_poli_tb')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$jenis	  = htmlentities(strip_tags($this->input->post('jenis_kelamin')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$bpjs = htmlentities(strip_tags($this->input->post('no_bpjs')));
							$kp = htmlentities(strip_tags($this->input->post('kp')));
							$diagnosa = htmlentities(strip_tags($this->input->post('diagnosa')));
							$fup = htmlentities(strip_tags($this->input->post('fup')));
							$bulan	  = htmlentities(strip_tags($this->input->post('bulan_ke')));
							$noreg	  = htmlentities(strip_tags($this->input->post('noreg')));
							$nis	  = htmlentities(strip_tags($this->input->post('nis')));
							$tpd	  = htmlentities(strip_tags($this->input->post('tpd')));
							$tps	  = htmlentities(strip_tags($this->input->post('tps')));
							$nps	  = htmlentities(strip_tags($this->input->post('nps')));
							$nl	  = htmlentities(strip_tags($this->input->post('nl')));
							$bd	  = htmlentities(strip_tags($this->input->post('bd')));
							$al	  = htmlentities(strip_tags($this->input->post('al')));

							$data = array(
							    'ID_POLI_TB'   => $id_tb,
								'KODE_PASIEN'		   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'JENIS_KELAMIN'	   => $jenis,
								'UMUR'			   => $umur,
								'ALAMAT'           => $alamat,
								'NO_BPJS'       => $bpjs,
								'KLASIFIKASI_PENYAKIT'        => $kp,
								'DIAGNOSA'             => $diagnosa,
								'FOLLOW_UP'           => $fup,
								'BULAN_KE'     => $bulan,
								'NO_REG_TB'         => $noreg,
								'NO_IDEN_SEDIAAN'      => $nis,
								'TGL_PENG_DAHAK' => $tpd,
								'TGL_PENG_SEDIAAN'       => $tps,
								'NAMA_PENG_SPESIMEN'     => $nps,
								'NANAH_LENDIR'           => $nl,
								'BERCAK_DARAH'           => $bd,
								'AIR_LIUR'               => $al,
								
							);
							$this->Mcrud->save_poli_tb($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Poli TB berhasil disimpan.
								</div>'
							);
							redirect('poli_tb/input_poli_tb');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_poli_tb()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['poli_tb']		  = $this->Mcrud->get_poli_tb();

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/data_poli_tb', $data);
					$this->load->view('poli_tb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search_tb(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_kartu_tb($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
		'tt_lahir'  => $pasien->TEMPAT_TGL_LAHIR,
		'nik'   => $pasien->NIK_KTP,
        'jenis' => $pasien->JENIS_KELAMIN, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'umur'   => $pasien->UMUR,
		'alamat' => $pasien->ALAMAT,
		
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
		
	public function input_kartu_tb()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['pptb']= $this->Mcrud->kartu_tb();

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/input_kartu_tb', $data);
					$this->load->view('poli_tb/footer');

					if (isset($_POST['btnsimpan'])) {
							$kartu_tb	  = htmlentities(strip_tags($this->input->post('id_kartu_tb')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nama')));
							$ktp  = htmlentities(strip_tags($this->input->post('ktp')));
							$jenis	  = htmlentities(strip_tags($this->input->post('j_kelamin')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$tt_lahir = htmlentities(strip_tags($this->input->post('tt_lahir')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$bb = htmlentities(strip_tags($this->input->post('bb')));
							$tb = htmlentities(strip_tags($this->input->post('tb')));
							$nm_pmo = htmlentities(strip_tags($this->input->post('nama_pmo')));
							$nm_faskes	  = htmlentities(strip_tags($this->input->post('nama_faskes')));
							$alamat_pmo	  = htmlentities(strip_tags($this->input->post('alamat_pmo')));
							$ntp	  = htmlentities(strip_tags($this->input->post('ntp')));
							$parut	  = htmlentities(strip_tags($this->input->post('parut')));
							$stb	  = htmlentities(strip_tags($this->input->post('stb')));
							$tgl_masuk	  = htmlentities(strip_tags($this->input->post('tgl_masuk')));
							$hpu	  = htmlentities(strip_tags($this->input->post('hpu')));
							$ut	  = htmlentities(strip_tags($this->input->post('ut')));
							$tgl_toraks	  = htmlentities(strip_tags($this->input->post('tgl_toraks')));
							$ns	  = htmlentities(strip_tags($this->input->post('ns')));
							$tgl_fnab	  = htmlentities(strip_tags($this->input->post('fnab_tgl')));
							$hasil	  = htmlentities(strip_tags($this->input->post('hasil')));
							$usd = htmlentities(strip_tags($this->input->post('usd')));
							$rd	  = htmlentities(strip_tags($this->input->post('rd')));
							$htd	  = htmlentities(strip_tags($this->input->post('htd')));
							$terapi_dm	  = htmlentities(strip_tags($this->input->post('terapi_dm')));
							$tipe_diag	  = htmlentities(strip_tags($this->input->post('tipe_diag')));
							$kbla	  = htmlentities(strip_tags($this->input->post('kbla')));
							$krps	  = htmlentities(strip_tags($this->input->post('krps')));
							$kbsh  = htmlentities(strip_tags($this->input->post('kbsh')));
							$do	  = htmlentities(strip_tags($this->input->post('do')));
							$fp  = htmlentities(strip_tags($this->input->post('fp')));
							$af	  = htmlentities(strip_tags($this->input->post('alamat_faskes')));
							$kota	  = htmlentities(strip_tags($this->input->post('kota')));
							$prov	  = htmlentities(strip_tags($this->input->post('provinsi')));

							$data = array(
							    'KARTU_PPTB'   => $kartu_tb,
								'KODE_PASIEN'	   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'NIK_KTP'          => $ktp,
								'JENIS_KELAMIN'	   => $jenis,
								'ALAMAT'           => $alamat,
								'TEMPAT_TGL_lAHIR' => $tt_lahir,
								'UMUR'        => $umur,
								'BERAT_BADAN'  => $bb,
								'TINGGI_BADAN'             => $tb,
								'NAMA_PMO'           => $nm_pmo,
								'NAMA_FASKES'     => $nm_faskes,
								'ALAMAT_PMO'         => $alamat_pmo,
								'TELPON_PMO'      => $ntb,
								'PARUT_BCG' => $parut,
								'JSTB_ANAK'       => $stb,
								'TGL_MASUK'     => $tgl_masuk,
								'HASIL_PEM_UJI'           => $hpu,
								'UJI_TUBERKULIN'           => $ut,
								'TGL_FOTO_TORAKS'               => $tgl_toraks,
								'NO_SERI'    => $ns,
								'TGL_FNAB'   => $tgl_fnab,
								'HASIL_FNAB'    => $hasil,
								'UJI_SELAIN_DAHAK'   => $usd,
								'RIWAYAT_DM'    => $rd,
								'HASIL_TES_DM'   => $htd,
								'TERAPI_DM'    => $terapi_dm,
								'TIPE_DIAGNOSIS'   => $tipe_diag,
								'KBL_ANATOMI'    => $kbla,
								'KRP_SEBELUMNYA'   => $krps,
								'KBS_HIV'    => $kbsh,
								'DIRUJUK_OLEH'   => $do,
								'FASKES_PINDAHAN'    => $fp,
								'ALAMAT_FASKES'   => $af,
								'KAB_KOTA'    => $kota,
								'PROVINSI'   => $prov,
								
							);
							$this->Mcrud->save_kartu_tb($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Kartu TB berhasil disimpan.
								</div>'
							);
							redirect('poli_tb/input_kartu_tb');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_kartu_tb()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['kartu_tb']		  = $this->Mcrud->get_kartu_tb();

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/data_kartu_tb', $data);
					$this->load->view('poli_tb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function data_obat()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['obat']		  = $this->Mcrud->get_obat();

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/data_obat', $data);
					$this->load->view('poli_tb/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
	
	
	public function data_resep()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['obat']		  = $this->Mcrud->get_obat();
			
				
			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/data_resep', $data);
					$this->load->view('poli_tb/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	public function search_terapi(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_obat_tb($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
		'umur'   => $pasien->UMUR,
		'tgl'   => $pasien->TGL_MASUK,
		
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	public function input_terapi_obat()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['terapi_obat']= $this->Mcrud->id_terapi_obat();
			$data['obat']= $this->Mcrud->get_obat();

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/input_terapi_obat', $data);
					$this->load->view('poli_tb/footer');

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
							$tgl = htmlentities(strip_tags($this->input->post('tgl')));
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
							$this->Mcrud->save_terapi_obat($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Terapi Obat berhasil disimpan.
								</div>'
							);
							redirect('poli_tb/input_terapi_obat');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_terapi_obat()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['terapi_obat']		  = $this->Mcrud->get_terapi_obat();

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/data_terapi_obat', $data);
					$this->load->view('poli_tb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	public function search_rujukan(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_rujukan_tb($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'jenis' => $pasien->JENIS_KELAMIN, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
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

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/input_rujukan', $data);
					$this->load->view('poli_tb/footer');

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
							redirect('poli_tb/input_rujukan');
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

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/data_rujukan', $data);
					$this->load->view('poli_tb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search_umb(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_umbrujukan_tb($kd);
    
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

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/input_umb_rujukan', $data);
					$this->load->view('poli_tb/footer');

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
							redirect('poli_tb/input_umb_rujukan');
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

			if ($data['user']->row()->level == "poli tb") {
					$this->load->view('poli_tb/header', $data);
					$this->load->view('poli_tb/data_umb_rujukan', $data);
					$this->load->view('poli_tb/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	
}
