<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="<?= base_url(); ?>">
        <img src="https://getbootstrap.com/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        <b>MUZAKKI</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= $title == 'Dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">Dashboard</a>
            </li>
            <li class="nav-item <?= $title == 'Data Penerimaan' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('terima'); ?>">Penerimaan</a>
            </li>
            <li class="nav-item <?= $title == 'Data Penyaluran' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('salur'); ?>">Penyaluran</a>
            </li>
            <li class="nav-item dropdown <?= $title == 'Data Muzakki' || $title == 'Data Mustahik' || $title == 'Data User' ? 'active' : '' ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Data
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item <?= $title == 'Data Muzakki' ? 'active' : '' ?>" href="<?= base_url('muzakki'); ?>">Muzakki</a>
                    <a class="dropdown-item <?= $title == 'Data Mustahik' ? 'active' : '' ?>" href="<?= base_url('mustahik'); ?>">Mustahik</a>
                    <a class="dropdown-item <?= $title == 'Data User' ? 'active' : '' ?>" href="<?= base_url('user'); ?>">User</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="30" height="30" class="rounded-circle">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Password</a>
                    <a class="dropdown-item" href="<?= base_url('login/logout'); ?>" onclick="return confirm('Apakah yakin ingin logout ?');">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav> -->

<nav class="navbar navbar-expand-md navbar-light navbar-white bg-success">
    <a href="<?= base_url(''); ?>" class="navbar-brand">
        <img src="https://getbootstrap.com/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>MUZAKKI</b></span>
    </a>
    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
            <li class="nav-item <?= $title == 'Dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">Dashboard</a>
            </li>
            <li class="nav-item <?= $title == 'Data Penerimaan' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('terima'); ?>">Penerimaan</a>
            </li>
            <li class="nav-item <?= $title == 'Data Penyaluran' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('salur'); ?>">Penyaluran</a>
            </li>
            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?= $title == 'Data Muzakki' || $title == 'Data Mustahik' || $title == 'Data User' ? 'active' : '' ?>">Data</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item <?= $title == 'Data Muzakki' ? 'active' : '' ?>" href="<?= base_url('muzakki'); ?>">Muzakki</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item <?= $title == 'Data Mustahik' ? 'active' : '' ?>" href="<?= base_url('mustahik'); ?>">Mustahik</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item <?= $title == 'Data User' ? 'active' : '' ?>" href="<?= base_url('user'); ?>">User</a></li>
                    <li class="dropdown-divider"></li>
                </ul>
            </li>
        </ul>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline"><?= $this->session->userdata('nama') ?></span>
                </a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li class="dropdown-divider"></li>
                    <li><a href="<?= base_url('settings/profile') ?>" class="dropdown-item">Profile</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="<?= base_url('login/logout'); ?>" onclick="return confirm('Apakah yakin ingin logout ?');">Logout</a></li>
                    <li class="dropdown-divider"></li>
                </ul>
            </li>
        </ul>
    </div>


</nav>