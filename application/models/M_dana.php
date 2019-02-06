<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dana extends CI_Model
{
	
	function __construct()
	{
		$this->tbl ="kko";
	}

	function cari_data2($cari="")
	{
    $this->db->select('*');
    $this->db->from('kko');
    $this->db->like('concat(upt, nama, DATE_FORMAT(tanggal, "%e %M %Y"), isi, keterangan, jumlah)', $cari);
    $query=$this->db->get();
    return $query->result_array();
	}

function ambil_data2($cari)
	{
        $this->db->select('*');
        $this->db->order_by("no","desc");
        $this->db->from('kko');
        //$this->db->like('tanggal', $cari);
        $this->db->like('concat(upt, nama, DATE_FORMAT(tanggal, "%e %M %Y"), isi, keterangan, jumlah)', $cari);
        $query=$this->db->get();
        return $query->result();
	}
	function hitungjumlah2($cari)
	{
		//echo $cari;
		$query = "SELECT sum(jumlah) as jumlah FROM kko where concat(upt, nama, DATE_FORMAT(tanggal, '%e %M %Y'), isi, keterangan, jumlah) like '%".$cari."%'";
		$result = $this->db->query($query);
		return $result->row()->jumlah;
	}

	function cek_data($nama="",$tanggal="")
	{
		$query = $this->db->get_where($this->tbl, 
			array(
				'nama' => $nama,  
				'tanggal' => $tanggal));
		$query = $query->result_array();
		return $query;
	}

	function ambil_data()
	{
                $this->db->select('*');
                $this->db->order_by("no","desc");
                $this->db->from('kko');
                $query=$this->db->get();
                return $query->result();
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

	public function cari_data($tanggal="")
	{
		$query = $this->db->get_where($this->tbl, array('tanggal' => $tanggal));
		$query = $query->result_array();
		return $query;
	}

	function input_dana()
	{	
		$nama = $this->input->post('nama');
		$upt = $this->input->post('upt');
		$id = $this->input->post('id');
		$jam_masuk = $this->input->post('jam');
		$isi = $this->input->post('isi');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $keterangan = $this->input->post('keterangan');
        $data = array(
                'nama'=>$nama,
        		'upt'=>$upt,
        		'id' =>$id,                
                'jam_masuk' => $jam_masuk,
                'isi'=>$isi,
                'jumlah' => $jumlah,
                'tanggal' => $tanggal,
                'keterangan' => $keterangan);
        $this->db->insert('kko',$data);
	}
	
}
?>