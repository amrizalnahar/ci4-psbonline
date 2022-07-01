<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jurusan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Jurusan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
        <?php
        if (session()->getFlashdata('tambah')) {
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('tambah');
            echo '</h5>
          </div>';
        }
        ?>
        <?php
        if (session()->getFlashdata('edit')) {
            echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('edit');
            echo '</h5>
          </div>';
        }
        ?>
        <?php
        if (session()->getFlashdata('delete')) {
            echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('delete');
            echo '</h5>
          </div>';
        }
        ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Jurusan</h3>
                <div class="card-tools">
                    <button class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Tambah</button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($jurusan as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['nama_jurusan']; ?></td>
                                <td class="text-center">

                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_jurusan']; ?>"><i class=" far fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_jurusan']; ?>"><i class=" far fa-trash-alt"></i></button>


                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Jurusan</th>
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

<!-- Modal Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Jurusan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('jurusan/insertdata') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Jurusan</label>
                    <input name="jurusan" class="form-control" placeholder=" Masukkan Jurusan" required>
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

<!-- Modal Edit -->
<?php foreach ($jurusan as $key => $value) { ?>

    <div class="modal fade" id="edit<?= $value['id_jurusan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Jurusan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('jurusan/editdata/' . $value['id_jurusan']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input name="jurusan" value="<?= $value['nama_jurusan']; ?>" class="form-control" placeholder=" Masukkan Jurusan" required>
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
<?php } ?>
<!-- /.modal -->

<!-- Modal Edit -->
<?php foreach ($jurusan as $key => $value) { ?>

    <div class="modal fade" id="delete<?= $value['id_jurusan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Jurusan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('jurusan/editdata/' . $value['id_jurusan']) ?>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus Jurusan <b><?= $value['nama_jurusan']; ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('jurusan/deletedata/' . $value['id_jurusan']); ?>" class="btn btn-danger">Hapus</a>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->
<?= $this->endSection(); ?>