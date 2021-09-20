<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cek_lab extends CI_Model {

	/*
	Author 		: Sisepus 
	Date 		: 20-03-2018
	*/

	public $menu 		= 'tbl_menu';
	public $table 		= 'tb_cek_labo';
	public $lab			= 'tb_data_lab';
	public $user        = 'tbl_user';
	
	public function __construct(){
        parent::__construct();
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 				= $this->input->get('param');
		$id_cek_lab			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$cek_lab			= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

	    $this->db->select('gr.*,us.level as lev');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.ID_USER=gr.id_user','left');
		$this->db->where('gr.ID_CEK_LAB !=','UNTCSTMR');

		if($id_cek_lab != ''){
			$this->db->like('gr.ID_CEK_LAB',$id_cek_lab,'RIGHT');
		}

		if($cek_lab != ''){
			$this->db->like('gr.PEMERIKSAAN_LAB',$cek_lab,'RIGHT');
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
		
		$this->db->order_by('gr.ID_CEK_LAB','ASC');

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
		$q = $this->db->query("select MAX(RIGHT(ID_CEK_LAB,4)) as code_max from tb_cek_labo where ID_CEK_LAB!='UNTCSTMR'");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%04s", $tmp);
            }
        } else {
            $code = "0001";
        }

        return "CK" . $code;
	}
	
	
	function m_get_list_lab($id_dt_lab,$nama){

		$this->db->select('ds.ID_DT_LAB,ds.NAMA_PEMERIKSAAN,ds.TARIF');
		$this->db->from($this->lab.' as ds');

		if($id_dt_lab !=''){

			$this->db->like('ds.ID_DT_LAB',$id_dt_lab,'RIGHT');
		}

		if($nama !=''){

			$this->db->like('ds.NAMA_PEMERIKSAAN',$nama,'RIGHT');
		}

		$this->db->group_by('ds.ID_DT_LAB');

		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function save_data($data_lab){
		$this->db->insert($this->table,$data_lab);
	}

	function update_data($data,$code){
		$this->db->update($this->table,$data,array('ID_CEK_LAB'=>$code));
	}

	function delete_data($code){
		$this->db->delete($this->table,array('ID_CEK_LAB',$code));
	}
	
}