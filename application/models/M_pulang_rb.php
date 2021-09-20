<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pulang_rb extends CI_Model {

	/*
	Author 		: Sisepus	 
	Date 		: 18-04-2018
	*/
	public $menu 		= 'tbl_menu_rb';
	public $table 		= 'tb_pulang_rb';
	public $detail 		= 'dt_pulang_rb';
	public $employe 	= 'tb_employee';
	public $user        = 'tbl_user';
	public $kamar		= 'tb_kamar';
	public $partus		= 'tb_pertlg_partus';
	public $ibu			= 'tb_perawatan_ibu';
	public $bayi		= 'tb_perawatan_bayi';
	public $bersalin	= 'tb_tindakan_bersalin';
	public $gizi		= 'tb_gizi_seimbang';
	public $daftar		= 'tb_pendaftaran_rb';


	public function __construct(){
        parent::__construct();
		
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$id_pulang			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien		= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		$this->db->select('gr.*,us.level as lev,em.NAMA_LENGKAP as nama');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		$this->db->join($this->employe. ' as em','em.ID_EMPLOYEE = gr.ID_EMPLOYEE','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_pulang != ''){
			$this->db->like('gr.ID_PULANG_RB',$id_pulang,'RIGHT');
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
		
		$this->db->order_by('gr.ID_PULANG_RB','DESC');

		$query = $this->db->get()->result_array();

		return $query;
	}
	
	   function m_get_list_pasien($kd_pasien,$nama){

		$this->db->select('br.ID_DAFTAR_RB,br.KODE_PASIEN,br.NAMA_LENGKAP,br.UMUR,br.ALAMAT,br.NO_BPJS');
		$this->db->from($this->daftar.' as br');

		if($kd_pasien !=''){
			$this->db->like('br.KODE_PASIEN',$kd_pasien,'RIGHT');
		}

		if($nama !=''){
			$this->db->like('br.NAMA_LENGKAP',$nama,'RIGHT');
		}

		$this->db->where('br.status',0);
		$this->db->group_by('br.ID_DAFTAR_RB','ASC');
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
      $result = $this->db->get('tb_pendaftaran_rb')->row(); 
    
      return $result; 
       }
 
    function create_no_transaction(){
		$q = $this->db->query("select MAX(RIGHT(ID_PULANG_RB,6)) as code_max from tb_pulang_rb");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%06s", $tmp);
            }
        } else {
            $code = "000001";
        }
        return "BRB" . $code;
	}
	
	 function m_get_list_petugas(){
		$this->db->select('ID_EMPLOYEE,NAMA_LENGKAP,ALAMAT');
		$this->db->from($this->employe);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}

	function m_insert_rb($data_rb){
		$this->db->insert($this->table,$data_rb);
	}

	function m_insert_detail($data_detail){
		$this->db->insert($this->detail,$data_detail);
	}
	
    function m_pulang_data($data_pulang,$id_daftar){
		$this->db->update($this->daftar,$data_pulang,array('ID_DAFTAR_RB'=>$id_daftar));
	}
	
    function m_suspend_data($data_suspend,$no_transaction){
		$this->db->update($this->table,$data_suspend,array('ID_PULANG_RB'=>$no_transaction));
	}
	
	function m_update_group($data_group,$id_pulang){
		$this->db->update($this->table,$data_group,array('ID_PULANG_RB'=>$id_pulang));
	}

	function delete_detail($id_pulang){
		$this->db->delete($this->detail,array('ID_PULANG_RB'=>$id_pulang));
	}
	
	function m_get_list_kamar($id_kamar,$nm_kamar){

		$this->db->select('ob.ID_KAMAR,ob.NAMA_KAMAR,ob.TARIF');
		$this->db->from($this->kamar.' as ob');

		if($id_kamar !=''){
			$this->db->like('ob.ID_KAMAR',$id_kamar,'RIGHT');
		}

		if($nm_kamar !=''){
			$this->db->like('ob.NAMA_KAMAR',$nm_kamar,'RIGHT');
		}

		$this->db->group_by('ob.ID_KAMAR');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function m_get_list_partus($id_partus,$partus){

		$this->db->select('ob.ID_PARTUS,ob.PARTUS,ob.TARIF');
		$this->db->from($this->partus.' as ob');

		if($id_partus !=''){
			$this->db->like('ob.ID_PARTUS',$id_partus,'RIGHT');
		}

		if($partus !=''){
			$this->db->like('ob.PARTUS',$partus,'RIGHT');
		}

		$this->db->group_by('ob.ID_PARTUS');
		$query = $this->db->get()->result_array();

		return $query;
	}

     function m_get_list_ibu($id_ibu,$p_ibu){

		$this->db->select('ob.ID_PERAWATAN_IBU,ob.PERAWATAN_IBU,ob.TARIF');
		$this->db->from($this->ibu.' as ob');

		if($id_ibu !=''){
			$this->db->like('ob.ID_PERAWATAN_IBU',$id_ibu,'RIGHT');
		}

		if($p_ibu !=''){
			$this->db->like('ob.PERAWATAN_IBU',$p_ibu,'RIGHT');
		}

		$this->db->group_by('ob.ID_PERAWATAN_IBU');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	 function m_get_list_bayi($id_bayi,$p_bayi){

		$this->db->select('ob.ID_PERAWATAN_BAYI,ob.PERAWATAN_BAYI,ob.TARIF');
		$this->db->from($this->bayi.' as ob');

		if($id_bayi !=''){
			$this->db->like('ob.ID_PERAWATAN_BAYI',$id_bayi,'RIGHT');
		}

		if($p_bayi !=''){
			$this->db->like('ob.PERAWATAN_BAYI',$p_bayi,'RIGHT');
		}

		$this->db->group_by('ob.ID_PERAWATAN_BAYI');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	
	 function m_get_list_bersalin($id_bersalin,$bersalin){

		$this->db->select('ob.ID_TDK_BERSALIN,ob.TINDAKAN_BERSALIN,ob.TARIF');
		$this->db->from($this->bersalin.' as ob');

		if($id_bersalin !=''){
			$this->db->like('ob.ID_TDK_BERSALIN',$id_bersalin,'RIGHT');
		}

		if($bersalin !=''){
			$this->db->like('ob.TINDAKAN_BERSALIN',$bersalin,'RIGHT');
		}
		
		$this->db->group_by('ob.ID_TDK_BERSALIN');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	 function m_get_list_gizi($id_gizi,$makan){

		$this->db->select('ob.ID_GIZI_SMBNG,ob.PEMBERIAN_MAKANAN,ob.TARIF');
		$this->db->from($this->gizi.' as ob');

		if($id_gizi !=''){
			$this->db->like('ob.ID_GIZI_SMBNG',$id_gizi,'RIGHT');
		}

		if($makan !=''){
			$this->db->like('ob.PEMBERIAN_MAKANAN',$makan,'RIGHT');
		}
		
		$this->db->group_by('ob.ID_GIZI_SMBNG');
		$query = $this->db->get()->result_array();

		return $query;
	}

	function m_get_group($id_pulang_rb){
		$this->db->where('ID_PULANG_RB',$id_pulang_rb);
		$query = $this->db->get($this->table);

		$row = $query->row();

		return $row;
	}

	function m_get_detail($id_pulang_rb){
		$this->db->where('ID_PULANG_RB',$id_pulang_rb);
		$query = $this->db->get($this->detail)->result_array();

		return $query;
	}

	function get_group_rb($id_pulang_rb){
		$this->db->select('gr.*,us.level as lev,em.NAMA_LENGKAP as petugas');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->employe.' as em','em.ID_EMPLOYEE=gr.ID_EMPLOYEE','left');
		$this->db->where('gr.ID_PULANG_RB',$id_pulang_rb);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$row = $query->row();
			return $row;
		}else{
			$arr_return = array();
			return $arr_return;
		}

	}

	function get_detail_rb($id_pulang_rb){
		$this->db->select('*');
		$this->db->from($this->detail);
		$this->db->where('ID_PULANG_RB',$id_pulang_rb);

		$query = $this->db->get()->result();

		return $query;
	}

	function count_detail_rb($id_pulang_rb){
		$this->db->select('count(*) as count_detail');
		$this->db->from($this->detail);
		$this->db->where('ID_PULANG_RB',$id_pulang_rb);

		$query = $this->db->get()->result_array();

		return $query[0]['count_detail'];
	}

}
