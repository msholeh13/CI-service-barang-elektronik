<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Pelanggan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mb-5">
        <div class="container-fluid">
            <div class="card card-primary mx-sm-1">
                <div class="card-header">
                    <h3 class="card-title">DATA BARANG YANG SUDAH DI SERVICE</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url() . 'barang_masuk_controller/proses_barang_selesai/' ?>" method="POST">
                        <div class="row bg-gradient-info rounded" >
                            <div class="col-sm-6">
                                <div class="form-group" hidden>
                                    <label for="ID_Pelanggan">ID</label>
                                    <input type="text" class="form-control" id="ID_Pelanggan" name="ID_Pelanggan" placeholder="" value="<?= $perbaikan->ID_Pelanggan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama Pelanggan" value="<?= $perbaikan->Nama ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat Pelanggan" value="<?= $perbaikan->Alamat ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Nomor_Telepon">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="Nomor_Telepon" name="Nomor_Telepon" placeholder="Nomor Telepon Pelanggan" value="<?= $perbaikan->Nomor_Telepon ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_perbaikan">Tanggal Perbaikan</label>
                                    <input type="date" class="form-control" id="tanggal_perbaikan" name="tanggal_perbaikan" value="<?= $perbaikan->tanggal_perbaikan ?>" disabled>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="barang">Barang</label>
                                    <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang Yang Ingin Di Service" value="<?= $perbaikan->barang ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Yang Terkait Dengan Permasalahan Barang Pelanggan" rows="8px" disabled><?= $perbaikan->keterangan ?></textarea>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row bg-gradient-teal rounded">
                            <div class="col-sm-6">
                            <div class="form-group">
                                    <label for="Biaya_ganti_alat">Biaya Ganti Alat</label>
                                    <input type="number" class="form-control" id="Biaya_ganti_alat" name="Biaya_ganti_alat" onkeyup="sum()" placeholder="Jumlah Biaya Ganti Alat">
                                </div>
                                <div class="form-group">
                                    <label for="Biaya_perbaikan">Biaya Perbaikan</label>
                                    <input type="number" class="form-control" id="Biaya_perbaikan" name="Biaya_perbaikan" onkeyup="sum()" placeholder="Jumlah Biaya Perbaikan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Deskripsi_Hasil">Deskripsi Hasil</label>
                                    <textarea type="text" class="form-control" id="Deskripsi_Hasil" name="Deskripsi_Hasil" placeholder="Deskripsi Hasil Perbaikan Yang Terkait Dengan Permasalahan Barang Pelanggan" rows="8px"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_biaya">Total Biaya</label>
                                    <input type="number" class="form-control" id="total_biaya" name="total_biaya" placeholder="Total Biaya" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="<?= base_url() . 'barang_masuk_controller' ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->