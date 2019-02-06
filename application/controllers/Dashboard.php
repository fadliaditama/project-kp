<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_login');
		$this->load->model('M_dashboard');
	}

	function index()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('nama_lengkap'));
		$ambil_id = $this->M_login->ambil_id($this->session->userdata('id'));
		$data = array(
			'user' => $ambil_akun,
			'judul_admin' => "Dashboard Admin",
			'nama'=>$this->session->userdata('nama_lengkap'),
			'id'=>$this->session->userdata('id'),
			'dana' => $this->M_dashboard->data_korek(),
			'getadmin' => $this->M_dashboard->getadmin(),
			'getuser' => $this->M_dashboard->getuser(),
			'getdata' => $this->M_dashboard->hitungdataini(),
     		'getkko' => $this->M_dashboard->hitungdataseluruh(),
			'image' => "admin.jpg",
			'status' => "active",
            'status1' => "",
            'status2' => "",
            'status3' => "",
            'status4' => "",
            'status5' => "",
            'status6' => ""
			);
		$stat = $this->session->userdata('lvl');
		if ($stat == 'admin') {
			$this->load->view('layout/v_header',$data);
			$this->load->view('admin/dashboard_admin',$data);
            $this->load->view('layout/v_footer');
		} else if ($stat == 'user'){
			$this->load->view('layout/v_headeruser',$data);
			$this->load->view('user/dashboard_user',$data);
            $this->load->view('layout/v_footer');
		} else if ($stat == 'super'){
			$this->load->view('layout/v_header',$data);
			$this->load->view('super/dashboard_admin',$data);
            $this->load->view('layout/v_footer');
		} else {
			$message = "Silahkan login untuk mengakses halaman ini..!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect ('login','refresh');
		}
	}

	public function getdata()
	{
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

		if($modul=="tb_kode"){
			$this->load->model('M_dashboard');
			echo $this->M_dashboard->kode_korek($id);
		}
	}

	function data_dana()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('nama_lengkap'));
		$data = array(
			'user' => $ambil_akun,
			'nama'=>$this->session->userdata('nama_lengkap'),
			'dana' => $this->M_dashboard->data_dana(),
			'sum' => $this->M_dashboard->hitungjumlahini(),
			'status' => "",
            'status1' => "",
            'status2' => "",
            'status3' => "active",
            'status4' => "",
            'status5' => "",
            'status6' => ""
			);
		$stat = $this->session->userdata('lvl');
		if ($stat == 'admin') {
			$this->load->view('layout/v_header',$data);
			$this->load->view('admin/data_dana',$data);
            $this->load->view('layout/v_footer');
		}else if ($stat == 'super'){
			$this->load->view('layout/v_header',$data);
			$this->load->view('super/data_dana',$data);
            $this->load->view('layout/v_footer');
		} else {
			$message = "Silahkan login untuk mengakses halaman ini..!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect ('login','refresh');
		}
	}

	function data_danan()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('nama_lengkap'));
		$data = array(
			'user' => $ambil_akun,
			'nama'=>$this->session->userdata('nama_lengkap'),
			'danan' => $this->M_dashboard->data_danan(),
			'sum' => $this->M_dashboard->hitungjumlah(),
			'status' => "",
            'status1' => "",
            'status2' => "",
            'status3' => "",
            'status4' => "",
            'status5' => "",
            'status6' => "active"
			);
		$stat = $this->session->userdata('lvl');
		if ($stat == 'admin') {
			$this->load->view('layout/v_header',$data);
			$this->load->view('admin/data_danan',$data);
            $this->load->view('layout/v_footer');
		}else if ($stat == 'super'){
			$this->load->view('layout/v_header',$data);
			$this->load->view('super/data_danan',$data);
            $this->load->view('layout/v_footer');
		} else {
			$message = "Silahkan login untuk mengakses halaman ini..!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect ('login','refresh');
		}
	}

	function data_admin()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('nama_lengkap'));
		$data = array(
			'user' => $ambil_akun,
			'nama'=>$this->session->userdata('nama_lengkap'),
			'admin' => $this->M_dashboard->data_admin(),
			'status' => "",
            'status1' => "",
            'status2' => "active",
            'status3' => "",
            'status4' => "",
            'status5' => "",
            'status6' => ""
			);
		$stat = $this->session->userdata('lvl');
		if ($stat == 'admin') {
			$this->load->view('layout/v_header',$data);
			$this->load->view('admin/data_admin',$data);
            $this->load->view('layout/v_footer');
		}else if ($stat == 'super'){
			$this->load->view('layout/v_header',$data);
			$this->load->view('super/data_admin',$data);
            $this->load->view('layout/v_footer');
		} else {
			$message = "Silahkan login untuk mengakses halaman ini..!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect ('login','refresh');
		}
	}

	function data_user()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('nama_lengkap'));
		$data = array(
			'user' => $ambil_akun,
			'nama'=>$this->session->userdata('nama_lengkap'),
			'user' => $this->M_dashboard->data_user(),
			'status' => "",
            'status1' => "",
            'status2' => "",
            'status3' => "",
            'status4' => "active",
            'status5' => "",
            'status6' => ""
			);
		$stat = $this->session->userdata('lvl');
		if ($stat == 'admin') {
			$this->load->view('layout/v_header',$data);
			$this->load->view('admin/data_user',$data);
            $this->load->view('layout/v_footer');
		} else if ($stat == 'super'){
			$this->load->view('layout/v_header',$data);
			$this->load->view('super/data_user',$data);
            $this->load->view('layout/v_footer');
		}else {
			$message = "Silahkan login untuk mengakses halaman ini..!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect ('login','refresh');
		}
	}


	function data_upt()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('nama_lengkap'));
		$ambil_id = $this->M_login->ambil_id($this->session->userdata('id'));
		$data = array(
			'user' => $ambil_akun,
			'nama'=>$this->session->userdata('nama_lengkap'),
			'upt' => $this->M_dashboard->data_upt($ambil_id['id']),
			'status' => "",
            'status1' => "",
            'status2' => "",
            'status3' => "",
            'status4' => "",
            'status5' => "active",
            'status6' => ""
			);
		$stat = $this->session->userdata('lvl');
		if ($stat == 'user') {
			$this->load->view('layout/v_headeruser',$data);
			$this->load->view('user/data_pengajuan',$data);
            $this->load->view('layout/v_footer');
		} else {
			$message = "Silahkan login untuk mengakses halaman ini..!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect ('login','refresh');
		}
	}


	function login()
	{
		$session = $this->session->userdata('isLogin');
		if ($session == FALSE) 
		{
			$this->load->view('login_form');
		} else{
			redirect('dashboard');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect ('login','refresh');
	}
}
?>