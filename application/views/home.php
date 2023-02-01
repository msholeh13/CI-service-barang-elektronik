        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="callout callout-info mx-1 col-lg-9">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        <ul>
                            <li><strong>Barang Masuk</strong> merupakan barang dari pelanggan yang menunggu antrian untuk diservice</li>
                            <li><strong>Barang Selesai</strong> merupakan barang dari pelanggan yang sudah selesai diservice tetapi belum diambil</li>
                            <li><strong>Semua Barang</strong> merupakan barang dari pelanggan yang sudah selesai diservice dan sudah diambil</li>
                        </ul>
                    </div>
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= $barang_masuk->jumlah ?></h3>

                                    <p>Barang Masuk</p>
                                </div>
                                <div class="icon">
                                    <!-- <i class="ion ion-bag"></i> -->
                                    <i class="ion ion-android-warning"></i>
                                </div>
                                <a href="<?= base_url() ?>barang_masuk_controller/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $barang_selesai->jumlah ?></h3>

                                    <p>Barang Berhasil di Perbaiki</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?= base_url() ?>barang_selesai_controller/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= $semua_barang->jumlah ?></h3>

                                    <p>Jumlah Semua barang</p>
                                </div>
                                <div class="icon">
                                    <!-- <i class="ion ion-person-add"></i> -->
                                    <i class="ion ion-ios-people"></i>
                                </div>
                                <a href="<?= base_url() ?>semua_barang_controller/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->



                    
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->