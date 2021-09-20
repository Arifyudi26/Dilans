<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli_mtbs extends CI_Controller {

	public function index()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks))
		{ 
		redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/beranda', $data);
					$this->load->view('poli_mtbs/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
	

	public function input_data_bayi()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['tb']= $this->Mcrud->id_poli_tb();

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/input_data_bayi', $data);
					$this->load->view('poli_mtbs/footer');

					if (isset($_POST['btnsimpan'])) {
							$puskes	  = htmlentities(strip_tags($this->input->post('puskes')));
							$bidan 	  = htmlentities(strip_tags($this->input->post('bidan')));
							$no_bayi  = htmlentities(strip_tags($this->input->post('no_bayi')));
							$nama   = htmlentities(strip_tags($this->input->post('nama')));
							$nm_ibu	  = htmlentities(strip_tags($this->input->post('nama_ibu')));
							$nm_ayah	  = htmlentities(strip_tags($this->input->post('nama_ayah')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$kab = htmlentities(strip_tags($this->input->post('kabupaten')));
							$prov = htmlentities(strip_tags($this->input->post('provinsi')));
							$tgl_lahir = htmlentities(strip_tags($this->input->post('tgl_lahir')));
							$jam_lahir = htmlentities(strip_tags($this->input->post('jam_lahir')));
							$j_kelamin	  = htmlentities(strip_tags($this->input->post('j_kelamin')));
							$bb	  = htmlentities(strip_tags($this->input->post('bb')));
							$panjang	  = htmlentities(strip_tags($this->input->post('panjang')));
							$gol_darah	  = htmlentities(strip_tags($this->input->post('gol_darah')));
							$bpjs	  = htmlentities(strip_tags($this->input->post('bpjs')));
							$kia	  = htmlentities(strip_tags($this->input->post('buku_kia')));
							$keadaan	  = htmlentities(strip_tags($this->input->post('keadaan_lahir')));
							$komplikasi	  = htmlentities(strip_tags($this->input->post('komplikasi')));
							$resusitasi	  = htmlentities(strip_tags($this->input->post('resusitasi')));
							$imd	  = htmlentities(strip_tags($this->input->post('imd')));
							$pencegahan	  = htmlentities(strip_tags($this->input->post('pencegahan')));
							$k_pulang	  = htmlentities(strip_tags($this->input->post('k_pulang')));
							$dirujuk	  = htmlentities(strip_tags($this->input->post('dirujuk_ke')));

							$data = array(
							    'PUSKESMAS'   => $puskes,
								'BIDAN'		   => $bidan,
								'NO_BAYI'	   => $no_bayi,
								'NAMA_LENGKAP'	   => $nama,
								'NAMA_IBU'			   => $nm_ibu,
								'NAMA_AYAH'           => $nm_ayah,
								'ALAMAT'       => $alamat,
								'KABUPATEN'        => $kab,
								'PROVINSI'             => $prov,
								'TGL_LAHIR'           => $tgl_lahir,
								'JAM_LAHIR'     => $jam_lahir,
								'JENIS_KELAMIN'         => $j_kelamin,
								'BERAT_BADAN'      => $bb,
								'PANJANG_BAYI' => $panjang,
								'GOL_DARAH'       => $gol_darah,
								'NO_BPJS'      => $bpjs,
								'BUKU_KIA'     => $kia,
								'KEADAAN_LAHIR'    => $keadaan,
								'KOMPLIKASI'       => $komplikasi,
								'RESUSITASI'       => $resusitasi,
								'IMD'        => $imd,
								'PENCEGAHAN'  => $pencegahan,
								'KEADAAN_PULANG'  => $k_pulang,
								'DIRUJUK_KE'   => $dirujuk,
								
							);
							$this->Mcrud->save_kartu_bayi($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data kartu bayi berhasil disimpan.
								</div>'
							);
							redirect('poli_mtbs/input_data_bayi');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_bayi()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['data_bayi']		  = $this->Mcrud->get_kartu_bayi();

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_bayi', $data);
					$this->load->view('poli_mtbs/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->no_bayi($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'jenis' => $pasien->JENIS_KELAMIN, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'alamat' => $pasien->ALAMAT,
		'bpjs' => $pasien->NO_BPJS,
		
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
		
	public function input_pemeriksaan_neonatus()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['neo']= $this->Mcrud->pem_neonatus();

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/input_pemeriksaan_neonatus', $data);
					$this->load->view('poli_mtbs/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_neo	  = htmlentities(strip_tags($this->input->post('id_neonatus')));
							$no_bayi 	  = htmlentities(strip_tags($this->input->post('no_bayi')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$tgl  = htmlentities(strip_tags($this->input->post('tgl')));
							$jenis	  = htmlentities(strip_tags($this->input->post('j_kelamin')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$bpjs = htmlentities(strip_tags($this->input->post('no_bpjs')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$kn = htmlentities(strip_tags($this->input->post('kn')));
							$nakes = htmlentities(strip_tags($this->input->post('nakes')));
							$ae = htmlentities(strip_tags($this->input->post('ae')));
							$pencegahan	  = htmlentities(strip_tags($this->input->post('pencegahan')));
							$ip	  = htmlentities(strip_tags($this->input->post('ip')));
							$diagnosis	  = htmlentities(strip_tags($this->input->post('diagnosis')));
							$km	  = htmlentities(strip_tags($this->input->post('km')));
							$k_pulang	  = htmlentities(strip_tags($this->input->post('k_pulang')));
							$dirujuk	  = htmlentities(strip_tags($this->input->post('dirujuk')));
							

							$data = array(
							    'ID_NEONATUS'   => $id_neo,
								'NO_BAYI'	   => $no_bayi,
								'NAMA_LENGKAP'	   => $nama,
								'TGL_MASUK'          => $tgl,
								'JENIS_KELAMIN'	   => $jenis,
								'ALAMAT'           => $alamat,
								'NO_BPJS' => $bpjs,
								'UMUR'        => $umur,
								'KN'  => $kn,
								'NAKES'             => $nakes,
								'ASI_EKSKLUSIF'           => $ae,
								'PENCEGAHAN'     => $pencegahan,
								'INTEGRASI_PROGRAM'    => $ip,
								'DIAGNOSIS'      => $diagnosis,
								'KLASIFIKASI_MTBM' => $km,
								'KEADAAN_PULANG'       => $k_pulang,
								'DIRUJUK_KE'     => $dirujuk,
								
								
							);
							$this->Mcrud->save_pem_neonatus($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Pemeriksaan Neonatus berhasil disimpan.
								</div>'
							);
							redirect('poli_mtbs/input_pemeriksaan_neonatus');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_pemeriksaan_neonatus()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['neonatus']		  = $this->Mcrud->get_pem_neonatus();

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_pemeriksaan_neonatus', $data);
					$this->load->view('poli_mtbs/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search_bayi(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_pem_bayi($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'jenis' => $pasien->JENIS_KELAMIN, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'umur'  => $pasien->UMUR,
		'alamat' => $pasien->ALAMAT,
		'keluhan' => $pasien->KELUHAN,
		'bpjs' => $pasien->NO_BPJS,
		'ae'   => $pasien->ASI_EKSKLUSIF,
		'mp'   => $pasien->MP_ASI,
		'sdi'  => $pasien->SDI_DTK,
		'bb' => $pasien->BERAT_BADAN,
		'tb' => $pasien->TINGGI_BADAN,
		'st' => $pasien->SISTOLE,
		'dt' => $pasien->DIASTOLE,
		'rr' => $pasien->RASPIRATORY_RATE,
		'hr' => $pasien->HEART_RATE,
		
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	public function input_pemeriksaan_bayi()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['bayi']= $this->Mcrud->pem_bayi();

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/input_pemeriksaan_bayi', $data);
					$this->load->view('poli_mtbs/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_bayi	  = htmlentities(strip_tags($this->input->post('id_bayi')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$jenis  = htmlentities(strip_tags($this->input->post('jenis')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$umurb1 = htmlentities(strip_tags($this->input->post('umurb1')));
							$umurhe = htmlentities(strip_tags($this->input->post('umurhe')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$keluhan = htmlentities(strip_tags($this->input->post('keluhan')));
							$bpjs = htmlentities(strip_tags($this->input->post('bpjs')));
							$ae	  = htmlentities(strip_tags($this->input->post('ae')));
							$mp_asi	  = htmlentities(strip_tags($this->input->post('mp_asi')));
							$sdi	  = htmlentities(strip_tags($this->input->post('sdi_dtk')));
							$bb	  = htmlentities(strip_tags($this->input->post('bb')));
							$tb	  = htmlentities(strip_tags($this->input->post('tb')));
							$st  = htmlentities(strip_tags($this->input->post('st')));
							$dt	  = htmlentities(strip_tags($this->input->post('dt')));
							$rr	  = htmlentities(strip_tags($this->input->post('rr')));
							$hr	  = htmlentities(strip_tags($this->input->post('hr')));
							$diagnosis	  = htmlentities(strip_tags($this->input->post('diagnosis')));
							$sg	  = htmlentities(strip_tags($this->input->post('sg')));
							$pencegahan	  = htmlentities(strip_tags($this->input->post('pencegahan')));
							$tgl	  = htmlentities(strip_tags($this->input->post('tgl')));
							$ip	  = htmlentities(strip_tags($this->input->post('ip')));
							$dirujuk	  = htmlentities(strip_tags($this->input->post('dirujuk')));
							$ket	  = htmlentities(strip_tags($this->input->post('ket')));

							$data = array(
							    'ID_PEM_BAYI'   => $id_bayi,
								'KODE_PASIEN'	   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'JENIS_KELAMIN'	   => $jenis,
								'UMUR'             => $umur,
								'UMUR_B1'  	   => $umurb1,
								'UMUR_He'  	   => $umurhe,  
								'ALAMAT'           => $alamat,
								'KELUHAN'          => $keluhan,
								'NO_BPJS'        => $bpjs,
								'ASI_EKSKLUSIF'           => $ae,
								'MP_ASI'     => $mp_asi,
								'SDI_DTK'     => $sdi,
								'BERAT_BADAN'  => $bb,
								'TINGGI_BADAN'        => $tb,
								'SISTOLE'    => $st,
								'DIASTOLE'   => $dt,
								'RASPIRATORY_RATE' => $rr,
								'HEART_RATE'  => $hr,
								'DIAGNOSIS'           => $diagnosis,
								'STATUS_GIZI'     => $sg,
								'PENCEGAHAN'         => $pencegahan,
								'TGL_MASUK'      => $tgl,
								'INTEGRASI_PROGRAM'  => $ip,
								'DIRUJUK_KE'       => $dirujuk,
								'KETERANGAN'     => $ket,
								
								
							);
							$this->Mcrud->save_pem_bayi($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Pemeriksaan Bayi berhasil disimpan.
								</div>'
							);
							redirect('poli_mtbs/input_pemeriksaan_bayi');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_pemeriksaan_bayi()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['bayi']		  = $this->Mcrud->get_pem_bayi();

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_pemeriksaan_bayi', $data);
					$this->load->view('poli_mtbs/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	public function search_balita(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_pem_balita($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'jenis' => $pasien->JENIS_KELAMIN, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'umur'  => $pasien->UMUR,
		'alamat' => $pasien->ALAMAT,
		'keluhan' => $pasien->KELUHAN,
		'bpjs' => $pasien->NO_BPJS,
		'ae'   => $pasien->ASI_EKSKLUSIF,
		'mp'   => $pasien->MP_ASI,
		'sdi'  => $pasien->SDI_DTK,
		'bb' => $pasien->BERAT_BADAN,
		'tb' => $pasien->TINGGI_BADAN,
		'st' => $pasien->SISTOLE,
		'dt' => $pasien->DIASTOLE,
		'rr' => $pasien->RASPIRATORY_RATE,
		'hr' => $pasien->HEART_RATE,
		
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	
	
	public function input_pemeriksaan_balita()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['balita']= $this->Mcrud->pem_balita();

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/input_pemeriksaan_balita', $data);
					$this->load->view('poli_mtbs/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_balita	  = htmlentities(strip_tags($this->input->post('id_balita')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nama')));
							$jenis  = htmlentities(strip_tags($this->input->post('jenis')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$keluhan = htmlentities(strip_tags($this->input->post('keluhan')));
							$bpjs	  = htmlentities(strip_tags($this->input->post('no_bpjs')));
							$ae = htmlentities(strip_tags($this->input->post('ae')));
							$mp_asi = htmlentities(strip_tags($this->input->post('mp_asi')));
							$sdi = htmlentities(strip_tags($this->input->post('sdi_dtk')));
							$bb	  = htmlentities(strip_tags($this->input->post('bb')));
							$tb	  = htmlentities(strip_tags($this->input->post('tb')));
							$st  = htmlentities(strip_tags($this->input->post('st')));
							$dt	  = htmlentities(strip_tags($this->input->post('dt')));
							$rr	  = htmlentities(strip_tags($this->input->post('rr')));
							$hr	  = htmlentities(strip_tags($this->input->post('hr')));
							$diagnosis	  = htmlentities(strip_tags($this->input->post('diagnosis')));
							$sg	  = htmlentities(strip_tags($this->input->post('sg')));
							$vitamin	  = htmlentities(strip_tags($this->input->post('vitamin')));
							$tgl	  = htmlentities(strip_tags($this->input->post('tgl')));
							$ip	  = htmlentities(strip_tags($this->input->post('ip')));
							$dirujuk	  = htmlentities(strip_tags($this->input->post('dirujuk')));
							$ket	  = htmlentities(strip_tags($this->input->post('ket')));
							
							$data = array(
							    'ID_PEM_BALITA'   => $id_balita,
								'KODE_PASIEN'	   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'JENIS_KELAMIN'	   => $jenis,
								'UMUR'        => $umur,
								'ALAMAT'           => $alamat,
								'KELUHAN' => $keluhan,
								'NO_BPJS'  => $bpjs,
								'ASI_EKSKLUSIF'  => $ae,
								'MP_ASI'    => $mp_asi,
								'SDI_DK'   => $sdi,
								'BERAT_BADAN'  => $bb,
								'TINGGI_BADAN'             => $tb,
								'SISTOLE'    => $st,
								'DIASTOLE'   => $dt,
								'RASPIRATORY_RATE'  => $rr,
								'HEART_RATE'   => $hr,
								'DIAGNOSIS'           => $diagnosis,
								'STATUS_GIZI'     => $sg,
								'VITAMIN_ANAK'         => $vitamin,
								'TGL_PRIKSA'      => $tgl,
								'INTEGRASI_PROGRAM'  => $ip,
								'DIRUJUK_KE'       => $dirujuk,
								'KETERANGAN'     => $ket,
																
							);
							$this->Mcrud->save_pem_balita($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Pemeriksaan Balita berhasil disimpan.
								</div>'
							);
							redirect('poli_mtbs/input_pemeriksaan_balita');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_pemeriksaan_balita()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['balita']		  = $this->Mcrud->get_pem_balita();

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_pemeriksaan_balita', $data);
					$this->load->view('poli_mtbs/footer');
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

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_obat', $data);
					$this->load->view('poli_mtbs/footer');
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
			
				
			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_resep', $data);
					$this->load->view('poli_mtbs/footer');
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

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/input_terapi_obat', $data);
					$this->load->view('poli_mtbs/footer');

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
							redirect('poli_mtbs/input_terapi_obat');
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

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_terapi_obat', $data);
					$this->load->view('poli_mtbs/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	public function search_rujukan(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_rujukan_mtbs($kd);
    
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

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/input_rujukan', $data);
					$this->load->view('poli_mtbs/footer');

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
							redirect('poli_mtbs/input_rujukan');
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

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_rujukan', $data);
					$this->load->view('poli_mtbs/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search_umb(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_umbrujukan_mtbs($kd);
    
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

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/input_umb_rujukan', $data);
					$this->load->view('poli_mtbs/footer');

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
							redirect('poli_mtbs/input_umb_rujukan');
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

			if ($data['user']->row()->level == "poli mtbs") {
					$this->load->view('poli_mtbs/header', $data);
					$this->load->view('poli_mtbs/data_umb_rujukan', $data);
					$this->load->view('poli_mtbs/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	
}
