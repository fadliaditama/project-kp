<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class dana extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_dana');
		$this->load->model('M_admin');
		$this->load->library('pdf_report');
		$this->load->model('M_dashboard');
	}

	function laporan_excel2($cari="")
	{
		$data=$this->M_dana->ambil_data2($cari);
		$sum=$this->M_dana->hitungjumlah2($cari);
		$this->load->view('layout/v_excel', ['data'=>$data,'sum'=>$sum]);
	}
	function laporan2($cari="")
	{
		$data=$this->M_dana->ambil_data2($cari);
		$sum=$this->M_dana->hitungjumlah2($cari);
		$this->load->view('layout/v_report', ['data'=>$data,'sum'=>$sum]);
	}

	function laporan_excel1()
	{
		$data=$this->M_dashboard->ambil_data();
		$sum=$this->M_dashboard->hitungjumlahini();
		$this->load->view('layout/v_excel',['data'=>$data,'sum'=>$sum]);
	}

	function laporan_excel()
	{
		$data=$this->M_dana->ambil_data();
		$sum=$this->M_dashboard->hitungjumlah();
		$this->load->view('layout/v_excel', ['data'=>$data,'sum'=>$sum]);
	}

	function laporan1()
	{
		$data=$this->M_dashboard->ambil_data();
		$sum=$this->M_dashboard->hitungjumlahini();
		$this->load->view('layout/v_report',['data'=>$data,'sum'=>$sum]);
	}

	function laporan()
	{
		$data=$this->M_dana->ambil_data();
		$sum=$this->M_dashboard->hitungjumlah();
		$this->load->view('layout/v_report', ['data'=>$data,'sum'=>$sum]);
	}

	function do_dana()
	{	
		$upt = $this->input->post('upt');
		$nama = $this->input->post('nama');
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		$jumlah = $this->input->post('jumlah');
		$keterangan = $this->input->post('keterangan');
			$this->M_dana->input_dana();
			echo "<script>alert('Terima Kasih sudah mengisi pengajuan hari ini. SELAMAT BEKERJA :)')</script>";
			redirect('dashboard','refresh');	
		} 
	
	public function cari_data()
	{
		$this->load->model('M_dana');
		$this->load->model('M_login');
		$this->load->model('M_dashboard');
		$tanggal = $this->input->post('cari');

		if (isset($tanggal) and !empty($tanggal)) {
			$ambil_akun = $this->M_login->ambil_user($this->session->userdata('nama_lengkap'));
			$cari['hasil_cari'] = $this->M_dana->cari_data2($tanggal);
			$data = array(
			'user' => $ambil_akun,
			'judul_admin' => "Dashboard Admin",
			'nama'=>$this->session->userdata('nama_lengkap'),
			'admin' => $this->M_dashboard->data_admin(),
			'dana' => $this->M_dashboard->data_dana(),
  			'sum' => $this->M_dana->hitungjumlah2($tanggal),
			'image' => "admin.jpg",
			'status' => "",
            'status1' => "",
            'status2' => "",
            'status3' => "active",
            'status4' => "",
            'status5' => "",
            'status6' => "active"
			);
			$this->load->view('layout/v_header',$data);
			$this->load->view('daftar_dana',$cari);
            $this->load->view('layout/v_footer',$data);
            //echo base_url().'dana/laporan_excel2/'.$_POST['cari'];
		} else {
			redirect('dashboard/data_dana','refresh');
		}
	}
}
?>