<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar_lab extends CI_Model {

	/*
	Author 		: sisepus
	Date 		: 23-03-2018
	*/
	
	public $table 		= 'tb_daftar_lab';
	public $menu 		= 'tbl_menu_lab';
	public $pasien 		= 'tbl_pasien';
	public $user        = 'tbl_user';
	public $dokter		= 'tb_dokter';
	public $lab			= 'tb_data_lab';
	public $berobat		= 'tb_berobat1';

	public function __construct(){
        parent::__construct();
		
	}

	function get_all(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri====================================================*/
		$param 					= $this->input->get('param');
		$id_daftar			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
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

		if($id_daftar != ''){
			$this->db->like('gr.ID_DAFTAR_LAB',$id_daftar,'RIGHT');
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
		
		$this->db->order_by('gr.ID_DAFTAR_LAB','ASC');
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
	   
	 function m_get_list_dokter(){
		$this->db->select('ID_DOKTER,NAMA_DOKTER,SPESIALIST');
		$this->db->from($this->dokter);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}
	   
	function m_get_lab($id_dt_lab,$pemeriksaan){

		$this->db->select('ds.ID_DT_LAB,ds.NAMA_PEMERIKSAAN,ds.KETERANGAN');
		$this->db->from($this->lab.' as ds');

		if($id_dt_lab !=''){
			$this->db->like('ds.ID_DT_LAB',$id_dt_lab,'RIGHT');
		}

		if($pemeriksaan !=''){
			$this->db->like('ds.NAMA_PEMERIKSAAN',$pemeriksaan,'RIGHT');
		}

		$this->db->group_by('ds.ID_DT_LAB');
		$query = $this->db->get()->result_array();

		return $query;
	}

     function m_get_list_pasien($kd_pasien,$nama){

		$this->db->select('br.ID_BEROBAT,br.KODE_PASIEN,br.NAMA_LENGKAP,br.UMUR,br.ALAMAT,br.NO_BPJS');
		$this->db->from($this->berobat.' as br');

		if($kd_pasien !=''){
			$this->db->like('br.KODE_PASIEN',$kd_pasien,'RIGHT');
		}

		if($nama !=''){
			$this->db->like('br.NAMA_LENGKAP',$nama,'RIGHT');
		}
        
		$this->db->where('br.status',0);
		$this->db->where('br.trans_status',0);
		$this->db->where('br.ID_UNIT','U009');
		$this->db->group_by('br.ID_BEROBAT');
		$query = $this->db->get()->result_array();

		return $query;
	}
	 
	 
	 
     function create_no_transaction(){
		$q = $this->db->query("select MAX(RIGHT(ID_DAFTAR_LAB,5)) as code_max from tb_daftar_lab");
        $code = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $cd) {
                $tmp = ((int) $cd->code_max) + 1;
                $code = sprintf("%05s", $tmp);
            }
        } else {
            $code = "00001";
        }

        return "DLB" . $code;
	}
	
	function m_insert_data($data){
		$this->db->insert($this->table,$data);
	}

	function m_update_group($data_update,$code){
		$this->db->update($this->table,$data_update,array('ID_DAFTAR_LAB'=>$code));
	}
    
	function m_false_data($data_priksa,$id_berobat){
		$this->db->update($this->berobat,$data_priksa,array('ID_BEROBAT'=>$id_berobat));
	}

	function m_delete_data($data_delete,$code){
		$this->db->update($this->table,$data_delete,array('ID_DAFTAR_LAB',$code));
	}
	
	
	function m_get_group($id_pemeriksaan){
		$this->db->where('ID_PEM_KB',$id_pemeriksaan);
		$query = $this->db->get($this->table);

		$row = $query->row();

		return $row;
	}
	


}
