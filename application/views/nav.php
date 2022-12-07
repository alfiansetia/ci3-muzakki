<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="<?= base_url(); ?>">
        <img src="https://getbootstrap.com/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        <b>MUZAKKI</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= $title == 'Dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">Dashboard</a>
            </li>
            <li class="nav-item <?= $title == 'Data Penerimaan' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('terima'); ?>">Penerimaan</a>
            </li>
            <li class="nav-item <?= $title == 'Data Penyaluran' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('salur'); ?>">Penyaluran</a>
            </li>
            <li class="nav-item dropdown <?= $title == 'Data Muzakki' || $title == 'Data Mustahik' ? 'active' : '' ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Data
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item <?= $title == 'Data Muzakki' ? 'active' : '' ?>" href="<?= base_url('muzakki'); ?>">Muzakki</a>
                    <a class="dropdown-item <?= $title == 'Data Mustahik' ? 'active' : '' ?>" href="<?= base_url('mustahik'); ?>">Mustahik</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="btn btn-sm btn-danger" href="<?= base_url('login/logout'); ?>" onclick="return confirm('Apakah yakin ingin logout ?');">Logout</a>
            </li>

        </ul>
    </div>
</nav>