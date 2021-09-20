<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_unit extends CI_Model {

	public $menu 		= 'tbl_menu';
	public $table 		= 'tb_unit';
	//public $employee 	= 'tbl_employee';

	public function __construct(){
        parent::__construct();	
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$no_unit			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_unit				= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		//$this->db->select('gr.*,em.EmployeeName');
		$this->db->from($this->table.' as gr');
		//$this->db->join($this->employee.' as em','em.EmployeeCode=gr.LastUser','inner');

		if($no_unit != ''){
			$this->db->like('gr.ID_UNIT',$no_unit,'RIGHT');
		}

		if($nm_unit != ''){
			$this->db->like('gr.NAMA_UNIT',$nm_unit,'RIGHT');
		}

		if($DateFrom !='' and $DateTo !=''){
			$this->db->where('gr.CREATE_DATA >=',$DateFrom.' 00:00:00');
			$this->db->where('gr.CREATE_DATA <=',$DateTo.' 23:59:59');
		}
		
		$this->db->order_by('gr.ID_UNIT','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}

	function get_list_unit($start_date,$end_date,$ID_UNIT,$NAMA_UNIT){
		$this->db->select('gr.*');
		$this->db->from($this->table.' as gr');

		if($ID_UNIT != ''){
			$this->db->like('gr.ID_UNIT',$ID_UNIT,'RIGHT');
		}

		if($NAMA_UNIT != ''){
			$this->db->like('gr.NAMA_UNIT',$NAMA_UNIT,'RIGHT');
		}

		if($start_date !='' and $end_date !=''){
			$this->db->where('gr.CREATE_DATA >=',$start_date.' 00:00:00');
			$this->db->where('gr.CREATE_DATA <=',$end_date.' 23:59:59');
		}

		if($TransStatus == ''){
			$this->db->where('gr.status',0);
		}else{
			$this->db->where_in('gr.status',$TransStatus);
		}
		
		$this->db->order_by('gr.ID_UNIT','ASC');

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
		$q = $this->db->query("select MAX(RIGHT(ID_UNIT,3)) as code_max from tb_unit");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%03s", $tmp);
            }
        } else {
            $code = "001";
        }

        return "U" . $code;
	}

	function save_data($data_insert){
		$this->db->insert($this->table,$data_insert);
	}

	function update_data($data_update,$id_unit){
		$this->db->update($this->table,$data_update,array('ID_UNIT'=>$id_unit));
	}

	function delete_data($id_unit){
		$this->db->delete($this->table,array('ID_UNIT',$id_unit));
	}
}
