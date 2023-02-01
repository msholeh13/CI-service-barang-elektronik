<?php 

function cek_login(){

    $ci = get_instance();

    if(!$ci->session->userdata('username')){
        $ci->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> login dulu lah
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
        redirect('auth_controller');
    }
    else{
        // $username = $ci->session->userdata('username');
        // $role_id = $ci->session->userdata('role_id');
        // // $url = $ci->Admin_controller;

        // $queryUser = $ci->db->get_where('users', ['Username' => $username])->row_array();
        // $role_idDB = $queryUser['role_id'];
        
        
        // if($role_idDB != 1){
        //     redirect('Home/blocked');
        // }
    }
    

    function check_access($id){
        $ci = get_instance();
        
        $result = $ci->db->get_where('users',['ID_User' => $id])->row();
        // print_r($result); die;
        if($result->is_active != 0){
            return true;
            // return "checked='checked'";
        }
    }
}
