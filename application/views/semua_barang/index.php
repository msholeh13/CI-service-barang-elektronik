        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Semua Barang</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="callout callout-info mx-1">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        Halaman ini berisi data barang servisan pelanggan yang sudah diambil.
                    </div>
                    <div class="card card-primary mx-sm-1">
                        <div class="card-header">
                            <h3 class="card-title">DATA BARANG SERVICE</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Barang</th>
                                            <th>Kerusakan</th>
                                            <th>Jadwal</th>
                                            <th>Hasil Perbaikan</th>
                                            <th>Total Biaya</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($semua_barang)) : ?>
                                            <tr>
                                                <td colspan="9">
                                                    <h1 class="text-center">Data Masih Kosong!</h1>
                                                </td>
                                            </tr>
                                        <?php endif; ?>


                                        <?php if (!empty($semua_barang)) : ?>
                                            <?php $no = 1; ?>
                                            <?php foreach ($semua_barang as $data) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['Nama'] ?></td>
                                                    <td><?= $data['barang'] ?></td>
                                                    <td><?= $data['keterangan_pengguna'] ?></td>
                                                    <td><?= $data['tanggal_perbaikan'] ?></td>
                                                    <td><?= $data['Deskripsi_Hasil'] ?></td>
                                                    <td>Rp. <?= number_format($data['total_biaya']) ?></td>
                                                    <td><?= $data['keterangan'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url() . 'semua_Barang_controller/detail/' . $data['ID_Pelanggan'] ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->