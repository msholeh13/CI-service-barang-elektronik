<?php
class Barang_masuk_model extends CI_Model
{
    public function get_all_pelanggan()
    {
        $query = $this->db->select('*')->from('pelanggan')->where('kode', 'false')->get();
        return $query->result_array();
    }

    // Fungsi untuk menampilkan data barang berdasarkan ID
    public function view_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('ID_Pelanggan', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function tambah_barang()
    {
        $tambah_barang = [
            "Nama" => $this->input->post('Nama'),
            "Alamat" => $this->input->post('Alamat'),
            "Nomor_Telepon" => $this->input->post('Nomor_Telepon'),
            "barang" => $this->input->post('barang'),
            "keterangan" => $this->input->post('keterangan'),
            "tanggal_perbaikan" => $this->input->post('tanggal_perbaikan'),
            'kode' => 'false'
        ];

        $simpan_barang = $this->db->insert('pelanggan', $tambah_barang);
        return $simpan_barang;
    }

    public function hapus_barang($id)
    {
        $this->db->delete('pelanggan', array('ID_Pelanggan' => $id));
    }

    public function edit_data($id)
    {
        $query = $this->db->get_where('pelanggan', array('ID_Pelanggan' => $id));
        return $query->row();
    }

    public function update_data($id, $data)
    {
        $this->db->where('ID_Pelanggan', $id);
        return $this->db->update('pelanggan', $data);
    }


    
    public function insert_hasil_perbaikan()
    {
        $biaya_alat = $this->input->post('Biaya_ganti_alat');
        $biaya_perbaikan = $this->input->post('Biaya_perbaikan');
        $total_biaya = $biaya_alat + $biaya_perbaikan;
        
        $insert = [
            "ID_Pelanggan" => $this->input->post('ID_Pelanggan'),
            "Deskripsi_Hasil" => $this->input->post('Deskripsi_Hasil'),
            "Biaya_ganti_alat" => $biaya_alat,
            "Biaya_perbaikan" => $biaya_perbaikan,
            "total_biaya" => $total_biaya,
            'keterangan' => 'Belum Lunas'
        ];

        $simpan_hasil = $this->db->insert('hasil_perbaikan', $insert);  
        return $simpan_hasil;
    }
}
