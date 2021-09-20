<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bayar_lab extends CI_Model {

	/*
 	Author 		: Sisepus	 
	Date 		: 18-04-2018
	*/
	
	public $menu 		= 'tbl_menu_lab';
	public $table 		= 'tb_pembayaran_lab';
	public $detail 		= 'dt_pembayaran_lab';
	public $dokter 		= 'tb_dokter';
	public $user        = 'tbl_user';
	public $lab			= 'tb_data_lab';
	public $daftar		= 'tb_daftar_lab';

	public function __construct(){
        parent::__construct();
		
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$id_bayar			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien		= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		$this->db->select('gr.*,us.level as lev,dk.NAMA_DOKTER as nama');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		$this->db->join($this->dokter. ' as dk','dk.ID_DOKTER = gr.ID_DOKTER','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_bayar != ''){
			$this->db->like('gr.ID_PEMBAYARAN_LAB',$id_bayar,'RIGHT');
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
		
		$this->db->order_by('gr.ID_PEMBAYARAN_LAB','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	 function m_get_list_pasien($kd_pasien,$nama){
		$this->db->from($this->daftar.' as ds');

		if($kd_pasien !=''){
			$this->db->like('ds.KODE_PASIEN',$kd_pasien,'RIGHT');
		}

		if($nama !=''){
			$this->db->like('ds.NAMA_LENGKAP',$nama,'RIGHT');
		}

		$this->db->where('ds.status',0);
		$this->db->where('ds.trans_status',1);
		$this->db->order_by('ds.CREATE_DATE','ASC');
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
		$q = $this->db->query("select MAX(RIGHT(ID_PEMBAYARAN_LAB,6)) as code_max from tb_pembayaran_lab");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%06s", $tmp);
            }
        } else {
            $code = "000001";
        }
        return "PBL" . $code;
	}
	
	 function m_get_list_dokter(){
		$this->db->select('ID_DOKTER,NAMA_DOKTER,SPESIALIST');
		$this->db->from($this->dokter);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}
	
	function m_insert_lab($data_lab){
		$this->db->insert($this->table,$data_lab);
	}

	function m_insert_detail($data_detail){
		$this->db->insert($this->detail,$data_detail);
	}
	
	function inset_history_obat($data_history){
		$this->db->insert($this->history,$data_history);
	}

	function save_data($data,$tbl){
		$this->db->insert($tbl,$data);
	}

	function m_update_group($data_group,$id_bayar){
		$this->db->update($this->table,$data_group,array('ID_PEMBAYARAN_LAB'=>$id_bayar));
	}

    function m_false_data($data_priksa,$id_daftar){
		$this->db->update($this->daftar,$data_priksa,array('ID_DAFTAR_LAB'=>$id_daftar));
	}
    
	function m_suspend_data($data_suspend,$no_transaction){
		$this->db->update($this->table,$data_suspend,array('ID_PEMBAYARAN_LAB'=>$no_transaction));
	}

	function delete_detail($id_bayar){
		$this->db->delete($this->detail,array('ID_PEMBAYARAN_LAB'=>$id_bayar));
	}
	
	function m_get_list_lab($id_data,$pemeriksaan){

		$this->db->select('ob.ID_DT_LAB,ob.NAMA_PEMERIKSAAN,ob.TARIF,ob.KETERANGAN');
		$this->db->from($this->lab.' as ob');

		if($id_data !=''){
			$this->db->like('ob.ID_DT_LAB',$id_data,'RIGHT');
		}

		if($pemeriksaan !=''){
			$this->db->like('ob.NAMA_PEMERIKSAAN',$pemeriksaan,'RIGHT');
		}

		
		$this->db->group_by('ob.ID_DT_LAB');
		$query = $this->db->get()->result_array();

		return $query;
	}


	function m_get_group($id_bayar_lab){
		$this->db->where('ID_PEMBAYARAN_LAB',$id_bayar_lab);
		$query = $this->db->get($this->table);

		$row = $query->row();

		return $row;
	}

	function m_get_detail($id_bayar_lab){
		$this->db->where('ID_PEMBAYARAN_LAB',$id_bayar_lab);
		$query = $this->db->get($this->detail)->result_array();

		return $query;
	}

	function get_group_lab($id_bayar_lab){
		$this->db->select('gr.*,us.level as lev,dk.NAMA_DOKTER as dokter');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->where('gr.ID_PEMBAYARAN_LAB',$id_bayar_lab);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$row = $query->row();
			return $row;
		}else{
			$arr_return = array();
			return $arr_return;
		}

	}

	function get_detail_lab($id_bayar_lab){
		$this->db->select('*');
		$this->db->from($this->detail);
		$this->db->where('ID_PEMBAYARAN_LAB',$id_bayar_lab);

		$query = $this->db->get()->result();

		return $query;
	}

	function count_detail_lab($id_bayar_lab){
		$this->db->select('count(*) as count_detail');
		$this->db->from($this->detail);
		$this->db->where('ID_PEMBAYARAN_LAB',$id_bayar_lab);

		$query = $this->db->get()->result_array();

		return $query[0]['count_detail'];
	}

}
