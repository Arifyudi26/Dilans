<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gizi_seimbang extends CI_Model {

	/*
	Author 		: Sisepus 
	Date 		: 20-03-2018
	*/

	public $menu 		= 'tbl_menu';
	public $table 		= 'tb_gizi_seimbang';
	public $user        = 'tbl_user';
	
	public function __construct(){
        parent::__construct();
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		
		/*=================================post dari find di kiri====================================================*/
		$param 				= $this->input->get('param');
		$id_gizi			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$pem_gizi			= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

	    $this->db->select('gr.*,us.level as lev');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.ID_USER=gr.id_user','left');
		$this->db->where('gr.ID_GIZI_SMBNG !=','UNTCSTMR');

		if($id_gizi != ''){
			$this->db->like('gr.ID_GIZI_SMBNG',$id_gizi,'RIGHT');
		}

		if($pem_gizi != ''){
			$this->db->like('gr.PEMBERIAN_MAKANAN',$pem_gizi,'RIGHT');
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
		
		$this->db->order_by('gr.ID_GIZI_SMBNG','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function get_list_gizi($start_date,$end_date,$id_gizi,$gizi){
		$this->db->select('gr.*');
		$this->db->from($this->table.' as gr');

		if($id_gizi != ''){
			$this->db->like('gr.ID_GIZI_SMBNG',$id_gizi,'RIGHT');
		}

		if($gizi != ''){
			$this->db->like('gr.PEMBERIAN_MAKANAN',$gizi,'RIGHT');
		}

		if($start_date !='' and $end_date !=''){
			$this->db->where('gr.CREATE_DATE >=',$start_date.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$end_date.' 23:59:59');
		}
		
		$this->db->order_by('gr.ID_GIZI_SMBNG','ASC');

		$query = $this->db->get()->result_array();
		$return['list'] 		= $query;
		$return['total_list'] 	= count($query);
		return $return;
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
		$q = $this->db->query("select MAX(RIGHT(ID_GIZI_SMBNG,4)) as code_max from tb_gizi_seimbang where ID_GIZI_SMBNG!='UNTCSTMR'");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%04s", $tmp);
            }
        } else {
            $code = "0001";
        }

        return "GZS" . $code;
	}

	function save_data($data_insert){
		$this->db->insert($this->table,$data_insert);
	}

	function update_data($data,$code){
		$this->db->update($this->table,$data,array('ID_GIZI_SMBNG'=>$code));
	}

	function delete_data($code){
		$this->db->delete($this->table,array('ID_GIZI_SMBNG',$code));
	}
	
}