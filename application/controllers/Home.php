<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        cek_login();
		$this->load->model('Home_model');
		$data['judul'] = 'Beranda';
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		$data['active4'] = '';
		$data['barang_masuk'] = $this->Home_model->barang_masuk();
		$data['barang_selesai'] = $this->Home_model->barang_selesai();
		$data['semua_barang'] = $this->Home_model->barang_lunas();
		$data['user'] = $this->db->get_where('users', ['Username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header',$data);
	}
	
	public function index()
	{
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function blocked(){
		$data['judul'] = '404 | PAGE NOT FOUND';
		$this->load->view('blocked', $data);
	}
}
