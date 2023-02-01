<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {

        if($this->session->userdata('username')){
            if($this->session->userdata('role_id') == 1){
                redirect('Admin_controller/index');
            }else{
                redirect('Home');
            }
        }

        $this->form_validation->set_rules('Username', 'Username', 'required|trim');
        $this->form_validation->set_rules('Password', 'Username', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "serviceElektro | Login";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {
            $username = $this->input->post('Username');
            $password = $this->input->post('Password');

            $user = $this->Auth_model->login($username);

            // jika user di db ada
            if ($user) {
                // jika user aktif
                if($user['is_active'] == 1){
                    // jika password ada
                    if(password_verify($password, $user['Password'])){
                        $data = [
                            'username' => $user['Username'],
                            'role_id' => $user['role_id'],
                            'status' => 'login'
                        ];
                        $this->session->set_userdata($data);

                        if($user['role_id'] == 1){
                            redirect('Admin_controller/index');

                        }else if($user['role_id'] == 2){
                            redirect('Home');
                        }

                    }else{
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> password salah
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('Auth_controller/index');
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> akun ini belum aktif
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('Auth_controller/index');
                }

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> username tidak ada
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('Auth_controller/index');
            }
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('Nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('Username', 'Username', 'required|trim|is_unique[users.Username]', [
            'is_unique' => 'Username sudah terdaftar',
        ]);
        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email|is_unique[users.Email]', [
            'is_unique' => 'Email sudah terdaftar',
        ]);
        $this->form_validation->set_rules('Password', 'Password', 'required|trim|min_length[3]|matches[Ulang_password]', [
            'matches' => 'Password tidak sama dengan Ulang password',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('Ulang_password', 'Ulang password', 'required|trim|matches[Password]', [
            'matches' => 'Password tidak sama dengan Password',
        ]);


        if ($this->form_validation->run() == false) {
            $data['judul'] = "serviceElektro | Registrasi";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'Nama' => htmlspecialchars($this->input->post('Nama', true)),
                'Username' => htmlspecialchars($this->input->post('Username', true)),
                'Email' => htmlspecialchars($this->input->post('Email', true)),
                'Password' => password_hash($this->input->post('Password', true), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> anda berhasil buat akun baru
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('Auth_controller/index');
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
        anda telah logout
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('auth_controller');
    }
}
