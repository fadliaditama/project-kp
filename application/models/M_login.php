<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model
{
	
	function __construct()
	{
		$this->tbl ="tb_user";
	}

	function cek_user($username="",$password="")
	{
		$query = $this->db->get_where($this->tbl, array('username' => $username, 'password' => $password));
		$query = $query->result_array();
		return $query;
	}

	function ambil_user($nama_lengkap)
	{
		$query = $this->db->get_where($this->tbl, array('nama_lengkap' => $nama_lengkap));
		$query = $query->result_array();
		if ($query) {
			return $query[0];
		}
	}

	function ambil_id($id)
	{
		$query = $this->db->get_where($this->tbl, array('id' => $id));
		$query = $query->result_array();
		if ($query) {
			return $query[0];
		}
	}
}
?>