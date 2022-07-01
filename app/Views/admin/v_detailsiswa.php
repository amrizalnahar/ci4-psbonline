<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Biodata Calon Mahasiswa Baru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Biodata Calon Mahasiswa Baru</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <!-- About Me Box -->
                    <div class="col-sm-12">
                        <?php if (session()->get('pesan')) {
                            echo '<div class="alert alert-success">';
                            echo session()->get('pesan');
                            echo '</div>';
                        } ?>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h3 class="card-title">Identitas Calon Mahasiswa Baru</h3>

                            <div class="card-tools">
                                <a href="<?= base_url('pmb/infopendaftaranMasuk'); ?>">Kembali</a>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>

                                    <p class="text-muted">
                                        <?= $pmb['namalengkap_siswa']; ?>
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> No. Pendaftaran</strong>

                                    <p class="text-muted">
                                        <?= $pmb['no_pendaftaran']; ?>
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> NIK</strong>

                                    <p class="text-muted">
                                        <?= $pmb['nik_siswa']; ?>
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> Email</strong>

                                    <p class="text-muted">
                                        <?= $pmb['email_siswa']; ?>
                                    </p>


                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="col-sm-6">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i>Jurusan</strong>

                                    <p class="text-muted">
                                        <?= $pmb['nama_jurusan']; ?>
                                    </p>

                                    <hr>
                                    <!-- <strong><i class="fas fa-book mr-1"></i>Jurusan</strong>

                                    <p class="text-muted">
                                        S1 Sistem Informasi
                                    </p>

                                    <hr> -->

                                    <strong><i class="fas fa-book mr-1"></i> Jenis Kelamin</strong>

                                    <?php if ($pmb['jk_siswa'] == 'P') {
                                        $jk = 'Perempuan';
                                    } elseif ($pmb['jk_siswa'] == 'L') {
                                        $jk = 'Laki-laki';
                                    }
                                    ?>
                                    <p class="text-muted"> <?= ($pmb['jk_siswa']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $jk . '</p>' ?></p>

                                    <hr>

                                    <strong><i class="fas fa-book mr-1"></i> Nama Ibu Kandung</strong>

                                    <p class="text-muted">
                                        <?= ($pmb['ibukandung_siswa']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $pmb['ibukandung_siswa'] . '</p>' ?>
                                    </p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.Content Wrapper-->


<script>
    window.setTimeout(function() {
        $(".alert-success").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();

        });
    }, 3000);
</script>
<?= $this->endSection(); ?>