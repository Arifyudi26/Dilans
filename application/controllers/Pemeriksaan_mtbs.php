<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan_mtbs extends CI_Controller {

	public function index()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks))
		{ 
		redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);

			if ($data['user']->row()->level == "pemeriksaan MTBS") {
					$this->load->view('pemeriksaan_mtbs/header', $data);
					$this->load->view('pemeriksaan_mtbs/beranda', $data);
					$this->load->view('pemeriksaan_mtbs/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
	
		public function search(){
		
     $kd = $this->input->post('kd');
    
    $pasien = $this->Mcrud->kd_pem_mtbs($kd);
    
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
	

	public function input_pemeriksaan_mtbs()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']= $this->Mcrud->get_users_by_un($ceks);
			$data['mtbs']= $this->Mcrud->id_pem_mtbs();

			if ($data['user']->row()->level == "pemeriksaan MTBS") {
					$this->load->view('pemeriksaan_mtbs/header', $data);
					$this->load->view('pemeriksaan_mtbs/input_pemeriksaan_mtbs', $data);
					$this->load->view('pemeriksaan_mtbs/footer');

					if (isset($_POST['btnsimpan'])) {
							$id_pemeriksaan	  = htmlentities(strip_tags($this->input->post('id_pem_mtbs')));
							$kd_pasien 	  = htmlentities(strip_tags($this->input->post('kd_pasien')));
							$nama   = htmlentities(strip_tags($this->input->post('nm_lengkap')));
							$jenis	  = htmlentities(strip_tags($this->input->post('jenis_kelamin')));
							$umur	  = htmlentities(strip_tags($this->input->post('umur')));
							$alamat = htmlentities(strip_tags($this->input->post('alamat')));
							$keluhan = htmlentities(strip_tags($this->input->post('keluhan')));
							$bpjs = htmlentities(strip_tags($this->input->post('no_bpjs')));
							$ae = htmlentities(strip_tags($this->input->post('ae')));
							$mp_asi = htmlentities(strip_tags($this->input->post('mp_asi')));
							$sdi = htmlentities(strip_tags($this->input->post('sdi_dtk')));
							$tb = htmlentities(strip_tags($this->input->post('tb')));
							$bb	  = htmlentities(strip_tags($this->input->post('bb')));
							$st	  = htmlentities(strip_tags($this->input->post('st')));
							$dt	  = htmlentities(strip_tags($this->input->post('dt')));
							$rr	  = htmlentities(strip_tags($this->input->post('rr')));
							$hr	  = htmlentities(strip_tags($this->input->post('hr')));

							$data = array(
							    'ID_PEM_MTBS'   => $id_pemeriksaan,
								'KODE_PASIEN'		   => $kd_pasien,
								'NAMA_LENGKAP'	   => $nama,
								'JENIS_KELAMIN'	   => $jenis,
								'UMUR'			   => $umur,
								'ALAMAT'           => $alamat,
								'KELUHAN'             => $keluhan,
								'NO_BPJS'       => $bpjs,
								'ASI_EKSKLUSIF'        => $ae,
								'MP_ASI'             => $mp_asi,
								'SDI_DTK'       => $sdi,
								'TINGGI_BADAN'           => $tb,
								'BERAT_BADAN'     => $bb,
								'SISTOLE'         => $st,
								'DIASTOLE'      => $dt,
								'RASPIRATORY_RATE' => $rr,
								'HEART_RATE'       => $hr,
								
							);
							$this->Mcrud->save_pem_mtbs($data);

							$this->session->set_flashdata('msg',
								' </p>
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Data Pemeriksaan MTBS berhasil disimpan.
								</div>'
							);
							redirect('pemeriksaan_mtbs/input_pemeriksaan_mtbs');
					}
			}else{
					$this->load->view('404_content');
			}

		}
	}

	public function data_pemeriksaan_mtbs()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$data['user']  			  = $this->Mcrud->get_users_by_un($ceks);
			$data['mtbs']		  = $this->Mcrud->get_pem_mtbs();

			if ($data['user']->row()->level == "pemeriksaan MTBS") {
					$this->load->view('pemeriksaan_mtbs/header', $data);
					$this->load->view('pemeriksaan_mtbs/data_pemeriksaan_mtbs', $data);
					$this->load->view('pemeriksaan_mtbs/footer');
			}else{
					$this->load->view('404_content');
	        	 }

		}
	}
}
