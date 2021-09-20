<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_index_farmasi extends CI_Model {

	public $menu 		= 'tbl_menu_farmasi';
	public $privillage 	= 'tbl_privillage';

	public function __construct(){
        parent::__construct();
		
	}

	function get_menu_group(){
		$this->db->select('*');
		$this->db->from($this->menu.' as mn');
		$this->db->where('mn.MenuLevel',0);
		$this->db->order_by('mn.MenuOrder','ASC');
		$query = $this->db->get()->result();

		return $query;
	}

	function get_menu_child($usercode){
		$this->db->select('mn.*,COALESCE(gr.View,0) as View');
		$this->db->from($this->menu.' as mn');
		$this->db->join($this->privillage.' as gr','gr.MenuID=mn.MenuID and gr.UserCode="'.$usercode.'"','left');
		$this->db->where('mn.MenuLevel !=',0);
		$this->db->order_by('mn.ParentID,mn.MenuOrder','ASC');
		$query = $this->db->get()->result();

		return $query;
	}

	function get_privillage($usercode){
		$this->db->select('gr.MenuID,gr.View');
		$this->db->from($this->privillage.' as gr');
		$this->db->where('gr.UserCode',$usercode);
		$query = $this->db->get()->result();

		return $query;
	} 
}
