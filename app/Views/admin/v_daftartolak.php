<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mahasiswa Ditolak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Mahasiswa Ditolak</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
        <?php
        if (session()->getFlashdata('terima')) {
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('terima');
            echo '</h5>
          </div>';
        }
        ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa Ditolak</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>No. Pendaftaran</th>
                            <th>Jurusan</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no = 1;
                            foreach ($pmb as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['namalengkap_siswa']; ?></td>
                            <td><?= $value['no_pendaftaran']; ?></td>
                            <td><?= $value['nama_jurusan']; ?></td>
                            <td class="text-center">


                                <a href="<?= base_url('pmb/infodetailSiswaterima/' . $value['id_siswa']); ?>" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i> Detail</a>


                            </td>
                        </tr>
                    <?php } ?>
                    </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>No. Pendaftaran</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.content -->
    </section>
</div>
<?= $this->endSection(); ?>