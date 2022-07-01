<?= $this->extend('layout/template_user'); ?>
<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <!-- /.card-header -->
        <div class="card-body">
            <?php if ($pmb['status_pmb'] == '0') { ?>
                <div class="col-sm-12">
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-info"></i> Informasi!</h5>
                        Belum ada informasi kelulusan, Mohon bersabar
                    </div>
                </div>
            <?php } else if ($pmb['status_pmb'] == '1') { ?>
                <div class="col-sm-12">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> SELAMAT!</h5>
                        Anda Dinyatakan Lulus!!
                        <a href="<?= base_url('home/cetakkelulusan'); ?>">Cetak Kelulusan</a>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-sm">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> informasi!</h5>
                        Mohon maaf anda Belum Lulus
                    </div>
                </div>
            <?php } ?>

        </div>
        <!-- /.card-body -->
    </div>
</div>

<?= $this->endSection(); ?>