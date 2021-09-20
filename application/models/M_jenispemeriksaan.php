<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenispemeriksaan extends CI_Model {

	public $menu 		= 'tbl_menu';
	public $table 		= 'tb_jenis_pemeriksaan';
	public $user 	= 'tbl_user';

	public function __construct(){
        parent::__construct();	
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;

		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$no_jenis			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$jenis				= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

	   // $this->db->select('gr.*,us.username');
		$this->db->from($this->table.' as gr');
		//$this->db->join($this->user.' as us','us.id_user=gr.LAST_USER','inner');

		if($no_jenis != ''){
			$this->db->like('gr.ID_JENIS',$no_jenis,'RIGHT');
		}

		if($jenis != ''){
			$this->db->like('gr.JENIS_PEMERIKSAAN',$jenis,'RIGHT');
		}

		if($DateFrom !='' and $DateTo !=''){
			$this->db->where('gr.CREATE_DATE >=',$DateFrom.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$DateTo.' 23:59:59');
		}
		
		$this->db->order_by('gr.ID_JENIS','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}

	function get_list_jenis($start_date,$end_date,$ID_JENIS,$JENIS_PEMERIKSAAN){
		$this->db->select('gr.*');
		$this->db->from($this->table.' as gr');

		if($ID_JENIS != ''){
			$this->db->like('gr.ID_JENIS',$ID_JENIS,'RIGHT');
		}

		if($JENIS_PEMERIKSAAN != ''){
			$this->db->like('gr.JENIS_PEMERIKSAAN',$JENIS_PEMERIKSAAN,'RIGHT');
		}

		if($start_date !='' and $end_date !=''){
			$this->db->where('gr.CREATE_DATE >=',$start_date.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$end_date.' 23:59:59');
		}
				
		$this->db->order_by('gr.CREATE_DATE','DESC');

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
		$q = $this->db->query("select MAX(RIGHT(ID_JENIS,3)) as code_max from tb_jenis_pemeriksaan");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%03s", $tmp);
            }
        } else {
            $code = "001";
        }

        return "JEP" . $code;
	}

	function save_data($data){
		$this->db->insert($this->table,$data);
	}

	function update_data($data,$id_jenis){
		$this->db->update($this->table,$data,array('ID_JENIS'=>$id_jenis));
	}

	function delete_data($id_jenis){
		$this->db->delete($this->table,array('ID_JENIS',$id_jenis));
	}
}
