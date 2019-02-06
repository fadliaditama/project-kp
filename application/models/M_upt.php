<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dana extends CI_Model
{
	
	function __construct()
	{
		$this->tbl ="kko";
	}

	function cek_data($nama="",$kode="",$tanggal="")
	{
		$query = $this->db->get_where($this->tbl, 
			array(
				'nama' => $nama, 
				'kode' => $kode, 
				'tanggal' => $tanggal));
		$query = $query->result_array();
		return $query;
	}

	function ambil_user($nama_lengkap)
	{
                $this->db->select('*');
                $this->db->where('nama',$nama);
                $this->db->order_by("no","desc");
                $this->db->from('kko');
                $query=$this->db->get();
                return $query->result();
	}

}
?>