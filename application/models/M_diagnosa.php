<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_diagnosa extends CI_Model {

	/*
	Author 		: Asfani 
	Date 		: 20-03-2018
	*/

	public $menu 		= 'tbl_menu';
	public $table 		= 'tb_diagnosa';
	public $user        = 'tbl_user';
	
	public function __construct(){
        parent::__construct();	
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri================================================*/
		$param 				= $this->input->get('param');
		$no_diagnosa			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_diagnosa			= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

	    //$this->db->select('gr.*,us.level as level');
		$this->db->from($this->table.' as gr');
		$this->db->where('gr.ID_DIAGNOSA !=','UNTCSTMR');

		if($no_diagnosa != ''){
			$this->db->like('gr.ID_DIAGNOSA',$no_diagnosa,'RIGHT');
		}

		if($nm_diagnosa != ''){
			$this->db->like('gr.DESKRIPSI_ICD',$nm_diagnosa,'RIGHT');
		}

		if($DateFrom !='' and $DateTo !=''){
			$this->db->where('ge.CREATE_DATE >=',$DateFrom.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$DateTo.' 23:59:59');
		}

		if($TransStatus == ''){
			$this->db->where('gr.status',0);
		}else{
			$this->db->where_in('gr.status',$TransStatus);
		}
		
		$this->db->order_by('gr.ID_DIAGNOSA','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}

	function get_menu_group(){
		$this->db->select('*');
		$this->db->from($this->menu.' as mn');
		$this->db->where('mn.MenuLevel',0);
		$this->db->order_by('mn.MenuOrder','ASC');
		$query = $this->db->get()->result();

		return $query;
	}

	function get_menu_child(){
		$this->db->select('*');
		$this->db->from($this->menu.' as mn');
		$this->db->where('mn.MenuLevel !=',0);
		$this->db->order_by('mn.ParentID,mn.MenuOrder','ASC');
		$query = $this->db->get()->result();

		return $query;
	}

	function create_no_transaction(){
		$q = $this->db->query("select MAX(RIGHT(ID_DIAGNOSA,4)) as code_max from tb_diagnosa where ID_DIAGNOSA!='UNTCSTMR'");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%04s", $tmp);
            }
        } else {
            $code = "0001";
        }

        return "AC" . $code;
	}

	function save_data($data){
		$this->db->insert($this->table,$data);
	}

	function update_data($data,$code){
		$this->db->update($this->table,$data,array('ID_DIAGNOSA'=>$code));
	}

	function delete_data($code){
		$this->db->delete($this->table,array('ID_DIAGNOSA',$code));
	}
	
}