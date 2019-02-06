<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();

	}

	function data_dana()
	{
	date_default_timezone_set('Asia/Jakarta');
     $jam=date("Y-m-d"); 
     $query = $this->db->query("select * from kko where tanggal = '$jam'");
    return $query->result_array();
	}

	function ambil_data()
	{
				date_default_timezone_set('Asia/Jakarta');
    			$jam=date("Y-m-d"); 
                $this->db->select('*');
                $this->db->from("kko where tanggal ='$jam'");
                $query=$this->db->get();
                return $query->result();
	}


	public function hitungjumlahini()
	{	date_default_timezone_set('Asia/Jakarta');
        $jam=date("Y-m-d"); 
		$query = "SELECT sum(jumlah) as jumlah FROM kko where tanggal = '$jam'";
		$result = $this->db->query($query);
		return $result->row()->jumlah;
	}

	public function hitungdataini()
	{	date_default_timezone_set('Asia/Jakarta');
        $jam=date("Y-m-d"); 
		$query = "SELECT count(upt) as upt FROM kko where tanggal = '$jam'";
		$result = $this->db->query($query);
		return $result->row();
	}

	public function hitungdataseluruh()
	{
		$query = "SELECT count(upt) as upt FROM kko";
		$result = $this->db->query($query);
		return $result->row();
	}

	public function hitungjumlah()
	{
		$query = "SELECT sum(jumlah) as jumlah FROM kko";
		$result = $this->db->query($query);
		return $result->row()->jumlah;
	}

	function data_danan()
	{
     $query = $this->db->query("select * from kko");
    return $query->result_array();
	}


	public function getadmin()
	{
	$query = "SELECT count(if(level='admin', level, NULL)) as level FROM tb_user";
	$result = $this->db->query($query);
	return $result->row();
	}

	public function getuser()
	{
	$query = "SELECT count(if(level='user', level, NULL)) as level FROM tb_user";
	$result = $this->db->query($query);
	return $result->row();
	}

	function data_upt($username)
	{
	$query = $this->db->get_where('kko', array('id' => $username));
	$query = $query->result_array();
	return $query;
	}

	function data_admin()
	{

		$query = $this->db->query("select * from tb_user where level = 'admin'");
    	return $query->result_array();
	}


	function data_user()
	{

		$query = $this->db->query("select * from tb_user where level = 'user'");
    	return $query->result_array();
	}


	function data_korek()
	{

		$query = $this->db->query("select * from tb_korek");
    	return $query->result_array();
	}

	public function kode_korek($id)
	{
		$kod = $this->db->get_where('tb_kode', array('id' => $id));
		echo "<option>klik untuk memilih</option>";
		foreach ($kod->result_array() as $row) {
			$query .="<option value='".$row['nama']."'>".$row['nama']."</option>";
		}
		return $query;
	}
	
	function data_login()
	{
		$query = $this->db->query("select * from tb_user");
    	return $query->result_array();
	}
}
?>