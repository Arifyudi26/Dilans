<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ambil_obat extends CI_Model {

	/*
	Author 		: Sisepus	 
	Date 		: 07-05-2018
	*/
	public $menu 		= 'tbl_menu_farmasi';
	public $table 		= 'tb_farmasi';
	public $detail 		= 'dt_farmasi';
	public $obat 		= 'tb_obat';
	public $employee 	= 'tb_employee';
	public $user        = 'tbl_user';
	public $diagnosa	= 'tb_diagnosa';
	public $unit		= 'tb_unit';
	public $berobat		= 'tb_tu_obat';

	public function __construct(){
        parent::__construct();
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$id_terapi			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien		= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		$this->db->select('gr.*,us.level as lev,dk.NAMA_LENGKAP as nama,un.NAMA_UNIT as unit');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		$this->db->join($this->employee. ' as dk','dk.ID_EMPLOYEE = gr.ID_EMPLOYEE','left');
		$this->db->join($this->unit. ' as un','un.ID_UNIT = gr.ID_UNIT','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_terapi != ''){
			$this->db->like('gr.ID_FARMASI',$id_tarapi,'RIGHT');
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
		
		$this->db->order_by('gr.ID_FARMASI','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	 function m_get_list_pasien($kd_pasien,$nama){
	    
	    $this->db->select('ds.*,us.level as UNIT');
		$this->db->from($this->berobat.' as ds');
		$this->db->join($this->user. ' as us','us.id_user = ds.ID_USER','left');

		if($kd_pasien !=''){
			$this->db->like('ds.KODE_PASIEN',$kd_pasien,'RIGHT');
		}

		if($nama !=''){
			$this->db->like('ds.NAMA_LENGKAP',$nama,'RIGHT');
		}

		$this->db->where('ds.trans_status',0);
		$this->db->order_by('ds.CREATE_DATE','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function m_get_detail_resep($id_resep){

		$query = $this->db->query("SELECT dt.QTY,dt.ID_OBAT,dt.NAMA_OBAT,dt.SATUAN,dt.ATURAN,dt.KETERANGAN
				FROM dt_resep_obat AS dt
				WHERE dt.ID_TU_OBAT='$id_resep'");

		return $query->result_array();
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
		$q = $this->db->query("select MAX(RIGHT(ID_FARMASI,6)) as code_max from tb_farmasi");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%06s", $tmp);
            }
        } else {
            $code = "000001";
        }
        return "FAR" . $code;
	}
	
	 function m_get_list_petugas(){
		$this->db->select('ID_EMPLOYEE,NAMA_LENGKAP,ALAMAT');
		$this->db->from($this->employee);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}
	
	function m_get_list_poli(){
		$this->db->select('ID_UNIT,NAMA_UNIT');
		$this->db->from($this->unit);
		$this->db->where('status',0);
		$this->db->order_by('ID_UNIT','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}

	function m_insert_resep($data_resep){
		$this->db->insert($this->table,$data_resep);
	}

	function m_insert_detail($data_detail){
		$this->db->insert($this->detail,$data_detail);
	}
	
	function m_update_resep($data_resep,$id_resep){
		$this->db->update($this->table,$data_resep,array('ID_FARMASI'=>$id_resep));
	}
	
	function m_ambil_data($data_ambil,$id_poli){
		$this->db->update($this->berobat,$data_ambil,array('ID_TU_OBAT'=>$id_poli));
	}

	function m_suspend_data($data_suspend,$no_transaction){
		$this->db->update($this->table,$data_suspend,array('ID_FARMASI'=>$no_transaction));
	}

	function delete_detail($id_resep){
		$this->db->delete($this->detail,array('ID_FARMASI'=>$id_resep));
	}

	function m_get_list_obat($id_obat,$nama_obat,$satuan){

		$this->db->select('ob.ID_OBAT,ob.NAMA_OBAT,ob.SATUAN,ob.STOK');
		$this->db->from($this->obat.' as ob');

		if($id_obat !=''){
			$this->db->like('ob.ID_OBAT',$id_obat,'RIGHT');
		}

		if($nama_obat !=''){
			$this->db->like('ob.NAMA_OBAT',$nama_obat,'RIGHT');
		}
		
		$this->db->group_by('ob.ID_OBAT');
		$query = $this->db->get()->result_array();

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

	function m_get_group($id_farmasi){
		$this->db->where('ID_FARMASI',$id_farmasi);
		$query = $this->db->get($this->table);

		$row = $query->row();
		return $row;
	}

	function m_get_detail($id_farmasi){
		$this->db->where('ID_FARMASI',$id_farmasi);
		$query = $this->db->get($this->detail)->result_array();

		return $query;
	}

	function get_group_farmasi($id_farmasi){
		$this->db->select('gr.*,us.level as lev,dk.NAMA_LENGKAP as petugas,un.NAMA_UNIT as unit');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->employee.' as dk','dk.ID_EMPLOYEE=gr.ID_EMPLOYEE','left');
		$this->db->join($this->unit.' as un','un.ID_UNIT=gr.ID_UNIT','left');
		$this->db->where('gr.ID_FARMASI',$id_farmasi);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$row = $query->row();
			return $row;
		}else{
			$arr_return = array();
			return $arr_return;
		}
	}

	function get_detail_farmasi($id_farmasi){
		$this->db->select('*');
		$this->db->from($this->detail);
		$this->db->where('ID_FARMASI',$id_farmasi);

		$query = $this->db->get()->result();

		return $query;
	}

	function count_detail_farmasi($id_farmasi){
		$this->db->select('count(*) as count_detail');
		$this->db->from($this->detail);
		$this->db->where('ID_FARMASI',$id_farmasi);

		$query = $this->db->get()->result_array();

		return $query[0]['count_detail'];
	}

}
