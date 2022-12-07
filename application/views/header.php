<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <title><?= $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="https://getbootstrap.com/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            APP
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= $title == 'Data Murid' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= base_url('murid'); ?>">Murid</a>
                </li>
                <li class="nav-item <?= $title == 'Data Dosen' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= base_url('dosen'); ?>">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/logout'); ?>" onclick="return confirm('Apakah yakin ingin logout ?');">Logout</a>
                </li>

            </ul>
        </div>
    </nav>