<?php 

class mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');

	}
	public function index ()
	{
		$data ['judul'] = 'Halaman Mahasiswa';
		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/index',$data);
		$this->load->view('templates/footer');
	}
}