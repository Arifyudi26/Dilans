<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasil_lab extends CI_Model {

	/*
	Author 		: Sisepus	 
	Date 		: 18-04-2018
	*/
	public $menu 		= 'tbl_menu_lab';
	public $table 		= 'tb_hasil_lab';
	public $detail 		= 'dt_hasil_lab';
	public $dokter 		= 'tb_dokter';
	public $user        = 'tbl_user';
	public $lab			= 'tb_cek_labo';
	public $daftar		= 'tb_daftar_lab';


	public function __construct(){
        parent::__construct();
		
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$id_hasil			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
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

		if($id_hasil != ''){
			$this->db->like('gr.ID_HASIL_LAB',$id_hasil,'RIGHT');
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
		
		$this->db->order_by('gr.ID_HASIL_LAB','ASC');
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
		$this->db->where('ds.trans_status',0);
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
	
	public function kd_pasien($kd){
      $this->db->where('KODE_PASIEN', $kd);
      $result = $this->db->get('tb_daftar_lab')->row(); 
    
      return $result; 
       }
 
    function create_no_transaction(){
		$q = $this->db->query("select MAX(RIGHT(ID_HASIL_LAB,6)) as code_max from tb_hasil_lab");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%06s", $tmp);
            }
        } else {
            $code = "000001";
        }
        return "HLB" . $code;
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

	function m_update_group($data_group,$id_hasil){
		$this->db->update($this->table,$data_group,array('ID_HASIL_LAB'=>$id_hasil));
	}
	
	function m_false_data($data_priksa,$id_daftar){
		$this->db->update($this->daftar,$data_priksa,array('ID_DAFTAR_LAB'=>$id_daftar));
	}
	
	function m_suspend_data($data_suspend,$no_transaction){
		$this->db->update($this->table,$data_suspend,array('ID_HASIL_LAB'=>$no_transaction));
	}

	function delete_detail($id_hasil_lab){
		$this->db->delete($this->detail,array('ID_HASIL_LAB'=>$id_hasil_lab));
	}
	
	function m_get_list_lab($id_cek,$pemeriksaan){
		$this->db->select('ob.ID_CEK_LAB,ob.PEMERIKSAAN_LAB,,ob.PRIKSA,ob.NILAI_NORMAL,ob.SATUAN');
		$this->db->from($this->lab.' as ob');

		if($id_cek !=''){
			$this->db->like('ob.ID_CEK_LAB',$id_cek,'RIGHT');
		}

		if($pemeriksaan !=''){
			$this->db->like('ob.PEMERIKSAAN_LAB',$pemeriksaan,'RIGHT');
		}

		$this->db->group_by('ob.ID_CEK_LAB');
		$query = $this->db->get()->result_array();

		return $query;
	}

	function m_get_group($id_hasil_lab){
		$this->db->where('ID_HASIL_LAB',$id_hasil_lab);
		$query = $this->db->get($this->table);
		$row = $query->row();

		return $row;
	}

	function m_get_detail($id_hasil_lab){
		$this->db->where('ID_HASIL_LAB',$id_hasil_lab);
		$query = $this->db->get($this->detail)->result_array();

		return $query;
	}

	function get_group_lab($id_hasil_lab){
		$this->db->select('gr.*,us.level as lev,dk.NAMA_DOKTER as dokter');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->where('gr.ID_HASIL_LAB',$id_hasil_lab);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$row = $query->row();
			return $row;
		}else{
			$arr_return = array();
			return $arr_return;
		}
	}

	function get_detail_lab($id_hasil_lab){
		$this->db->select('*');
		$this->db->from($this->detail);
		$this->db->where('ID_HASIL_LAB',$id_hasil_lab);

		$query = $this->db->get()->result();

		return $query;
	}

	function count_detail_lab($id_hasil_lab){
		$this->db->select('count(*) as count_detail');
		$this->db->from($this->detail);
		$this->db->where('ID_HASIL_LAB',$id_hasil_lab);

		$query = $this->db->get()->result_array();

		return $query[0]['count_detail'];
	}

}
