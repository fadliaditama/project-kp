<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_admin');
		$this->load->model('M_login');
		$this->load->model('M_dashboard');
	}
	
	function tambah_admin()
	{
		$username = $this->input->post('username');
		$id = $this->input->post('id');
		$cek = $this->M_admin->cek($username,$id);

		if (count($cek) > 0) {
				echo "<script>alert('Data sudah ada!!')</script>";
				redirect('dashboard/data_admin','refresh');
		} else {
			$this->M_admin->tambah_admin();
			echo "<script>alert('Data berhasil ditambah.')</script>";
			redirect('dashboard/data_admin','refresh');
		}
	}

	public function edit_dataadmin()
	{
        $data = array(
        			'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'level' => $this->input->post('level'),
					'blokir' => $this->input->post('blokir'),
					'nama_lengkap' => $this->input->post('nama_lengkap'),
				);
        $condition['id'] = $this->input->post('id');
        $this->M_admin->edit_dataadmin($data, $condition);
        echo "<script>alert('Data berhasil diupdate.')</script>";
		redirect('dashboard/data_admin'); 
	}

	public function hapus_admin($id)
	{
        $this->M_admin->hapus_admin($id);   
        redirect('Dashboard/data_admin'); //redirect page ke halaman utama controller products
	}

	public function edit_admin($id)
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('nama_lengkap'));
		$data = array(
			'user' => $ambil_akun,
			'nama'=>$this->session->userdata('nama_lengkap'),
			'admin' => $this->M_dashboard->data_admin(),
			'edit_admin' => $this->M_admin->getadmin($id), 
			'status' => "",
            'status1' => "",
            'status2' => "active",
            'status3' => "",
            'status4' => "",
            'status5' => "",
            'status6' => ""
			);
		$stat = $this->session->userdata('lvl');
		if ($stat == 'super') {
			$this->load->view('layout/v_header',$data);
			$this->load->view('super/edit_admin',$data);
            $this->load->view('layout/v_footer');
		} else {
			$message = "Silahkan login untuk mengakses halaman ini..!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect ('login','refresh');
		}
	}

}
?>