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
                    <form action="<?= base_url() . 'Barang_masuk_controller/update' ?>" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group" hidden>
                                    <label for="ID_Pelanggan">ID</label>
                                    <input type="text" class="form-control" id="ID_Pelanggan" name="ID_Pelanggan" placeholder="" value="<?= $barang->ID_Pelanggan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama Pelanggan" value="<?= $barang->Nama ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat Pelanggan" value="<?= $barang->Alamat ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Nomor_Telepon">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="Nomor_Telepon" name="Nomor_Telepon" placeholder="Nomor Telepon Pelanggan" value="<?= $barang->Nomor_Telepon ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_perbaikan">Tanggal Perbaikan</label>
                                    <input type="date" class="form-control" id="tanggal_perbaikan" name="tanggal_perbaikan" value="<?= $barang->tanggal_perbaikan ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="barang">Barang</label>
                                    <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang Yang Ingin Di Service" value="<?= $barang->barang ?>">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Yang Terkait Dengan Permasalahan Barang Pelanggan" rows="8px"><?= $barang->keterangan ?></textarea>
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