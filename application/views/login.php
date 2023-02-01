
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>Service</b>ELEKTRO</a>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('message') ?>

                <form action="<?= base_url() ?>" method="post">
                    <div class="input-group mb-3">
                        <?= form_error("Username", "<div class='input-group'><small class='text-danger'>", "</small></div>") ?>
                        <input type="text" class="form-control" name="Username" placeholder="Username" value="<?= set_value('Username') ?>" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <?= form_error("Password", "<div class='input-group'><small class='text-danger'>", "</small></div>") ?>
                        <input type="password" class="form-control" name="Password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>

                <hr>

                <p class="mb-0 text-center">
                    <a href="<?= base_url('auth_controller/registrasi') ?>" class="text-center">Registrasi</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
