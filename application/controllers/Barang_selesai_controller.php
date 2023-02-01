<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Barang_selesai_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        $data['judul'] = 'Barang Sukses di Service';
        $data['active1'] = '';
        $data['active2'] = '';
        $data['active3'] = 'active';
        $data['active4'] = '';
		$data['user'] = $this->db->get_where('users', ['Username' => $this->session->userdata('username')])->row_array();
        $this->load->model('Barang_selesai_model');
        $this->load->view('templates/header', $data);
    }

    public function index()
    {
        $data['barang_selesai'] = $this->Barang_selesai_model->get_all_hasil_perbaikan();
        $this->load->view('barang_selesai/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['barang'] = $this->Barang_selesai_model->view_by_id($id);
        $this->load->view('barang_selesai/detail', $data);
        $this->load->view('templates/footer');
    }

    public function halamanUpdate($id)
    {
        $data['barang'] = $this->Barang_selesai_model->edit_data($id);
        $this->load->view('barang_selesai/update', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('ID_Pelanggan');
        $biayaAlat = $this->input->post('Biaya_ganti_alat');
        $biayaPerbaikan = $this->input->post('Biaya_perbaikan');
        $totalBiaya = $biayaAlat + $biayaPerbaikan;
        $data = array(
            'Deskripsi_Hasil' => $this->input->post('Deskripsi_Hasil'),
            'Biaya_ganti_alat' => $biayaAlat,
            'Biaya_perbaikan' => $biayaPerbaikan,
            'total_biaya' => $totalBiaya
        );

        $this->Barang_selesai_model->update_data($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> Deskripsi data sukses di update
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Barang_selesai_controller/index');
    }

    public function halamanBayar($id)
    {
        $data['bayar'] = $this->Barang_selesai_model->view_by_id($id);
        $this->load->view('barang_selesai/bayar', $data);
        $this->load->view('templates/footer');
    }
    
    public function proses_bayar(){
        $ID_Pelanggan = $this->input->post('ID_Pelanggan');
        $data = ['keterangan' => 'Lunas'];
        $this->Barang_selesai_model->update_data($ID_Pelanggan, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> Barang service sudah dibayar
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Barang_selesai_controller/index');
    }
}
