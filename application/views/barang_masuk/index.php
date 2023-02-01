        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Barang Masuk</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content mb-5">
                <div class="container-fluid">
                    <div class="callout callout-info mx-1">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        Halaman ini berisi semua data barang servisan pelanggan yang belum diperbaiki atau mengantri untuk mendapat giliran.
                    </div>
                    <div class="card card-primary mx-sm-1">
                        <div class="card-header">
                            <h3 class="card-title">DATA BARANG SERVICE</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    <i class="fa fa-plus"></i> Tambah Barang Service
                                </button>
                                <br>

                                <!-- Modal tambah barang service-->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Barang Service</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url() ?>Barang_masuk_controller/tambah_barang" method="POST">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="Nama">Nama Pelanggan</label>
                                                                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama Pelanggan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Alamat">Alamat</label>
                                                                <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat Pelanggan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Nomor_Telepon">Nomor Telepon</label>
                                                                <input type="text" class="form-control" id="Nomor_Telepon" name="Nomor_Telepon" placeholder="Nomor Telepon Pelanggan">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="barang">Barang</label>
                                                                <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang Yang Ingin Di Service">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="keterangan">Keterangan</label>
                                                                <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Yang Terkait Dengan Permasalahan Barang Pelanggan" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="tanggal_perbaikan">Tanggal Perbaikan</label>
                                                                <input type="date" class="form-control" id="tanggal_perbaikan" name="tanggal_perbaikan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <?= $this->session->flashdata('message') ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped table-sm table-hover table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>No. Hp</th>
                                            <th>Nama Barang</th>
                                            <th>Kerusakan</th>
                                            <th>Jadwal Perbaikan</th>
                                            <th>Aksi</th>
                                            <th>Perbaikan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($barang_masuk)) : ?>
                                            <tr>
                                                <td colspan="8">
                                                    <h1 class="text-center">Data Masih Kosong!</h1>
                                                </td>
                                            </tr>
                                        <?php endif; ?>


                                        <?php if (!empty($barang_masuk)) : ?>
                                            <?php $no = 1; ?>
                                            <?php foreach ($barang_masuk as $data) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['Nama'] ?></td>
                                                    <!-- <td><?= $data['Alamat'] ?></td> -->
                                                    <td><?= $data['Nomor_Telepon'] ?></td>
                                                    <td><?= $data['barang'] ?></td>
                                                    <td><?= $data['keterangan'] ?></td>
                                                    <td><?= $data['tanggal_perbaikan'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url() . 'Barang_masuk_controller/detail/' . $data['ID_Pelanggan'] ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                                                        <a href="<?= base_url() . 'Barang_masuk_controller/halamanUpdate/' . $data['ID_Pelanggan'] ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit"></i></a>
                                                        <a href="<?= base_url() . 'Barang_masuk_controller/hapus_barang/' . $data['ID_Pelanggan'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus')" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url() . 'Barang_masuk_controller/perbaikan_barang/' . $data['ID_Pelanggan'] ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="perbaiki"><i class="fa fa-toolbox"></i></a>
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