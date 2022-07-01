<?= $this->extend('layout/template_user'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <!-- <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Biodata Calon Mahasiswa Baru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Biodata Calon Mahasiswa Baru</li>
                    </ol>
                </div>
            </div> -->
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
                                <button type="button" class="btn btn-default btn-xs btn-flat" data-toggle="modal" data-target="#editpendaftaran"><i class="fas fa-pencil-alt">Edit</i></button>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-sm-6">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>

                                    <p class="text-muted">
                                        <?= ($siswa['namalengkap_siswa']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $siswa['namalengkap_siswa'] . '</p>' ?>
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> No. Pendaftaran</strong>

                                    <p class="text-muted">
                                        <?= ($siswa['no_pendaftaran']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $siswa['no_pendaftaran'] . '</p>' ?>
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> NIK</strong>

                                    <p class="text-muted">
                                        <?= ($siswa['nik_siswa']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $siswa['nik_siswa'] . '</p>' ?>
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> Email</strong>

                                    <p class="text-muted">
                                        <?= ($siswa['email_siswa']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $siswa['email_siswa'] . '</p>' ?>
                                    </p>


                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="col-sm-6">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i>Jurusan</strong>

                                    <p class="text-muted">
                                        <?= ($siswa['nama_jurusan']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $siswa['nama_jurusan'] . '</p>' ?>
                                    </p>

                                    <hr>
                                    <!-- <strong><i class="fas fa-book mr-1"></i>Jurusan</strong>

                                    <p class="text-muted">
                                        S1 Sistem Informasi
                                    </p>

                                    <hr> -->

                                    <strong><i class="fas fa-book mr-1"></i> Jenis Kelamin</strong>
                                    <?php if ($siswa['jk_siswa'] == 'P') {
                                        $jk = 'Perempuan';
                                    } elseif ($siswa['jk_siswa'] == 'L') {
                                        $jk = 'Laki-laki';
                                    }
                                    ?>
                                    <p class="text-muted"> <?= ($siswa['jk_siswa']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $jk . '</p>' ?></p>

                                    <hr>

                                    <strong><i class="fas fa-book mr-1"></i> Nama Ibu Kandung</strong>

                                    <p class="text-muted">
                                        <?= ($siswa['ibukandung_siswa']) == null ? '<p class="text-danger">Wajib Diisi</p>' : '<p?>' . $siswa['ibukandung_siswa'] . '</p>' ?>
                                    </p>
                                </div>


                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- <div class="text-center">
                            <a href="" class="btn btn-success btn-flat btn-block"> <i class="fas fa-check"></i> Submit</a>
                        </div> -->
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


<!-- Modal Add -->
<div class="modal fade" id="editpendaftaran">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Pendaftaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('siswa/updatependaftaran/' . $siswa['id_siswa']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="namalengkap_siswa" class="form-control" value="<?= $siswa['namalengkap_siswa']; ?>" required>

                </div>
                <div class="form-group">
                    <label>Nomor Pendaftaran</label>
                    <input class="form-control" value="<?= $siswa['no_pendaftaran']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input name="nik_siswa" class="form-control" value="<?= $siswa['nik_siswa']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email_siswa" class="form-control" value="<?= $siswa['email_siswa']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="id_jurusan" id="" class="form-control">
                        <!-- <option value="">- - pilih jurusan- -</option> -->
                        <?php foreach ($jurusan as $key => $value) { ?>
                            <option value="<?= $value['id_jurusan']; ?>" <?= $siswa['id_jurusan'] == $value['id_jurusan'] ? 'selected' : '' ?>><?= $value['nama_jurusan']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk_siswa" id="" class="form-control">
                        <option value="L" <?= $siswa['jk_siswa'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                        <option value="P" <?= $siswa['jk_siswa'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Ibu Kandung</label>
                    <input name="ibukandung_siswa" class="form-control" value="<?= $siswa['ibukandung_siswa']; ?>" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    window.setTimeout(function() {
        $(".alert-success").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();

        });
    }, 3000);
</script>
<?= $this->endSection(); ?>