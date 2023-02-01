<?php 

class Home_model extends CI_Model{

    public function barang_masuk(){
        $this->db->select('count(Nama) as jumlah');
        $this->db->where('kode', 'false');
        $this->db->from('pelanggan');
        $query = $this->db->get();
        return $query->row();
    }

    public function barang_selesai(){
        $this->db->select('count(keterangan) as jumlah');
        $this->db->where('keterangan', 'Belum Lunas');
        $this->db->from('hasil_perbaikan');
        $query = $this->db->get();
        return $query->row();
    }
    
    public function barang_lunas(){
        $this->db->select('count(keterangan) as jumlah');
        $this->db->where('keterangan', 'Lunas');
        $this->db->from('hasil_perbaikan');
        $query = $this->db->get();
        return $query->row();
    }
}