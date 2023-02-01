<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_masuk_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $data['judul'] = 'Barang Service';
        $data['active1'] = '';
        $data['active2'] = 'active';
        $data['active3'] = '';
        $data['active4'] = '';
		$data['user'] = $this->db->get_where('users', ['Username' => $this->session->userdata('username')])->row_array();
        $this->load->model('Barang_masuk_model');
        $this->load->view('templates/header', $data);
    }

    public function index()
    {
        $data['barang_masuk'] = $this->Barang_masuk_model->get_all_pelanggan();
        $this->load->view('barang_masuk/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_barang()
    {
        $this->Barang_masuk_model->tambah_barang();
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> Barang yang ingin diservice berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Barang_masuk_controller/index');
    }

    public function hapus_barang($id)
    {
        $this->Barang_masuk_model->hapus_barang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> Hapus data berhasil
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Barang_masuk_controller/index');
    }

    public function update()
    {
        $id = $this->input->post('ID_Pelanggan');
        $data = array(
            'Nama' => $this->input->post('Nama'),
            'Alamat' => $this->input->post('Alamat'),
            'Nomor_Telepon' => $this->input->post('Nomor_Telepon'),
            'barang' => $this->input->post('barang'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal_perbaikan' => $this->input->post('tanggal_perbaikan')
        );

        $this->Barang_masuk_model->update_data($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> Deskripsi data sukses di update
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Barang_masuk_controller/index');
    }

    public function halamanUpdate($id)
    {
        $data['barang'] = $this->Barang_masuk_model->edit_data($id);
        $this->load->view('barang_masuk/update', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['barang'] = $this->Barang_masuk_model->view_by_id($id);
        $this->load->view('barang_masuk/detail', $data);
        $this->load->view('templates/footer');
    }

    public function perbaikan_barang($id){
        $data['perbaikan'] = $this->Barang_masuk_model->view_by_id($id);
        $this->load->view('barang_masuk/perbaikan', $data);
        $this->load->view('templates/footer');
    }

    public function proses_barang_selesai(){
        $data['insert_barang_selesai'] = $this->Barang_masuk_model->insert_hasil_perbaikan();
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> Barang sukses diperbaiki dan telah berpindah ke halaman BARANG SELESAI
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');

        $ID_Pelanggan = $this->input->post('ID_Pelanggan');
        $data = ['kode' => 'true'];
        $this->Barang_masuk_model->update_data($ID_Pelanggan,$data);
        
        redirect('Barang_masuk_controller/index');
    }

}
