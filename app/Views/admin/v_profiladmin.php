<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Data User</h3>
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
                            <th>Nama user</th>
                            <th>Email user</th>
                            <th>Foto user</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['nama_user']; ?></td>
                                <td><?= $value['email_user']; ?></td>
                                <td class="text-center"><img src="<?= base_url('dist/admin/img/' . $value['foto_user']); ?>" alt="" width="100"></td>
                                <td class="text-center">

                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_user']; ?>"><i class=" far fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_user']; ?>"><i class=" far fa-trash-alt"></i></button>


                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama user</th>
                            <th>Email user</th>
                            <th>Foto user</th>
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
                <h4 class="modal-title">Add user</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('user/insertdata') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama user</label>
                    <input name="nama_user" class="form-control" placeholder=" Masukkan Nama User" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email_user" class="form-control" placeholder=" Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password_user" class="form-control" placeholder=" Masukkan password" required>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto_user" class="form-control" accept="image/*" required>
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
<?php foreach ($user as $key => $value) { ?>

    <div class="modal fade" id="edit<?= $value['id_user']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open_multipart('user/editdata/' . $value['id_user']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama User</label>
                        <input name="nama_user" value="<?= $value['nama_user']; ?>" class="form-control" placeholder=" Masukkan Nama User" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email_user" value="<?= $value['email_user']; ?>" class="form-control" placeholder=" Masukkan Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password_user" value="<?= $value['password_user']; ?>" class="form-control" placeholder=" Masukkan Password" required>
                    </div>
                    <div class="form-group">
                        <label>Ganti Foto</label>
                        <input type="file" name="foto_user" class="form-control" accept="image/*">
                        <img src="<?= base_url('dist/admin/img/' . $value['foto_user']); ?>" width="100px" alt="">
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
<?php foreach ($user as $key => $value) { ?>

    <div class="modal fade" id="delete<?= $value['id_user']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus user</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('user/editdata/' . $value['id_user']) ?>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus user <b><?= $value['nama_user']; ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('user/deletedata/' . $value['id_user']); ?>" class="btn btn-danger">Hapus</a>
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