<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Pembayaran</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mb-5">
        <!-- Main content -->
        <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h4>
                        <i class="fas fa-globe"></i> Service Barang Elektronik
                        <small class="float-right"><?= date('d-m-Y'); ?></small>
                    </h4>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    Dari
                    <address>
                        <strong>ServiceElektro</strong><br>
                        Klaten Utara, Klaten<br>
                        Phone: 0851-2354-3212<br>
                        Email: info@gmail.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    Kepada
                    <address>
                        <strong><?= $bayar->Nama ?></strong><br>
                        <?= $bayar->Alamat ?><br>
                        <?= $bayar->Nomor_Telepon ?><br>
                        Email: ---
                    </address>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Kerusakan</th>
                                <th>Perbaikan</th>
                                <th>Tanggal Perbaikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><?= $bayar->barang ?></td>
                                <td><?= $bayar->keterangan_pengguna ?></td>
                                <td><?= $bayar->Deskripsi_Hasil ?></td>
                                <td><?= $bayar->tanggal_perbaikan ?></td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                    <p>GARANSI</p>

                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Garansi selama 1 bulan setelah tanggal perbaikan. Silahkan menunjukkan bukti kuitansi ini kepada bengkel kami.
                    </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                    <p class="lead">Biaya Total</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Biaya Sparepart</th>
                                <td>Rp. <?= number_format($bayar->Biaya_ganti_alat) ?></td>
                            </tr>
                            <tr>
                                <th>Biaya Perbaikan</th>
                                <td>Rp. <?= number_format($bayar->Biaya_perbaikan) ?></td>
                            </tr>
                            <tr>
                                <th>Total Biaya</th>
                                <td>Rp. <?= number_format($bayar->total_biaya) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-12">
                    <form action="<?= base_url(). 'barang_selesai_controller/proses_bayar/' ?>" method="POST">
                        <div hidden>
                            <label for="ID_Pelanggan">ID : </label>
                            <input type="text" name="ID_Pelanggan" id="ID_Pelanggan" value="<?= $bayar->ID_Pelanggan ?>">
                        </div>

                        <a href="<?= base_url() . 'barang_selesai_controller' ?>" class="btn btn-secondary">Kembali</a>
                        
                        <button type="submit" class="btn btn-success float-right ml-2"><i class="far fa-credit-card"></i> Submit Pembayaran</button>
                        <button type="button" class="btn btn-primary float-right" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.invoice -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->