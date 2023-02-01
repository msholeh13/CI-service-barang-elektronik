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
                            <h3 class="card-title">DATA BARANG SERVICE</h3>
                        </div>
                        <div class="card-body">
                            <div class="row bg-gradient-info rounded">
                                <div class="col-sm-6">
                                    <div class="form-group" hidden>
                                        <label for="ID_Pelanggan">ID</label>
                                        <input type="text" class="form-control" id="ID_Pelanggan" name="ID_Pelanggan" placeholder="" value="<?= $barang->ID_Pelanggan ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama">Nama Pelanggan</label>
                                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama Pelanggan" value="<?= $barang->Nama ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Alamat">Alamat</label>
                                        <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat Pelanggan" value="<?= $barang->Alamat ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Nomor_Telepon">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="Nomor_Telepon" name="Nomor_Telepon" placeholder="Nomor Telepon Pelanggan" value="<?= $barang->Nomor_Telepon ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_perbaikan">Tanggal Perbaikan</label>
                                        <input type="date" class="form-control" id="tanggal_perbaikan" name="tanggal_perbaikan" value="<?= $barang->tanggal_perbaikan ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="barang">Barang</label>
                                        <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang Yang Ingin Di Service" value="<?= $barang->barang ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Yang Terkait Dengan Permasalahan Barang Pelanggan" rows="8px" disabled><?= $barang->keterangan_pengguna ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row bg-gradient-teal rounded">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Biaya_ganti_alat">Biaya Ganti Alat</label>
                                        <input type="text" class="form-control" id="Biaya_ganti_alat" name="Biaya_ganti_alat" placeholder="Jumlah Biaya Ganti Alat" value="Rp. <?= number_format($barang->Biaya_ganti_alat) ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Biaya_perbaikan">Biaya Perbaikan</label>
                                        <input type="text" class="form-control" id="Biaya_perbaikan" name="Biaya_perbaikan" placeholder="Jumlah Biaya Perbaikan" value="Rp. <?= number_format($barang->Biaya_perbaikan) ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Deskripsi_Hasil">Deskripsi Hasil</label>
                                        <textarea type="text" class="form-control" id="Deskripsi_Hasil" name="Deskripsi_Hasil" placeholder="Deskripsi Hasil Perbaikan Yang Terkait Dengan Permasalahan Barang Pelanggan" rows="8px" disabled><?= $barang->Deskripsi_Hasil ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="total_biaya">Total Biaya</label>
                                        <input type="text" class="form-control" id="total_biaya" name="total_biaya" placeholder="Total Biaya" value="Rp. <?= number_format($barang->total_biaya) ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="<?= base_url() . 'barang_selesai_controller' ?>" class="btn btn-secondary">Kembali</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->