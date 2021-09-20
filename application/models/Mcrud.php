<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcrud extends CI_Model {

	var $tbl_users				 = 'tbl_user';
	
	
    public function get_users()
	{
			$this->db->from($this->tbl_users);
			$query = $this->db->get();

			return $query;
	}
	
	
	public function get_user()
	{
			$this->db->from($this->tbl_users);
			$query = $this->db->get();

			return $query->result();
	}

	public function get_users_by_un($id)
	{
				$this->db->from($this->tbl_users);
				$this->db->where('username',$id);
				$query = $this->db->get();

				return $query;
	}
	
	public function update_user($where, $data)
	{
		$this->db->update($this->tbl_users, $data, $where);
		return $this->db->affected_rows();
	}

	
}
