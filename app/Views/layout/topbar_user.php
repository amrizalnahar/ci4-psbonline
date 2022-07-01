<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="<?= base_url('siswa'); ?>" class="navbar-brand">
            <img src="<?= base_url(); ?>/dist/admin/img/pmbonline.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">PMB Online</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <?php if (session()->get('username_siswa') == "") { ?>
                    <li class="nav-item">
                        <a href="<?= base_url('/'); ?>" class="nav-link">Home</a>
                    </li>
                <?php } else { ?>


                    <li class="nav-item">
                        <a href="<?= base_url('home/statuspendaftaran'); ?>" class="nav-link">Status Pendaftaran</a>
                    </li>
                <?php } ?>

            </ul>


        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item">
                <?php if (session()->get('username_siswa') == "") { ?>

                    <a href="<?= base_url('auth/login_siswa'); ?>" class="nav-link">
                        <i class="fas fa-user"></i> Login
                    </a>

                <?php } else { ?>

            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                    <i class="fas fa_user"></i> <?= session()->get('namalengkap_siswa'); ?>
                </a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="<?= base_url('auth/logout_siswa'); ?>" class="dropdown-item">Logout </a></li>
                    <!-- <li class="dropdown-divider"></li>
                    <li><a href="#" class="dropdown-item">Some other action</a></li> -->
                </ul>
            </li>


        <?php } ?>
        </li>
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
        </ul>
    </div>
</nav>