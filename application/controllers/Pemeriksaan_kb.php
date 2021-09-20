<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan_kb extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->model('M_index_pemkb');
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
	 	$menu_group 		= $this->M_index_pemkb->get_menu_group();

		/*====================== get menu dengan level != 0 ================*/
		$child_menu 		= $this->M_index_pemkb->get_menu_child($usercode);

		$data['menu_group'] = $menu_group;
		$data['child_menu'] = $child_menu;

			if ($data['user']->row()->level == "pemeriksaan kb") {
					$this->load->view('pemeriksaan_kb/header', $data);
					$this->load->view('pemeriksaan_kb/nav', $data);
					$this->load->view('pemeriksaan_kb/footer');
			}else{
					$this->load->view('404_content');
			}

		}
	}
	
}
