<?= $this->extend('layout/template_user'); ?>
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
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h3 class="card-title">Identitas Calon Mahasiswa Baru</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-default btn-xs btn-flat"><i class="fas fa-pencil-alt">Edit</i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>

                                    <p class="text-muted">
                                        Muhamad Amrizal Nahar
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> Jurusan</strong>

                                    <p class="text-muted">
                                        S1 Sistem Informasi
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> No. Pendaftaran</strong>

                                    <p class="text-muted">
                                        342234234243232
                                    </p>

                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> NIK</strong>

                                    <p class="text-muted">
                                        33271225884905058
                                    </p>


                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="col-sm-6">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> TTL</strong>

                                    <p class="text-muted">
                                        Pemalang, 25/11/1998
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Jenis Kelamin</strong>

                                    <p class="text-muted">Laki-Laki</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Email/No. Telp</strong>

                                    <p class="text-muted">
                                        <span class="tag tag-danger">Email /</span>
                                        <span class="tag tag-success"> 0823233424242</span>

                                    </p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn btn-success btn-flat btn-block"> <i class="fas fa-check"></i> Submit</a>
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
<?= $this->endSection(); ?>