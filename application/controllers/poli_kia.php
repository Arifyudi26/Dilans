<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class poli_kia extends CI_Controller {

     public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Mcrud');
	}


	public function index()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks))
		{ 
		redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/beranda', $data);
					$this->load->view('poli_kia/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	 public function search_kia(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_otomatis_poli_kia($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'ibu' => $pasien->NO_IBU, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'bpjs' => $pasien->NO_BPJS,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	

	public function input_poli_kia()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['kia']= $this->Mcrud->id_poli_kia();

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/input_poli_kia', $data);
					$this->load->view('poli_kia/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_poli_kia	  = htmlentities(strip_tags($this->input->post('id_poli_kia')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$ibu	  = htmlentities(strip_tags($this->input->post('no_ibu')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$bpjs	  = htmlentities(strip_tags($this->input->post('bpjs')));
							$tgl = htmlentities(strip_tags($this->input->post('tgl')));
							$cara_masuk = htmlentities(strip_tags($this->input->post('cara_masuk')));
							$usia_klinis	  = htmlentities(strip_tags($this->input->post('usia_klinis')));
							$trimester	  = htmlentities(strip_tags($this->input->post('trimester')));
							$anamnesis	  = htmlentities(strip_tags($this->input->post('anamnesis')));
							$bb	  = htmlentities(strip_tags($this->input->post('bb')));
							$td  = htmlentities(strip_tags($this->input->post('td')));
							$lila  = htmlentities(strip_tags($this->input->post('lila')));
							$tfu	  = htmlentities(strip_tags($this->input->post('tfu')));
							$sg	  = htmlentities(strip_tags($this->input->post('status_gizi')));
							$rp = htmlentities(strip_tags($this->input->post('rp')));
							$djj = htmlentities(strip_tags($this->input->post('djj')));
							$bj = htmlentities(strip_tags($this->input->post('berat_janin')));
							$ktp	  = htmlentities(strip_tags($this->input->post('ktp')));
							$presentasi  = htmlentities(strip_tags($this->input->post('presentasi')));
							$jj	  = htmlentities(strip_tags($this->input->post('jj')));
							$si	  = htmlentities(strip_tags($this->input->post('si')));
							$tgl_ter	  = htmlentities(strip_tags($this->input->post('tgl_terdeteksi')));
							$terdeteksi	  = htmlentities(strip_tags($this->input->post('terdeteksi')));
							$komplikasi	  = htmlentities(strip_tags($this->input->post('komplikasi')));
							$dirujuk	  = htmlentities(strip_tags($this->input->post('dirujuk')));
							$keadaan	  = htmlentities(strip_tags($this->input->post('keadaan')));
							$ket	  = htmlentities(strip_tags($this->input->post('ket')));
							

							$data = array(
							    'ID_POLI_KIA'   => $id_poli_kia,
								'KODE_PASIEN'		   => $kd_pasien,
								'NO_IBU'      => $ibu,
								'NAMA_LENGKAP'	   => $nama,
								'NO_BPJS'       => $bpjs,
								'TGL_PEMERIKSAAN'        => $tgl,
								'CARA_MASUK'   => $cara_masuk,
								'USIA_KLINIIS'   => $usia_klinis,
								'TRIMESTER_KE'   => $trimester,
								'ANAMNESIS'      => $anamnesis,
								'BERAT_BADAN'    => $bb,
								'TEKANAN_DARAH' => $td,
								'LILA'           => $lila,
								'TFU'            => $tfu,
								'STATUS_GIZI'   => $sg,
								'REFLEKS_PATELLA'  => $rp,
								'DETAK_JANTUNG_JANIN' => $djj,
								'T_BERAT_JANIN'   => $bj,
								'KPL_TERHADAP_PAP' => $ktp,
								'PRESENTASI'      => $presentasi,
								'JUMLAH_JANIN'   => $jj,
								'STATUS_IMUNISASI' => $si,
								'TGL_TERDETEKSI'  => $tgl_ter,
								'TERDETEKSI_OLEH'  => $terdeteksi,
								'KOMPLIKASI'   => $komplikasi,
								'DIRUJUK_KE'   => $dirujuk,
								'KEADAAN'      => $keadaan,
								'KETERANGAN'   => $ket,
								
								
							);
							$this->Mcrud->save_poli_kia($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Poli Kia berhasil disimpan.
								</div>'
							);
							redirect('poli_kia/input_poli_kia');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_poli_kia()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['kia']		  = $this->Mcrud->get_poli_kia();

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/data_poli_kia', $data);
					$this->load->view('poli_kia/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
        
    public function search(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_otomatis_kartu_ibu($kd);
    
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
        'tt_lahir' => $pasien->TEMPAT_TGL_LAHIR, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'umur'   => $pasien->UMUR,
		'alamat' => $pasien->ALAMAT,
		'agama'  => $pasien->AGAMA,
		'pendidikan' => $pasien->PENDIDIKAN,
		'pekerjaan' => $pasien->PEKERJAAN,
		'telpon' => $pasien->NO_TELPON,
		'bpjs' => $pasien->NO_BPJS,
		
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
		
	
	
		public function input_kartu_ibu()
	    {
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['ibu']= $this->Mcrud->id_kartu_ibu();

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/input_kartu_ibu', $data);
					$this->load->view('poli_kia/footer');

					if (isset($_POST['btnsimpan'])) {
							$no_ibu	  = htmlentities(strip_tags($this->input->post('no_ibu')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$tt_lahir = htmlentities(strip_tags($this->input->post('tt_lahir')));
							$umur = htmlentities(strip_tags($this->input->post('umur')));
							$alamat	  = htmlentities(strip_tags($this->input->post('alamat')));
							$agama	  = htmlentities(strip_tags($this->input->post('agama')));
							$pendidikan	  = htmlentities(strip_tags($this->input->post('pendidikan')));
							$pekerjaan	  = htmlentities(strip_tags($this->input->post('pekerjaan')));
							$gol_darah  = htmlentities(strip_tags($this->input->post('gol_darah')));
							$suami  = htmlentities(strip_tags($this->input->post('nama_suami')));
							$telpon	  = htmlentities(strip_tags($this->input->post('telpon')));
							$tgl_reg	  = htmlentities(strip_tags($this->input->post('tgl_reg')));
							$bpjs = htmlentities(strip_tags($this->input->post('bpjs')));
							$gravida = htmlentities(strip_tags($this->input->post('gravida')));
							$partus = htmlentities(strip_tags($this->input->post('partus')));
							$abortus	  = htmlentities(strip_tags($this->input->post('abortus')));
							
							$hidup	  = htmlentities(strip_tags($this->input->post('hidup')));
							$tgl_periksa	  = htmlentities(strip_tags($this->input->post('tgl_periksa')));
							$tgl_hpht	  = htmlentities(strip_tags($this->input->post('tgl_hpht')));
							$taksiran	  = htmlentities(strip_tags($this->input->post('taksiran')));
							$bbsh	  = htmlentities(strip_tags($this->input->post('bb_sblm_hamil')));
							$tb	  = htmlentities(strip_tags($this->input->post('tb')));
							$rkk	  = htmlentities(strip_tags($this->input->post('rkk')));
							$pka	  = htmlentities(strip_tags($this->input->post('pka')));
							$tgl_bersalin	  = htmlentities(strip_tags($this->input->post('tgl_bersalin')));
							$penolong	  = htmlentities(strip_tags($this->input->post('penolong')));
							$tempat	  = htmlentities(strip_tags($this->input->post('tempat')));
							$pendamping	  = htmlentities(strip_tags($this->input->post('pendamping')));
							$transpot	  = htmlentities(strip_tags($this->input->post('transpot')));
							$pendonor	  = htmlentities(strip_tags($this->input->post('pendonor')));
							$id_berobat	  = htmlentities(strip_tags($this->input->post('id_berobat')));
							$id_poli_kia	  = htmlentities(strip_tags($this->input->post('id_poli_kia')));
							

							$data = array(
							    'NO_IBU' => $no_ibu,
								'KODE_PASIEN'		   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'TEMPAT_TGL_LAHIR'  => $tt_lahir,
								'UMUR'      => $umur,
								'ALAMAT_DOMISILI'  => $alamat,
								'AGAMA'   => $agama,
								'PENDIDIKAN'  => $pendidikan,
								'PEKERJAAN'   => $pekerjaan,
								'GOL_DARAH'   => $gol_darah,
								'NAMA_SUAMI'  => $suami,
								'NO_TELPON'   => $telpon,
								'TGL_REGISTRASI' => $tgl_reg,
								'NO_BPJS'     => $bpjs,
								'GRAVIDA'     => $gravida,
								'PARTUS'      => $partus,
								'ABORTUS'     => $abortus,
								'HIDUP'       => $hidup,
								'TGL_PERIKSA' => $tgl_periksa,
								'TGL_HPHT'    => $tgl_hpht,
								'TAKSIRAN_BERSALIN'  => $taksiran,
								'BB_SBLM_HAMIL'      => $bbsh,
								'TINGGI_BADAN'       => $tb,
								'RIWAYAT_KOMPLIKASI' => $rkk,
								'PENYAKIT_KRONIS/ALERGI' => $pka,
								'TGL_REN_BERSALIN'   => $tgl_bersalin,
								'PENOLONG'     => $penolong,
								'TEMPAT'       => $tempat,
								'PENDAMPING'   => $pendamping,
								'TRANSPORTASI' => $transpot,
								'ID_BEROBAT'   => $id_berobat,
								'ID_POLI_KIA'  => $id_poli_kia,
						
								
							);
							$this->Mcrud->save_kartu_ibu($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Kartu Berhasil Disimpan.
								</div>'
							);
							redirect('poli_kia/input_kartu_ibu');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_kartu_ibu()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['ibu']		  = $this->Mcrud->get_kartu_ibu();

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/data_kartu_ibu', $data);
					$this->load->view('poli_kia/footer');
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

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/data_obat', $data);
					$this->load->view('poli_kia/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	function tambah_obat()
	{
		$obat= array('id_obat' => $this->input->post('id'),
							 'nama_obat' => $this->input->post('nama'),
							 'satuan_obat' => $this->input->post('satuan'),
							 'qty' => $this->input->post('qty'),
							 
							);
		$this->cart->insert($obat);
		redirect('poli_gigi/data_obat');
	}
	
	function hapus($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
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

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/data_resep', $data);
					$this->load->view('poli_kia/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	public function search_terapi(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_terapi_obat_kia($kd);
 
    if( ! empty($pasien)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama' => $pasien->NAMA_LENGKAP, // Set array nama dengan isi kolom nama pada tabel siswa
		'ibu'   => $pasien->NO_IBU,
		'tgl'   => $pasien->TGL_PEMERIKSAAN,
		'id_poli_kia' => $pasien->ID_POLI_KIA,
		
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

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/input_terapi_obat', $data);
					$this->load->view('poli_kia/footer');

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
							redirect('poli_kia/input_terapi_obat');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
	
	
	public function search_rujukan(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_rujukan_poli_kia($kd);
    
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

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/input_rujukan', $data);
					$this->load->view('poli_kia/footer');

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
							redirect('poli_kia/input_rujukan');
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

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/data_rujukan', $data);
					$this->load->view('poli_kia/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	public function search_umb(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_umb_kia($kd);
    
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

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/input_umb_rujukan', $data);
					$this->load->view('poli_kia/footer');

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
							redirect('poli_kia/input_umb_rujukan');
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

			if ($data['user']->row()->level == "poli kia") {
					$this->load->view('poli_kia/header', $data);
					$this->load->view('poli_kia/data_umb_rujukan', $data);
					$this->load->view('poli_kia/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
	
	
	
	
}
