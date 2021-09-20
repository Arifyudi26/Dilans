<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemeriksaan_kb extends CI_Model {

	/*

	Author 		: sisepus
	Date 		: 23-03-2018

	*/
	
	public $table 		= 'tb_pemeriksaan_kb';
	public $menu 		= 'tbl_menu_pemkb';
	public $pasien 		= 'tbl_pasien';
	public $user        = 'tbl_user';

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

		$this->db->select('gr.*,us.level as lev');
		$this->db->from($this->table.' as gr');
		//$this->db->join($this->pasien.' as ps','ps.kd_pasien=gr.KODE_PASIEN','left');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_pemeriksaan != ''){
			$this->db->like('gr.ID_PEM_KB',$id_pemeriksaan,'RIGHT');
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
		
		$this->db->order_by('gr.ID_PEM_KB','ASC');

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
		$q = $this->db->query("select MAX(RIGHT(ID_PEM_KB,5)) as code_max from tb_pemeriksaan_kb");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%05s", $tmp);
            }
        } else {
            $code = "00001";
        }

        return "PKB" . $code;
	}
	
	function m_insert_data($data_priksa){
		$this->db->insert($this->table,$data_priksa);
	}

	function m_update_group($data_pemeriksaan,$id_pemkb){
		$this->db->update($this->table,$data_pemeriksaan,array('ID_PEM_KB'=>$id_pemkb));
	}


	function delete_data($id_pemeriksaan){
		$this->db->delete($this->table,array('ID_PEMERIKSAAN',$id_pemeriksaan));
	}
	
	
	function m_get_group($id_pemeriksaan){
		$this->db->where('ID_PEM_KB',$id_pemeriksaan);
		$query = $this->db->get($this->table);

		$row = $query->row();

		return $row;
	}
	


}
