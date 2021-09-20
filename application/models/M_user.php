<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class M_user extends CI_Model {


	public $menu 		= 'tbl_menu';
	public $table 		= 'tbl_user';
	public $job			= 'tb_joblevel';
	public $employee 	= 'tb_employee';

	public function __construct(){
        parent::__construct();
		
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;

		
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$no_id			        = isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nama	     			= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
	
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		//$this->db->select('gr.*,em.EmployeeName');
		$this->db->from($this->table.' as gr');
		//$this->db->join($this->employee.' as em','em.EmployeeCode=gr.LastUser','inner');

		if($no_id != ''){
			$this->db->like('gr.id_user',$no_id,'RIGHT');
		}

		if($nama != ''){
			$this->db->like('gr.username',$nama,'RIGHT');
		}

		if($DateFrom !='' and $DateTo !=''){
			$this->db->where('gr.CREATE_DATE >=',$DateFrom.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$DateTo.' 23:59:59');
		}
		
		if($TransStatus == ''){
			$this->db->where('gr.status',0);
		}else{
			$this->db->where_in('gr.status',$TransStatus);
		}
		
		$this->db->order_by('gr.id_user','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}

	function get_list_user($start_date,$end_date,$id_user,$username){
		$this->db->select('gr.*');
		$this->db->from($this->table.' as gr');

		if($id_user != ''){
			$this->db->like('gr.id_user',$id_user,'RIGHT');
		}

		if($username != ''){
			$this->db->like('gr.username',$username,'RIGHT');
		}

		if($start_date !='' and $end_date !=''){
			$this->db->where('gr.CreatedDate >=',$start_date.' 00:00:00');
			$this->db->where('gr.CreatedDate <=',$end_date.' 23:59:59');
		}

		// if($TransStatus == ''){
		// 	$this->db->where_in('gr.TransStatus',array(0,2));
		// }else{
		// 	$this->db->where_in('gr.TransStatus',$TransStatus);
		// }
		
		$this->db->order_by('gr.CreatedDate','DESC');

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
		$q = $this->db->query("select MAX(id_user) as code_max from tbl_user");
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
            }
        } 
        return $tmp;
	}
	
	function m_get_list_level($id_job,$job_name){

		$this->db->select('ds.ID_JOB,ds.JOB_NAME,ds.LEVEL,ds.JOB_DESC');
		$this->db->from($this->job.' as ds');

		if($id_job !=''){

			$this->db->like('ds.ID_JOB',$id_job,'RIGHT');
		}

		if($job_name !=''){

			$this->db->like('ds.JOB_NAME',$job_name,'RIGHT');
		}

		//$this->db->where('st.QTY > 0');

		//$this->db->where('it.status',0);
		$this->db->group_by('ds.ID_JOB');

		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function m_get_list_employe($id_employe,$nama){

		$this->db->select('ds.ID_EMPLOYEE,ds.NAMA_LENGKAP,ds.ALAMAT');
		$this->db->from($this->employee.' as ds');

		if($id_employe !=''){

			$this->db->like('ds.ID_EMPLOYEE',$id_employe,'RIGHT');
		}

		if($nama !=''){

			$this->db->like('ds.NAMA_LENGKAP',$nama,'RIGHT');
		}

		//$this->db->where('st.QTY > 0');

		//$this->db->where('it.status',0);
		$this->db->group_by('ds.ID_EMPLOYEE');

		$query = $this->db->get()->result_array();

		return $query;
	}

	

	function save_data($data){
		$this->db->insert($this->table,$data);
	}

	function update_data($data,$code){
		$this->db->update($this->table,$data,array('id_user'=>$code));
	}

	function delete_data($code){
		$this->db->delete($this->table,array('id_user',$code));
	}
}
