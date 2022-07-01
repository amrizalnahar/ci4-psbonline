<?= $this->extend('layout/template_user'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container">
        <!-- general form elements -->
        <div class="mb-3">

        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Pendaftaran Calon Mahasiswa Baru</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php echo form_open('pendaftaran/simpanpendaftaran') ?>
            <div class="card-body">

                <?php session()->getFlashdata('errors');
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h5>
              </div>';
                }
                ?>
                <div class="card-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username_siswa" type="text" placeholder="Masukkan Username" autofocus>
                        <p class="text-danger"><?= $validation->hasError('username_siswa') ? $validation->getError('username_siswa') : '' ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" name="namalengkap_siswa" type="text" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>NIK (Nomor Induk Kependudukan)</label>
                        <input class="form-control" name="nik_siswa" type="text" placeholder="Masukkan NIK">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Email</label>
                        <input type="email" name="email_siswa" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email">
                    </div>

                    <div class="card-footer text-center">
                        <input type="submit" value="Daftar" class="btn btn-primary"></input>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.card -->

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();

        });
    }, 3000);
</script>

<?= $this->endSection(); ?>