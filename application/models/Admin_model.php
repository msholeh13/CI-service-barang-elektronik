<?php 

class Admin_model extends CI_Model{

    public function get_users(){
        return $this->db->get_where('users', ['role_id' => 2])->result_array();
    }
    
    public function get_user($id){
        return $this->db->get_where('users', ['Username' => $id ])->row_array();
    }

    public function hapusUser($id){
        $this->db->delete('users', array('ID_User' => $id));
    }

    public function edit_data($id)
    {
        $query = $this->db->get_where('users', array('ID_User' => $id));
        return $query->row();
    }

    public function update_data($id, $data)
    {
        $this->db->where('ID_User', $id);
        return $this->db->update('users', $data);
    }

}