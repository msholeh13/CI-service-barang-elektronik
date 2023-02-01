<?php
defined('BASEPATH') or exit('no direct access script allowed');

class Semua_barang_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        $data['judul'] = 'Semua Barang Yang Sudah Di Ambil';
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = '';
        $data['active4'] = 'active';
		$data['user'] = $this->db->get_where('users', ['Username' => $this->session->userdata('username')])->row_array();
        $this->load->model('Semua_barang_model');
        $this->load->view('templates/header', $data);
    }
    
    public function index(){
        $data['semua_barang'] = $this->Semua_barang_model->get_all_barang_telah_diambil();
        $this->load->view('semua_barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['barang'] = $this->Semua_barang_model->view_by_id($id);
        $this->load->view('semua_barang/detail', $data);
        $this->load->view('templates/footer');
    }
}
