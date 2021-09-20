<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokter extends CI_Model {

	public $menu 		= 'tbl_menu';
	public $dokter 		= 'tb_dokter';
	public $user 	    = 'tbl_user';

	public function __construct(){
        parent::__construct();
		
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$no_dokter			    = isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_dokter				= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		$this->db->select('gr.*,us.level as lev');
		$this->db->from($this->dokter.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->where('gr.status',0);

		if($no_dokter != ''){
			$this->db->like('gr.ID_DOKTER',$no_dokter,'RIGHT');
		}

		if($nm_dokter != ''){
			$this->db->like('gr.NAMA_DOKTER',$nm_dokter,'RIGHT');
		}

		if($DateFrom !='' and $DateTo !=''){
			$this->db->where('gr.CREATE_DATE >=',$DateFrom.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$DateTo.' 23:59:59');
		}
		
		$this->db->order_by('gr.ID_DOKTER','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}

	function get_list_dokter($start_date,$end_date,$id_dokter,$nm_dokter){
		$this->db->select('gr.*');
		$this->db->from($this->dokter.' as gr');

		if($id_dokter != ''){
			$this->db->like('gr.ID_DOKTER',$id_dokter,'RIGHT');
		}

		if($nm_dokter != ''){
			$this->db->like('gr.NAMA_DOKTER',$nm_dokter,'RIGHT');
		}

		if($start_date !='' and $end_date !=''){
			$this->db->where('gr.CREATE_DATE >=',$start_date.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$end_date.' 23:59:59');
		}
		
		$this->db->order_by('gr.ID_DOKTER','ASC');

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
		$q = $this->db->query("select MAX(RIGHT(ID_DOKTER,4)) as code_max from tb_dokter");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%04s", $tmp);
            }
        } else {
            $code = "0001";
        }

        return "DK" . $code;
	}

	function save_data($data){
		$this->db->insert($this->dokter,$data);
	}

	function update_data($data,$code){
		$this->db->update($this->dokter,$data,array('ID_DOKTER'=>$code));
	}

	function delete_data($code){
		$this->db->delete($this->dokter,array('ID_DOKTER',$code));
	}
}
