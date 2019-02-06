<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
    
    function __construct()
    {
        $this->tbl ="tb_user";
    }

    function cek_data($nama_lengkap="",$id="",$username="")
    {
        $query = $this->db->get_where($this->tbl, 
            array(
                'nama_lengkap' => $nama_lengkap, 
                'id' => $id, 
                'username' => $username
                ));
        $query = $query->result_array();
        return $query;
    }

    function cek_admin($nama_lengkap="",$id="")
    {
        $query = $this->db->get_where($this->tbl, 
            array(
                'nama_lengkap' => $nama_lengkap, 
                'id' => $id
                ));
        $query = $query->result_array();
        return $query;
    }

    function cek($username="",$id="")
    {
        $this->db->where('username', $username);        
        $this->db->or_where('id', $id);
        $query = $this->db->get('tb_user');
        return $query->result_array();
    }
    
    function tambah_admin()
    {   
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        md5($password = $this->input->post('password'));
        $level = $this->input->post('level');
        $blokir = $this->input->post('blokir');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $data = array(
                'id'=>$id,
                'username'=> $username,
                'password' => md5($password),
                'level'=> $level,
                'blokir'=> $blokir,
                'nama_lengkap'=>$nama_lengkap,
                );
        $this->db->insert('tb_user',$data);
    }

    function getadmin($id)
    {
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("tb_user");
        return $this->db->get();
    }

    function hapus_admin($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_user');

    }

    function edit_dataadmin($data, $condition)
    {
        $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('tb_user', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
    }
}