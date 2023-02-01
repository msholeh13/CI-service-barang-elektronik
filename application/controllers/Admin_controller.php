<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        if ( $this->session->userdata('status') != 'login' || $this->session->userdata('role_id') != 1 ) {
            redirect('Home/blocked');
        }
        $this->load->model('Admin_model');

    }
    public function index()
    {
        $data['judul'] = 'Beranda Admin';
        $data['user'] = $this->Admin_model->get_user($this->session->userdata('username'));
        $data['users'] = $this->Admin_model->get_users();
        $this->load->view('admin/index', $data);
    }

    public function hapusUser($id){
        $this->Admin_model->hapusUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> berhasil hapus User
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Admin_controller/index');
    }

    public function halamanUpdate($id)
    {
        $data['user'] = $this->Admin_model->get_user($this->session->userdata('username'));
        $data['data'] = $this->Admin_model->edit_data($id);
        $data['judul'] = "Ubah Data User";
        $this->load->view('admin/updateUser', $data);
    }
    
    public function update()
    {
        $id = $this->input->post('ID_User');
        $data = [
            'Nama' => $this->input->post('Nama'),
            'is_active' => $this->input->post('is_active1')
        ];

        $this->Admin_model->update_data($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> Deskripsi data sukses di update
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Admin_controller/index');
    }
    
}
