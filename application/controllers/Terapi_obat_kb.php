<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terapi_obat_kb extends CI_Controller {

	/*

	Author 		: Sisepus 
	Date 		: 15-4-2018

	*/

	public $menuID 	= 7;
	public $name 	= 'Terapi Obat';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_terobat_kb');
		$this->load->model('M_menu_poli_kb');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
		
	}

	public function ajax(){
		$get_list = $this->M_terobat_kb->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_list);
	}
	
	public function index(){

		$data['menu_link'] 	= $this->M_menu_poli_kb->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('poli_kb/header1');
		$this->load->view('poli_kb/data_terapi_obat',$data);
	}

}
 