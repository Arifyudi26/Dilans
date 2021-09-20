<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "admin") {
					redirect('admin');
			}else{
					$this->load->view('404_content');
			}
		}
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "pendaftaran") {
					redirect('daftar');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "pemeriksaan") {
					redirect('pemeriksaan');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "pemeriksaan gizi") {
					redirect('pemeriksaan_gizi');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "poli umum") {
					redirect('medrec');
			}else{
					$this->load->view('404_content');
			}
		}
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "poli gigi") {
					redirect('poli_gigi');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "poli gizi") {
					redirect('poli_gizi');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "poli kia") {
					redirect('poli_kia');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "poli kb") {
					redirect('poli_kb');
			}else{
					$this->load->view('404_content');
			}
		}
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "poli lansia") {
					redirect('poli_lansia');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "poli tb") {
					redirect('Poli_tb');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "poli mtbs") {
					redirect('Poli_mtbs');
			}else{
					$this->load->view('404_content');
			}
		}
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "pemeriksaan MTBS") {
					redirect('pemeriksaan_mtbs');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "pemeriksaan kb") {
					redirect('Pemeriksaan_kb');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "farmasi") {
					redirect('Farmasi');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "laboratorium") {
					redirect('Laboratorium');
			}else{
					$this->load->view('404_content');
			}
		}
		
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "ruang bersalin") {
					redirect('Ruang_bersalin');
			}else{
					$this->load->view('404_content');
			}
		}
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "kepala puskesmas") {
					redirect('Kepala_puskes');
			}else{
					$this->load->view('404_content');
			}
		}
		
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(!isset($ceks)) {
			redirect('web/login');
		}else{
			$cek_user  = $this->Mcrud->get_users_by_un($ceks);
			if ($cek_user->row()->level == "kepala pelayanan") {
					redirect('Kepala_pelayanan');
			}else{
					$this->load->view('404_content');
			}
		}



	}
    
	

	public function login()
	{
		$ceks = $this->session->userdata('Puskesmas-sawah-besar@2017');
		if(isset($ceks)) {
			$this->load->view('404_content');
		}else{
			
			$this->load->view('web/login');
			

				if (isset($_POST['btnlogin'])){
						 $username = htmlentities(strip_tags($_POST['username']));
						 $pass	   = htmlentities(strip_tags($_POST['password']));

						 $query  = $this->Mcrud->get_users_by_un($username);
						 $cek    = $query->result();
						 $cekun  = $cek[0]->username;
						 $jumlah = $query->num_rows();

						 if($jumlah == 0) {
								 $this->session->set_flashdata('msg',
									 '
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<strong>Username "'.$username.'"</strong> belum terdaftar.
									 </div>'
								 );
								 redirect('web/login');
						 } else {
										 $row = $query->row();
										 $cekpass = $row->password;
										 if($cekpass <> $pass) {
												$this->session->set_flashdata('msg',
													 '<div class="alert alert-warning alert-dismissible" role="alert">
													 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
															<strong>Username atau Password Salah!</strong>.
													 </div>'
												);
												redirect('web/login');
										 } else {

																$this->session->set_userdata('Puskesmas-sawah-besar@2017', "$cekun");

																date_default_timezone_set('Asia/Jakarta');
																$tgl = date('Y-m-d H:m:s');
																$data = array(
																	'terakhir_login'		=> $tgl,
																	);
																$this->Mcrud->update_user(array('username' => $username), $data);
												 			 	redirect('web');
										 }
						 }
				}
		}
	}


	public function logout() {
     if ($this->session->has_userdata('Puskesmas-sawah-besar@2017')) {
         $this->session->sess_destroy();
         redirect('');
     }
     redirect('');
  }


	function error_not_found(){
		$this->load->view('404_content');
	}

}
