<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_namapemeriksaan extends CI_Model {

	/*
	Author 		: Sisepus
	Date 		: 20-03-2018
	*/

	public $menu 		= 'tbl_menu';
	public $table 		= 'tb_nama_pemeriksaan1';
	public $jenis 	    = 'tb_jenis_pemeriksaan';
	public $unit        = 'tb_unit';
	
	public function __construct(){
        parent::__construct();
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;

		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$no_nama			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pemeriksaan				= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

	    $this->db->select('gr.*,jns.JENIS_PEMERIKSAAN as jenis,un.NAMA_UNIT as unit');
		$this->db->from($this->table.' as gr');
		//$this->db->join($this->user.' as us','us.id_user=gr.LAST_USER','inner');
		$this->db->join($this->jenis.' as jns','jns.ID_JENIS=gr.ID_JENIS','left');
		$this->db->join($this->unit.' as un','un.ID_UNIT=gr.ID_UNIT','left');
		$this->db->where('gr.ID_NAMA_PEMERIKSAAN !=','UNTCSTMR');

		if($no_nama != ''){
			$this->db->like('gr.ID_NAMA_PEMERIKSAAN',$no_nama,'RIGHT');
		}

		if($nm_pemeriksaan != ''){
			$this->db->like('gr.NAMA_PEMERIKSAAN',$nm_pemeriksaan,'RIGHT');
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
		
		$this->db->order_by('gr.ID_NAMA_PEMERIKSAAN','ASC');

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
		$q = $this->db->query("select MAX(RIGHT(ID_NAMA_PEMERIKSAAN,3)) as code_max from tb_nama_pemeriksaan1 where ID_NAMA_PEMERIKSAAN!='UNTCSTMR'");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%03s", $tmp);
            }
        } else {
            $code = "001";
        }

        return "PE" . $code;
	}

	function save_data($data){
		$this->db->insert($this->table,$data);
	}

	function update_data($data,$code){
		$this->db->update($this->table,$data,array('ID_NAMA_PEMERIKSAAN'=>$code));
	}

	function delete_data($code){
		$this->db->delete($this->table,array('ID_NAMA_PEMERIKSAAN',$code));
	}
	
	function m_get_list_unit(){
		$this->db->select('ID_UNIT,NAMA_UNIT');
		$this->db->from($this->unit);
		$this->db->where('Status',0);
        
		$this->db->order_by('ID_UNIT','ASC');
		$query = $this->db->get()->result_array();
		return $query;
		
	}

	function m_get_list_jenis(){
		$this->db->select('ID_JENIS,JENIS_PEMERIKSAAN');
		$this->db->from($this->jenis);
		$this->db->where('status',0);
		
		$this->db->order_by('ID_JENIS','ASC');
		$query = $this->db->get()->result_array();
		return $query;
	}
}