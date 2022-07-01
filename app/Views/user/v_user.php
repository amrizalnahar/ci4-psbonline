<?= $this->extend('layout/template_user'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <h4 class="mb-3 text-center">Pendaftaran Mahasiswa Baru Online</h4>

        <div class="card card-success">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="<?= base_url(); ?>/dist/admin/img/pmb1.jfif" alt="Dist Photo 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <!-- <h5 class="card-title text-primary text-white">Card Title</h5> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2">
                            <img class="card-img-top" src="<?= base_url(); ?>/dist/admin/img/pmb2.png" alt="Dist Photo 2">
                            <div class="card-img-overlay d-flex flex-column justify-content-center">
                                <!-- <h5 class="card-title text-white mt-5 pt-2">Card Title</h5> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2">
                            <img class="card-img-top" src="<?= base_url(); ?>/dist/admin/img/pmb3.jfif" alt="Dist Photo 3">
                            <div class="card-img-overlay">
                                <!-- <h5 class="card-title text-primary">Card Title</h5> -->

                            </div>
                        </div>
                    </div>
                </div>
                <td>
                    <a href="<?= base_url('pendaftaran'); ?>"><button type="button" class="btn btn-block btn-success btn-lg"> <strong>DAFTAR</strong></button></a>
                </td>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>