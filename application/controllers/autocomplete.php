<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('tbl_pasien')->like('KODE_PASIEN',$keyword)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->KODE_PASIEN,
				'nama'	=>$row->NAMA_LENGKAP,
				'jenis'	=>$row->JENIS_KELAMIN,
				'tt_lahir' =>$row->TEMPAT_TGL_LAHIR,
				'umur' =>$row->umur,
				'status' =>$row->STATUS_MENIKAH,
				'agama' =>$row->AGAMA,
				'telpon' =>$row->NO_TELPON,
				'alamat' =>$row->ALAMAT,
				'pendidikan' =>$row->PENDIDIKAN,
				'pekerjaan' =>$row->PEKERJAAN,
				'bpjs' =>$row->NO_BPJS,
				'faskes' =>$row->FASKES

			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
}
?>