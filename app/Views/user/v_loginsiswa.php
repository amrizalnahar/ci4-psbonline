<?= $this->extend('layout/template_user'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-3">

                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Login Calon Mahasiswa Baru</h3>
                    </div>

                    <div class="card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">Sign in to start your session</p>

                            <?php
                            $errors = session()->getFlashdata('errors');
                            if (!empty($errors)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <?php foreach ($errors as $error) : ?>
                                            <li><?= esc($error) ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php } ?>

                            <?php if (session()->getFlashdata('pesan')) {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo session()->getFlashdata('pesan');
                                echo '</div>';
                            }  ?>

                            <?php echo form_open('/auth/cek_login_siswa') ?>
                            <div class="forn-group">
                                <p class="text-danger">*) NIK sebagai password</p>
                            </div>

                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username_siswa" class="form-control" placeholder="Masukkan Username">

                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password_siswa" class="form-control" placeholder="Password">

                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                            <?php echo form_open() ?>

                        </div>
                        <!-- /.login-card-body -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
<?= $this->endSection(); ?>