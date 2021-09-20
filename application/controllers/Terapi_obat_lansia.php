<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terapi_obat_lansia extends CI_Controller {

	/*

	Author 		: Sisepus 
	Date 		: 15-4-2018

	*/

	public $menuID 	= 7;
	public $name 	= 'Terapi Obat';

	public function __construct(){
        parent::__construct();
		$this->load->model('M_terobat_lansia');
		$this->load->model('M_menu_poli_lansia');
		$this->load->helper('message_helper');
		$this->load->helper('convert_date_helper');
		
	}

	public function ajax(){
		$get_list = $this->M_terobat_lansia->get_all();
		//echo $this->db->last_query();
		echo json_encode($get_list);
	}
	
	public function index(){

		$data['menu_link'] 	= $this->M_menu_poli_lansia->get_menu($this->menuID);
		$data['date_now'] 	= date('Y-m-d');

		$this->load->view('poli_lansia/header1');
		$this->load->view('poli_lansia/data_terapi_obat',$data);
	}

}
 