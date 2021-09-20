<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar extends CI_Model {

	/*
	Author 		: Asfani 
	Date 		: 20-03-2018
	*/

	public $menu 		= 'tbl_menu_daftar';
	public $table 		= 'tbl_pasien';
	public $user        = 'tbl_user';
	
	public function __construct(){
        parent::__construct();
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		
		/*=================================post dari find di kiri====================================================*/
		$param 				= $this->input->get('param');
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien			= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

	    $this->db->select('gr.*,us.level as lev');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->where('gr.kd_pasien !=','UNTCSTMR');

		if($no_pasien != ''){
			$this->db->like('gr.kd_pasien',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
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
		
		$this->db->order_by('gr.kd_pasien','ASC');

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
		$q = $this->db->query("select MAX(RIGHT(kd_pasien,6)) as code_max from tbl_pasien where kd_pasien!='UNTCSTMR'");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%06s", $tmp);
            }
        } else {
            $code = "000001";
        }
        return "17" . $code;
	}

	function save_data($data){
		$this->db->insert($this->table,$data);
	}

	function update_data($data,$code){
		$this->db->update($this->table,$data,array('kd_pasien'=>$code));
	}

	function delete_data($code){
		$this->db->delete($this->table,array('kd_pasien',$code));
	}
	
}