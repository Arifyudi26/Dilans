<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu_lab extends CI_Model {


	public $menu 		= 'tbl_menu_lab';

	public function __construct(){
        parent::__construct();
		
	}

	function get_menu($menuID){
		$this->db->select('*');
		$this->db->from($this->menu);
		$this->db->where('menuID',$menuID);

		$query = $this->db->get();
		$row   = $query->row();

		return $row;
	}
}
