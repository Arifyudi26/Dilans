<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kunjungan extends CI_Model {

	/*
	Author 		: Asfani 
	Date 		: 23-03-2018
	*/
	
	public $table 		= 'tb_berobat1';
	public $menu 		= 'tbl_menu_daftar';
	public $pasien 		= 'tbl_pasien';
	public $user        = 'tbl_user';
	public $unit        = 'tb_unit';
	public $dokter      = 'tb_dokter';
	public $priksa		= 'tb_nama_pemeriksaan1';
	public $jenis 	    = 'tb_jenis_pemeriksaan';


	public function __construct(){
        parent::__construct();
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$id_kunjungan			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien		= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		$this->db->select('gr.*,us.level as lev,dk.NAMA_DOKTER as dokter,un.NAMA_UNIT as poli');
		$this->db->from($this->table.' as gr');
		//$this->db->join($this->pasien.' as ps','ps.kd_pasien=gr.KODE_PASIEN','left');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		$this->db->join($this->dokter. ' as dk','dk.ID_DOKTER = gr.ID_DOKTER','left');
		$this->db->join($this->unit. ' as un','un.ID_UNIT = gr.ID_UNIT','left');

		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_kunjungan != ''){
			$this->db->like('gr.ID_BEROBAT',$id_kunjungan,'RIGHT');
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
		
		$this->db->order_by('gr.ID_BEROBAT','DESC');

		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function m_get_list_priksa($id_priksa,$priksa){

		$this->db->select('ds.*,jns.JENIS_PEMERIKSAAN as jenis,ds.ID_NAMA_PEMERIKSAAN,ds.NAMA_PEMERIKSAAN');
		$this->db->from($this->priksa.' as ds');
		$this->db->join($this->jenis.' as jns','jns.ID_JENIS=ds.ID_JENIS','left');

		if($id_priksa !=''){

			$this->db->like('ds.ID_NAMA_PEMERIKSAAN',$id_priksa,'RIGHT');
		}

		if($priksa !=''){

			$this->db->like('ds.NAMA_PEMERIKSAAN',$priksa,'RIGHT');
		}

		$this->db->group_by('ds.ID_NAMA_PEMERIKSAAN');

		$query = $this->db->get()->result_array();

		return $query;
	}
	
	 function m_get_list_pasien($kd_pasien,$nama){
		$this->db->from($this->pasien.' as ds');

		if($kd_pasien !=''){
			$this->db->like('ds.kd_pasien',$kd_pasien,'RIGHT');
		}

		if($nama !=''){

			$this->db->like('ds.NAMA_LENGKAP',$nama,'RIGHT');
		}

		$this->db->group_by('ds.kd_pasien');

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
		$q = $this->db->query("select MAX(RIGHT(ID_BEROBAT,5)) as code_max from tb_berobat1");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%05s", $tmp);
            }
        } else {
            $code = "00001";
        }

        return "KJ" . $code;
	}
	
	function m_insert_data($data_kunjungan){
		$this->db->insert($this->table,$data_kunjungan);
	}
	
   function save_data($data,$tbl){
		$this->db->insert($tbl,$data);
	}
	
	function m_update_group($data_group,$id_kunjungan){
		$this->db->update($this->table,$data_group,array('ID_BEROBAT'=>$id_kunjungan));
	}
	
    function m_suspend_data($data_suspend,$no_transaction){
		$this->db->update($this->table,$data_suspend,array('ID_BEROBAT'=>$no_transaction));
	}

	function delete_data($id_kunjungan){
		$this->db->delete($this->table,array('ID_BEROBAT',$id_kunjungan));
	}

	function m_get_list_unit(){
		$this->db->select('ID_UNIT,NAMA_UNIT');
		$this->db->from($this->unit);
		$this->db->where('status',0);

        $this->db->order_by('ID_UNIT','ASC');
		$query = $this->db->get()->result_array();

		return $query;
	}

	function m_get_group($id_kunjungan){
		$this->db->where('ID_BEROBAT',$id_kunjungan);
		$query = $this->db->get($this->table);

		$row = $query->row();

		return $row;
	}

	function m_get_list_dokter(){
		$this->db->select('ID_DOKTER,NAMA_DOKTER,SPESIALIST');
		$this->db->from($this->dokter);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}
	
}
