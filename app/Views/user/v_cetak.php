<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMB Online| Cetak Kelulusan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/admin/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/dist/admin/css/adminlte.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <i class="fas fa-globe"></i> SELAMAT ANDA DINYATAKAN LULUS (BUKTI RESMI KELULUSAN)
                        <small class="float-right">Dicetak pada: <?= date('d-m-Y'); ?></small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Penerimaan Mahasiswa Baru (PMB) Online</strong><br>
                        Jl. D. I. Pandjaitan<br>
                        Purwokerto, Jawa Tengah<br>
                        Phone: (804) 123-5432<br>
                        Email: pmbOnline@gmail.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <!-- To
                    <address>
                        <strong>John Doe</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (555) 539-1037<br>
                        Email: john.doe@example.com
                    </address> -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <!-- <b>Invoice #007612</b><br>
                    <br>
                    <b>Order ID:</b> 4F3S8J<br>
                    <b>Payment Due:</b> 2/22/2014<br>
                    <b>Account:</b> 968-34567 -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>N0. Pendaftaran</th>
                                <th>NIK</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td> </td>
                                <td><?= $pmb['namalengkap_siswa']; ?></td>
                                <td><?= $pmb['no_pendaftaran']; ?></td>
                                <td><?= $pmb['nik_siswa']; ?></td>
                                <td><?= $pmb['nama_jurusan']; ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <hr>
            <div class="row invoice-info justify-content-end">
                <div class="col-sm-4 invoice-col">
                    Atas Nama
                    <address>
                        <strong>Ketua Panitia Penerimaan Mahasiswa Baru (PMB) Online</strong><br>
                        <br>
                        <br>
                        Ir. Dr. Ali Subagyo, M.T<br>
                        NIP. 18030517
                    </address>
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>