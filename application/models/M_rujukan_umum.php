<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rujukan_umum extends CI_Model {

	/*
	Author 		: Sisepus 
	Date 		: 23-03-2018
	*/
	
	public $table 		= 'tb_rujukan_umum';
	public $menu 		= 'tbl_menu_pmumum';
	public $umum 		= 'tb_poli_umum';
	public $user        = 'tbl_user';
	public $unit		= 'tb_unit';
	public $dokter   	= 'tb_dokter';
	public $diagnosa    = 'tb_diagnosa';

	public function __construct(){
        parent::__construct();
		
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$id_umum			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien		= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		$this->db->select('gr.*,us.level as lev');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_umum != ''){
			$this->db->like('gr.ID_RUJUKAN_UMUM',$id_umum,'RIGHT');
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
		
		$this->db->order_by('gr.ID_RUJUKAN_UMUM','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
    
	 function m_get_list_pasien($kd_pasien,$nama){

		$this->db->from($this->umum.' as ds');
		if($kd_pasien !=''){

			$this->db->like('ds.KODE_PASIEN',$kd_pasien,'RIGHT');
		}

		if($nama !=''){

			$this->db->like('ds.NAMA_LENGKAP',$nama,'RIGHT');
		}
        
		$this->db->where('ds.status',0);
		$this->db->where_in('ds.trans_status',array(0,1));
		$this->db->group_by('ds.ID_POLI_UMUM','ASC');

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
	
	public function kd_pasien($kd){
      $this->db->where('KODE_PASIEN', $kd);
      $result = $this->db->get('tb_poli_umum')->row(); 
    
      return $result; 
       }
	   
	 function m_get_list_dokter(){
		$this->db->select('ID_DOKTER,NAMA_DOKTER,SPESIALIST');
		$this->db->from($this->dokter);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}
	
	function m_get_list_poli(){
		$this->db->select('ID_UNIT,NAMA_UNIT');
		$this->db->from($this->unit);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}
	
	function m_get_list_diagnosa($id_diagnosa,$des_icd){

		$this->db->select('ds.ID_DIAGNOSA,ds.DESKRIPSI_ICD,ds.SUB_ICD');
		$this->db->from($this->diagnosa.' as ds');

		if($id_diagnosa !=''){
			$this->db->like('ds.ID_DIAGNOSA',$id_diagnosa,'RIGHT');
		}

		if($des_icd !=''){
			$this->db->like('ds.DESKRIPSI_ICD',$des_icd,'RIGHT');
		}
		$this->db->group_by('ds.ID_DIAGNOSA');
		$query = $this->db->get()->result_array();

		return $query;
	}


     function create_no_transaction(){
		$q = $this->db->query("select MAX(RIGHT(ID_RUJUKAN_UMUM,5)) as code_max from tb_rujukan_umum");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%05s", $tmp);
            }
        } else {
            $code = "00001";
        }

        return "RJU" . $code;
	}
	
	function m_insert_data($data_rujukan){
		$this->db->insert($this->table,$data_rujukan);
	}
	
	function m_update_data($data_rujukan,$id_rujukan){
		$this->db->update($this->table,$data_rujukan,array('ID_RUJUKAN_UMUM'=>$id_rujukan));
	}
	
	function m_false_data($data_priksa,$poli_umum){
		$this->db->update($this->umum,$data_priksa,array('ID_POLI_UMUM'=>$poli_umum));
	}
    
	function m_suspend_data($data_suspend,$no_transaction){
		$this->db->update($this->table,$data_suspend,array('ID_RUJUKAN_UMUM'=>$no_transaction));
	}

	function delete_data($id_rujukan){
		$this->db->delete($this->table,array('ID_RUJUKAN_UMUM',$id_rujukan));
	}
	
	
	function m_get_group($id_rujukan){
		$this->db->where('ID_RUJUKAN_UMUM',$id_rujukan);
		$query = $this->db->get($this->table);

		$row = $query->row();
		return $row;
	}
	
	 
   
   function get_group_ps($id_rujukan){
		$this->db->select('gr.*,us.level as lev');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->where('gr.ID_RUJUKAN_UMUM',$id_rujukan);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$row = $query->row();
			return $row;
		}else{
			$arr_return = array();
			return $arr_return;
		}

	}

	function count_detail_ps($id_rujukan){
		$this->db->select('count(*) as count_detail');
		$this->db->from($this->table);
		$this->db->where('ID_RUJUKAN_UMUM',$id_rujukan);

		$query = $this->db->get()->result_array();

		return $query[0]['count_detail'];
	}



}
