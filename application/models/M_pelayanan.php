<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelayanan extends CI_Model {

	
	public $menu 				= 'tbl_menu_kpelayanan';
	public $table 				= 'tbl_pasien';
	public $berobat				= 'tb_berobat1';
	public $pemeriksaan			= 'tb_pemeriksaan_umum';
	public $poli 		        = 'tb_poli_umum';
	public $resep		 		= 'tb_tu_obat';
	public $detail		 		= 'dt_resep_obat';
	public $rujukan 		    = 'tb_rujukan_umum';
	public $umb  		 		= 'tb_umb_rujukan_umum';
	public $ruang_bersalin 		= 'tb_pendaftaran_rb';
	public $detail_rb   		= 'dt_pendaftaran_rb';
	public $pulang_rb 			= 'tb_pulang_rb';
	public $detail_prb 			= 'dt_pulang_rb';
	public $farmasi		 		= 'tb_farmasi';
	public $detail_obat 		= 'dt_farmasi';
	public $daftar_lab  		= 'tb_daftar_lab';
	public $hasil_lab	 		= 'tb_hasil_lab';
	public $detail_lab	 		= 'dt_hasil_lab';
	public $bayar_lab	 		= 'tb_pembayaran_lab';
	public $detail_blab 		= 'dt_pembayaran_lab';
	public $employe 			= 'tb_employee';
	public $user 				= 'tbl_user';
    public $unit       			= 'tb_unit';
	public $dokter     			= 'tb_dokter';
	public $privillage 			= 'tbl_privillage';
	public $obat				= 'tb_obat';

	public function __construct(){
        parent::__construct();
	}
	
	function get_pasien(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		
		/*=================================post dari find di kiri====================================================*/
		$param 				= $this->input->get('param');
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien			= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

	    $this->db->select('gr.*,us.level as lev');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->where('gr.kd_pasien !=','UNTCSTMR');

		if($no_pasien != ''){
			$this->db->like('gr.kd_pasien',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($DateFrom !='' and $DateTo !=''){
			$this->db->where('ge.CREATE_DATE >=',$DateFrom.' 00:00:00');
			$this->db->where('gr.CREATE_DATE <=',$DateTo.' 23:59:59');
		}

		if($TransStatus == ''){
			$this->db->where('gr.status',0);
		}else{
			$this->db->where_in('gr.status',$TransStatus);
		}
		
		$this->db->order_by('gr.kd_pasien','DESC');

		$query = $this->db->get()->result_array(); 

		return $query;
	}
	
	function get_kunjungan(){

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
		$this->db->from($this->berobat.' as gr');
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
	
		function get_pemeriksaan(){

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
		$this->db->from($this->pemeriksaan.' as gr');
		//$this->db->join($this->pasien.' as ps','ps.kd_pasien=gr.KODE_PASIEN','left');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		
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
		
		$this->db->order_by('gr.ID_PEMERIKSAAN','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function get_poli(){

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

		$this->db->select('gr.*,us.level as lev,dk.NAMA_DOKTER as nama');
		$this->db->from($this->poli.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		$this->db->join($this->dokter. ' as dk','dk.ID_DOKTER = gr.ID_DOKTER','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_umum != ''){
			$this->db->like('gr.ID_POLI_UMUM',$id_umum,'RIGHT');
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
		
		$this->db->order_by('gr.ID_POLI_UMUM','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
		function get_resep(){

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
		$this->db->from($this->resep.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		$this->db->join($this->dokter. ' as dk','dk.ID_DOKTER = gr.ID_DOKTER','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_terapi != ''){
			$this->db->like('gr.ID_TU_OBAT',$id_tarapi,'RIGHT');
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
		
		$this->db->order_by('gr.ID_TU_OBAT','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
    function m_get_list_dokter(){
		$this->db->select('ID_DOKTER,NAMA_DOKTER,SPESIALIST');
		$this->db->from($this->dokter);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}


	function m_get_group($id_tu_obat){
		$this->db->where('ID_TU_OBAT',$id_tu_obat);
		$query = $this->db->get($this->resep);

		$row = $query->row();

		return $row;
	}

	function m_get_detail($id_tu_obat){
		$this->db->where('ID_TU_OBAT',$id_tu_obat);
		$query = $this->db->get($this->detail)->result_array();

		return $query;
	}
	
	function get_rujukan(){

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
		$this->db->from($this->rujukan.' as gr');
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
	
	function get_umb(){

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
		$this->db->from($this->umb.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_umum != ''){
			$this->db->like('gr.ID_UMB_UMUM',$id_umum,'RIGHT');
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
		
		$this->db->order_by('gr.ID_UMB_UMUM','DESC');
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	function get_daftar_rb(){

		$page	= ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
		$rows	= ($this->input->post('rows')) ? intval($this->input->post('rows')) : 20;
		/*=================================post dari find di kiri==============================================*/
		$param 					= $this->input->get('param');
		$id_daftar			= isset($param['txt_id']) ? $param['txt_id'] : ''; 
		$no_pasien			= isset($param['txt_no']) ? $param['txt_no'] : ''; 
		$nm_pasien		= isset($param['txt_desc']) ? $param['txt_desc'] : ''; 
		
		$DateFrom				= isset($param['date_from']) ? date('Y-m-d',strtotime($param['date_from'])) : '';
		$DateTo					= isset($param['date_to']) ? date('Y-m-d',strtotime($param['date_to'])) : '';
		$TransStatus			= isset($param['chk_TransStatus']) ? $param['chk_TransStatus'] : '';

		$this->db->select('gr.*,us.level as lev,em.NAMA_LENGKAP as nama');
		$this->db->from($this->ruang_bersalin.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		$this->db->join($this->employe. ' as em','em.ID_EMPLOYEE = gr.ID_EMPLOYEE','left');
		
		if($no_pasien != ''){
			$this->db->like('gr.KODE_PASIEN',$no_pasien,'RIGHT');
		}

		if($nm_pasien != ''){
			$this->db->like('gr.NAMA_LENGKAP',$nm_pasien,'RIGHT');
		}

		if($id_daftar != ''){
			$this->db->like('gr.ID_DAFTAR_RB',$id_daftar,'RIGHT');
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
		
		$this->db->order_by('gr.ID_DAFTAR_RB','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function m_get_group_rb($id_daftar_rb){
		$this->db->where('ID_DAFTAR_RB',$id_daftar_rb);
		$query = $this->db->get($this->ruang_bersalin);

		$row = $query->row();

		return $row;
	}

	function m_get_detail_rb($id_daftar_rb){
		$this->db->where('ID_DAFTAR_RB',$id_daftar_rb);
		$query = $this->db->get($this->detail_rb)->result_array();

		return $query;
	}
	
    function m_get_list_petugas(){
		$this->db->select('ID_EMPLOYEE,NAMA_LENGKAP,ALAMAT');
		$this->db->from($this->employe);
		$this->db->where('status',0);

		$query = $this->db->get()->result();
		return $query;
	}

	function get_pulang_rb(){

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
		$this->db->from($this->pulang_rb.' as gr');
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
		
		$this->db->order_by('gr.ID_PULANG_RB','ASC');

		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function m_get_group_prb($id_pulang_rb){
		$this->db->where('ID_PULANG_RB',$id_pulang_rb);
		$query = $this->db->get($this->pulang_rb);

		$row = $query->row();

		return $row;
	}

	function m_get_detail_prb($id_pulang_rb){
		$this->db->where('ID_PULANG_RB',$id_pulang_rb);
		$query = $this->db->get($this->detail_prb)->result_array();

		return $query;
	}

   function get_farmasi(){

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
		$this->db->from($this->farmasi.' as gr');
		$this->db->join($this->user. ' as us','us.id_user = gr.ID_USER','left');
		$this->db->join($this->employe. ' as dk','dk.ID_EMPLOYEE = gr.ID_EMPLOYEE','left');
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
	
	function m_get_group_ob($id_farmasi){
		$this->db->where('ID_FARMASI',$id_farmasi);
		$query = $this->db->get($this->farmasi);

		$row = $query->row();
		return $row;
	}

	function m_get_detail_ob($id_farmasi){
		$this->db->where('ID_FARMASI',$id_farmasi);
		$query = $this->db->get($this->detail_obat)->result_array();

		return $query;
	}

    	function get_daftar_lab(){

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
		$this->db->from($this->daftar_lab.' as gr');
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
		
		$this->db->order_by('gr.ID_DAFTAR_LAB','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function get_hasil_lab(){

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
		$this->db->from($this->hasil_lab.' as gr');
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
		
		$this->db->order_by('gr.ID_HASIL_LAB','DESC');
		$query = $this->db->get()->result_array();

		return $query;
	}
	
	function m_get_group_hlab($id_hasil_lab){
		$this->db->where('ID_HASIL_LAB',$id_hasil_lab);
		$query = $this->db->get($this->hasil_lab);
		$row = $query->row();

		return $row;
	}

	function m_get_detail_hlab($id_hasil_lab){
		$this->db->where('ID_HASIL_LAB',$id_hasil_lab);
		$query = $this->db->get($this->detail_lab)->result_array();

		return $query;
	}
  
   function get_bayar_lab(){

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
		$this->db->from($this->bayar_lab.' as gr');
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
	
	function m_get_group_blab($id_bayar_lab){
		$this->db->where('ID_PEMBAYARAN_LAB',$id_bayar_lab);
		$query = $this->db->get($this->bayar_lab);

		$row = $query->row();

		return $row;
	}

	function m_get_detail_blab($id_bayar_lab){
		$this->db->where('ID_PEMBAYARAN_LAB',$id_bayar_lab);
		$query = $this->db->get($this->detail_blab)->result_array();

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

	function get_list_pasien($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user');
		$this->db->from($this->table.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}

	function get_list_kunjungan($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_DOKTER as dokter,un.NAMA_UNIT as unit');
		$this->db->from($this->berobat.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','inner');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->join($this->unit.' as un','un.ID_UNIT=gr.ID_UNIT','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
	
	function get_list_priksa($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user');
		$this->db->from($this->pemeriksaan.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','inner');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
	
	function get_list_poli($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_DOKTER as dokter');
		$this->db->from($this->poli.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','inner');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
	
	function get_list_rujukan($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user');
		$this->db->from($this->rujukan.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','inner');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
	
	function get_list_umb($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user');
		$this->db->from($this->umb.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
	
   	function get_list_dlab($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_DOKTER as dokter');
		$this->db->from($this->daftar_lab.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
  
    function get_list_hlab($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_DOKTER as dokter');
		$this->db->from($this->hasil_lab.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
	
    function get_list_blab($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_DOKTER as dokter');
		$this->db->from($this->bayar_lab.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
	
	function get_list_daftar_rb($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_LENGKAP as petugas');
		$this->db->from($this->ruang_bersalin.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->employe.' as dk','dk.ID_EMPLOYEE=gr.ID_EMPLOYEE','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
	
	function get_list_pulang_rb($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_LENGKAP as petugas');
		$this->db->from($this->pulang_rb.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->employe.' as dk','dk.ID_EMPLOYEE=gr.ID_EMPLOYEE','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
  
  	function get_list_resep($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_DOKTER as dokter');
		$this->db->from($this->resep.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->dokter.' as dk','dk.ID_DOKTER=gr.ID_DOKTER','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}
  
  	function get_list_farmasi($start_date,$end_date){
	   $this->db->select('gr.*,us.username as user,dk.NAMA_LENGKAP as petugas,un.NAMA_UNIT as unit');
		$this->db->from($this->farmasi.' as gr');
		$this->db->join($this->user.' as us','us.id_user=gr.ID_USER','left');
		$this->db->join($this->employe.' as dk','dk.ID_EMPLOYEE=gr.ID_EMPLOYEE','left');
		$this->db->join($this->unit.' as un','un.ID_UNIT=gr.ID_UNIT','left');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}

  	function get_list_obat($start_date,$end_date){

		$this->db->from($this->obat.' as gr');
		$this->db->where('gr.CREATE_DATE >=',$start_date);
		$this->db->where('gr.CREATE_DATE <=',$end_date);
		$this->db->where('gr.status',0);

		$query = $this->db->get();

		$return['list'] 	= $query->result_array();
		$return['total_list'] = $query->num_rows();
		return $return;
	}

}
