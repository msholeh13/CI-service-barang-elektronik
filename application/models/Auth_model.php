<?php 

class Auth_model extends CI_Model{

    public function login($username){
        return $this->db->get_where('users',['Username' => $username])->row_array();
    }
    
}