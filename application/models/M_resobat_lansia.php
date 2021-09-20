<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_resobat_lansia extends CI_Model {

	/*

	Author 		: Sisepus	 
	Date 		: 18-04-2018

	*/
	public $menu 		= 'tbl_menu_plansia';
	public $table 		= 'tb_resobat_lansia';
	public $detail 		= 'dt_resobat_lansia';
	public $obat 		= 'tb_obat';
	public $dokter 		= 'tb_dokter';
	public $user        = 'tbl_user';


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

		if($id_terapi != ''){
			$this->db->like('gr.ID_RESOB_LANSIA',$id_tarapi,'RIGHT');
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
		
		$this->db->order_by('gr.ID_RESOB_LANSIA','ASC');

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
      $result = $this->db->get('tb_poli_lansia')->row(); 
    
      return $result; 
       }
 
    function create_no_transaction(){
		$q = $this->db->query("select MAX(RIGHT(ID_RESOB_LANSIA,5)) as code_max from tb_resobat_lansia");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%05s", $tmp);
            }
        } else {
            $code = "00001";
        }

        return "ROL" . $code;
	}
	
	 function m_get_list_dokter(){
		$this->db->select('ID_DOKTER,NAMA_DOKTER,SPESIALIST');
		$this->db->from($this->dokter);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}
	

	function m_insert_resep($data_resep){
		$this->db->insert($this->table,$data_resep);
	}

	function m_insert_detail($data_detail){
		$this->db->insert($this->detail,$data_detail);
		
	}

	function m_update_resep($data_resep,$id_resep){
		$this->db->update($this->table,$data_resep,array('ID_RESOB_LANSIA'=>$id_resep));
	}

	

	function m_suspend_data($data_suspend,$no_transaction){
		$this->db->update($this->table,$data_suspend,array('PQNumber'=>$no_transaction));
	}

	function delete_detail($id_resep){
		$this->db->delete($this->detail,array('ID_RESOB_LANSIA'=>$id_resep));
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

	

	function m_get_group($id_resob_lansia){
		$this->db->where('ID_RESOB_LANSIA',$id_resob_lansia);
		$query = $this->db->get($this->table);

		$row = $query->row();

		return $row;
	}

	function m_get_detail($id_resob_lansia){
		$this->db->where('ID_RESOB_LANSIA',$id_resob_lansia);
		$query = $this->db->get($this->detail)->result_array();

		return $query;
	}

	function get_group_resep($id_resob_lansia){
		$this->db->select('gr.*,us.level as lev,dk.NAMA_DOKTER as dokter');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->where('gr.ID_RESOB_LANSIA',$id_resob_lansia);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$row = $query->row();
			return $row;
		}else{
			$arr_return = array();
			return $arr_return;
		}

	}

	function get_detail_resep($id_resob_lansia){
		$this->db->select('*');
		$this->db->from($this->detail);
		$this->db->where('ID_RESOB_LANSIA',$id_resob_lansia);

		$query = $this->db->get()->result();

		return $query;
	}

	function count_detail_resep($id_resob_lansia){
		$this->db->select('count(*) as count_detail');
		$this->db->from($this->detail);
		$this->db->where('ID_RESOB_LANSIA',$id_resob_lansia);

		$query = $this->db->get()->result_array();

		return $query[0]['count_detail'];
	}

}
