<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_login');
	}

	function index()
	{
		$session = $this->session->userdata('isLogin');
		if ($session == FALSE) {
			$this->load->view('login_form');
		} else {
			redirect('dashboard');
		}
	}

	function do_login()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');

		$cek = $this->M_login->cek_user($username,md5($password));
		if (count($cek)==1) {
			foreach ($cek as $cek) {
				$level = $cek['level'];
				$status = $cek['blokir'];
				$nama_lengkap = $cek['nama_lengkap'];
				$id = $cek['id'];
			}
			if ($status == 'N') {
				$this->session->set_userdata(
					array(
						'isLogin' => TRUE,
						'uname' => $username,
						'lvl' => $level,
						'blokir' => $status,
						'id' => $id,
						'nama_lengkap' => $nama_lengkap,
						));
				redirect('dashboard','refresh');
			} else 
			{
				echo "<script>alert('Akun anda di blokir..!!')</script>";
				redirect('login','refresh');
			}
		} else {
				echo "<script>alert('Username dan password tidak valid..!!')</script>";
				redirect('login','refresh');
		}
	}
}
?>