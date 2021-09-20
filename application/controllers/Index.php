<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('m_index');
		
	}

	public function index()
	{
		/*===================== get privillage ===========================*/
		$usercode 			= $this->session->userdata('usercode');

		//$data['privillage'] = $this->m_index->get_privillage($usercode);

		/*====================== get menu dengan level = 0 ================*/
		$menu_group 		= $this->m_index->get_menu_group();

		/*====================== get menu dengan level != 0 ================*/
		$child_menu 		= $this->m_index->get_menu_child($usercode);

		$data['menu_group'] = $menu_group;
		$data['child_menu'] = $child_menu;

		$this->load->view('global/header');
		$this->load->view('global/nav',$data);
		$this->load->view('global/footer');
	}

}
