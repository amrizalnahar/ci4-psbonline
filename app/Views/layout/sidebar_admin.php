<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Home'); ?>" class="brand-link">
        <img src="<?= base_url(); ?>/dist/admin/img/pmbonline.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PMB Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url(); ?>/dist/admin/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get('nama_user'); ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item <?= ($currentAdminMenu == 'dashboard') ? 'menu-open' : '' ?>">
                    <a href="<?= base_url('Admin'); ?>" class="nav-link <?= ($currentAdminSubMenu == 'home') ? 'active' : '' ?> ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>

                <li class="nav-item <?= ($currentAdminMenu == 'jurusan') ? 'menu-open' : '' ?>">
                    <a href="<?= base_url('jurusan'); ?>" class="nav-link <?= ($currentAdminSubMenu == 'jurusan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-pen-alt"></i>
                        <p>
                            Jurusan
                        </p>
                    </a>
                </li>

                <li class="nav-item <?= ($currentAdminMenu == 'infopendaftaran') ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= ($currentAdminMenu == 'infopendaftaran') ? 'active' : '' ?> ">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Info Pendaftaran
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">6</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pmb/infopendaftaranMasuk'); ?>" class="nav-link <?= ($currentAdminSubMenu == 'masuk') ? 'active' : '' ?> ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pmb/listDiterima'); ?>" class="nav-link <?= ($currentAdminSubMenu == 'diterima') ? 'active' : '' ?> ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Diterima</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pmb/listdicadangan'); ?>" class="nav-link <?= ($currentAdminSubMenu == 'cadangan') ? 'active' : '' ?> ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cadangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pmb/listDitolak'); ?>" class="nav-link <?= ($currentAdminSubMenu == 'ditolak') ? 'active' : '' ?> ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ditolak</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-header">ADMINISTRATOR</li>
                <li class="nav-item <?= ($currentAdminMenu == 'profiladmin') ? 'menu-open' : '' ?>">
                    <a href="<?= base_url('User'); ?>" class="nav-link  <?= ($currentAdminSubMenu == 'profiladmin') ? 'active' : '' ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Profil Admin
                            <!-- <span class="badge badge-info right">2</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>