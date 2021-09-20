<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_obat extends CI_Model {
	/*

	Author 		: SISEPUS
	Date 		: 20-03-2018

	*/

	public $menu 		= 'tbl_menu';
	public $table 		= 'tb_obat';
	public $user        = 'tbl_user';
	
	public function __construct(){
        parent::__construct();
		
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		
		/*=================================post dari find di kiri====================================================*/
		$param 				= $this->input->get('param');
		$no_obat			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_obat			= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

	    //$this->db->select('gr.*,us.level as level');
		$this->db->from($this->table.' as gr');

		if($no_obat != ''){
			$this->db->like('gr.ID_OBAT',$no_obat,'RIGHT');
		}

		if($nm_obat != ''){
			$this->db->like('gr.NAMA_OBAT',$nm_obat,'RIGHT');
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
		
		$this->db->order_by('gr.ID_OBAT','ASC');

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
	
	function get_list_obat($start_date,$end_date,$id_obat,$nama_obat){
		$this->db->select('gr.*');
		$this->db->from($this->table.' as gr');

		if($id_obat != ''){
			$this->db->like('gr.ID_OBAT',$id_obat,'RIGHT');
		}

		if($nama_obat != ''){
			$this->db->like('gr.NAMA_OBAT',$nama_obat,'RIGHT');
		}

		if($start_date !='' and $end_date !=''){
			$this->db->where('gr.CREATE_DATE >=',$start_date.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$end_date.' 23:59:59');
		}
		
		$this->db->order_by('gr.ID_OBAT','ASC');

		$query = $this->db->get()->result_array();
		$return['list'] 		= $query;
		$return['total_list'] 	= count($query);
		return $return;
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
		$q = $this->db->query("select MAX(RIGHT(ID_OBAT,4)) as code_max from tb_obat");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%04s", $tmp);
            }
        } else {
            $code = "0001";
        }

        return "OB" . $code;
	}

	function m_save_data($data_insert){
		$this->db->insert($this->table,$data_insert);
	}

	function update_data($data,$code){
		$this->db->update($this->table,$data,array('ID_OBAT'=>$code));
	}

	function delete_data($code){
		$this->db->delete($this->table,array('ID_OBAT',$code));
	}	
}