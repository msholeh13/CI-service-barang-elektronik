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
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary mx-sm-1">
                <div class="card-header">
                    <h3 class="card-title">DATA BARANG SERVICE</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url() . 'barang_selesai_controller/update' ?>" method="POST">

                        <div class="row bg-gradient-teal rounded">
                            <div class="col-sm-6">
                                <div class="form-group" hidden>
                                    <label for="ID_Pelanggan">ID</label>
                                    <input type="text" class="form-control" id="ID_Pelanggan" name="ID_Pelanggan" placeholder="" value="<?= $barang->ID_Pelanggan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Biaya_ganti_alat">Biaya Ganti Alat</label>
                                    <input type="number" class="form-control" id="Biaya_ganti_alat" name="Biaya_ganti_alat" onkeyup="sum()" placeholder="Jumlah Biaya Ganti Alat" value="<?= ($barang->Biaya_ganti_alat) ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Biaya_perbaikan">Biaya Perbaikan</label>
                                    <input type="number" class="form-control" id="Biaya_perbaikan" name="Biaya_perbaikan" onkeyup="sum()" placeholder="Jumlah Biaya Perbaikan" value="<?= ($barang->Biaya_perbaikan) ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Deskripsi_Hasil">Deskripsi Hasil</label>
                                    <textarea type="text" class="form-control" id="Deskripsi_Hasil" name="Deskripsi_Hasil" placeholder="Deskripsi Hasil Perbaikan Yang Terkait Dengan Permasalahan Barang Pelanggan" rows="8px"><?= $barang->Deskripsi_Hasil ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_biaya">Total Biaya</label>
                                    <input type="number" class="form-control" id="total_biaya" name="total_biaya" placeholder="Total Biaya" value="<?= ($barang->total_biaya) ?>" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="<?= base_url() . 'barang_selesai_controller' ?>" class="btn btn-secondary">Kembali</a>
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