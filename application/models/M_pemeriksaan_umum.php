<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemeriksaan_umum extends CI_Model {

	/*
	Author 		: sisepus
	Date 		: 23-03-2018
	*/
	
	public $table 		= 'tb_pemeriksaan_umum';
	public $menu 		= 'tbl_menu_pemeriksaan';
	public $pasien 		= 'tb_berobat1';
	public $user        = 'tbl_user';
	public $unit		= 'tb_unit';

	public function __construct(){
        parent::__construct();
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$id_pemeriksaan			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien		= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		$this->db->select('gr.*,us.level as lev,un.NAMA_UNIT as unit');
		$this->db->from($this->table.' as gr');
		//$this->db->join($this->pasien.' as ps','ps.kd_pasien=gr.KODE_PASIEN','left');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
	    $this->db->join($this->unit. ' as un','un.ID_UNIT = gr.ID_UNIT','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_pemeriksaan != ''){
			$this->db->like('gr.ID_PEMERIKSAAN',$id_pemeriksaan,'RIGHT');
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
		
		$this->db->order_by('gr.ID_PEMERIKSAAN','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function m_get_list_unit(){
		$this->db->select('ID_UNIT,NAMA_UNIT');
		$this->db->from($this->unit);
		$this->db->where('status',0);

        $this->db->order_by('ID_UNIT','ASC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
  function m_get_list_pasien($kd_pasien,$nama){

		$this->db->select('ds.ID_BEROBAT,ds.KODE_PASIEN,ds.NAMA_LENGKAP,ds.JENIS_KELAMIN,ds.UMUR,ds.ALAMAT,ds.NO_BPJS');
		$this->db->from($this->pasien.' as ds');

		if($kd_pasien !=''){

			$this->db->like('ds.KODE_PASIEN',$kd_pasien,'RIGHT');
		}

		if($nama !=''){

			$this->db->like('ds.NAMA_LENGKAP',$nama,'RIGHT');
		}
		
		$this->db->where_in('ds.ID_UNIT',array('U001','U002'));
		$this->db->where('ds.trans_status',0);
		$this->db->where('ds.status',0);
		$this->db->group_by('ds.ID_BEROBAT','ASC');

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
      $this->db->where('kd_pasien', $kd);
      $result = $this->db->get('tbl_pasien')->row(); 
    
      return $result; 
       }

     function create_no_transaction(){
		$q = $this->db->query("select MAX(RIGHT(ID_PEMERIKSAAN,5)) as code_max from tb_pemeriksaan_umum");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%05s", $tmp);
            }
        } else {
            $code = "00001";
        }

        return "PR" . $code;
	}
	
	function m_insert_data($data){
		$this->db->insert($this->table,$data);
	}

	function m_update_group($data_pemeriksaan,$id_pemeriksaan){
		$this->db->update($this->table,$data_pemeriksaan,array('ID_PEMERIKSAAN'=>$id_pemeriksaan));
	}
	
	function m_false_data($data_priksa,$id_berobat){
		$this->db->update($this->pasien,$data_priksa,array('ID_BEROBAT'=>$id_berobat));
	}


    function m_suspend_data($data_suspend,$no_transaction){
		$this->db->update($this->table,$data_suspend,array('ID_PEMERIKSAAN'=>$no_transaction));
	}
    
	function delete_data($id_pemeriksaan){
		$this->db->delete($this->table,array('ID_PEMERIKSAAN',$id_pemeriksaan));
	}
	
	
	function m_get_group($id_pemeriksaan){
		$this->db->where('ID_PEMERIKSAAN',$id_pemeriksaan);
		$query = $this->db->get($this->table);

		$row = $query->row();

		return $row;
	}
	
}
