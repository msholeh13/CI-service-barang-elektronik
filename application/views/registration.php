<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?= base_url('auth_controller/registrasi') ?>" class="h1"><b>Service</b>ELEKTRO</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Silahkan Isi Data Registrasi</p>

            <form action="<?= base_url().'Auth_controller/registrasi' ?>" method="POST">
                <div class="input-group mb-3">
                    <?= form_error("Nama", "<div class='input-group'><small class='text-danger'>", "</small></div>") ?>
                    <input type="text" class="form-control" name="Nama" placeholder="Nama lengkap" value="<?= set_value('Nama') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= form_error("Username", "<div class='input-group'><small class='text-danger'>", "</small></div>") ?>
                    <input type="text" class="form-control" name="Username" placeholder="Username" value="<?= set_value('Username') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <?= form_error("Email", "<div class='input-group'><small class='text-danger'>", "</small></div>") ?>
                    <input type="text" class="form-control" name="Email" placeholder="Email" value="<?= set_value('Email') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
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
                    <?= form_error("Ulang_password", "<div class='input-group'><small class='text-danger'>", "</small></div>") ?>
                    <input type="password" class="form-control" name="Ulang_password" placeholder="Ulang password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class=" text-center mx-auto">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </form>

            <hr>

            <p class="text-center">
                <a href="<?= base_url() ?>">Saya sudah punya akun</a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->