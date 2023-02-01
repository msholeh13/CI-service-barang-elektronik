<?php 

class Barang_selesai_model extends CI_Model{
    
    public static $sql ="hasil_perbaikan.ID_Hasil_Perbaikan as ID_Hasil_Perbaikan,
                hasil_perbaikan.ID_Pelanggan as ID_Pelanggan,
                hasil_perbaikan.Deskripsi_Hasil as Deskripsi_Hasil,
                hasil_perbaikan.Biaya_ganti_alat as Biaya_ganti_alat,
                hasil_perbaikan.Biaya_perbaikan as Biaya_perbaikan,
                hasil_perbaikan.total_biaya as total_biaya,
                hasil_perbaikan.keterangan as keterangan,
                pelanggan.ID_Pelanggan as ID_Pelanggan,
                pelanggan.Nama as Nama,
                pelanggan.Alamat as Alamat,
                pelanggan.Nomor_Telepon as Nomor_Telepon,
                pelanggan.barang as barang,
                pelanggan.keterangan as keterangan_pengguna,
                pelanggan.tanggal_perbaikan as tanggal_perbaikan,
                pelanggan.kode as kode";

    public function get_all_hasil_perbaikan (){

        $this->db->select(self::$sql);
        $this->db->from('hasil_perbaikan');
        $this->db->join('pelanggan', 'pelanggan.ID_Pelanggan = hasil_perbaikan.ID_Pelanggan');
        $this->db->where('hasil_perbaikan.keterangan', 'Belum Lunas');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function view_by_id($id)
    {
        $this->db->select(self::$sql);
        $this->db->from('hasil_perbaikan');
        $this->db->join('pelanggan', 'pelanggan.ID_Pelanggan = hasil_perbaikan.ID_Pelanggan');
        $this->db->where('hasil_perbaikan.ID_Pelanggan', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function edit_data($id)
    {
        $query = $this->db->get_where('hasil_perbaikan', array('ID_Pelanggan' => $id));
        return $query->row();
    }

    public function update_data($id, $data)
    {
        $this->db->where('ID_Pelanggan', $id);
        return $this->db->update('hasil_perbaikan', $data);
    }
}