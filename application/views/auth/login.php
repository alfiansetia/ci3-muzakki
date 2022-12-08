<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Bootstrap-4-4.6.0/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>" />

    <title><?= $title ?></title>
</head>

<!-- <body> -->

<body class="hold-transition login-page" style="background: url('<?= base_url('assets/images/bg.svg') ?>')">
    <div class="login-box">
        <div class="login-logo">
            <a><img src="<?= base_url('assets/images/logo-depag.png') ?>" width="100px"></a>
        </div>
        <div class="card">
            <div class="card-header text-center" style="background: #034a0a;color: #fff;">
                SILAHKAN LOGIN
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Masukkan username & password anda</p>
                <form method="POST" action="<?= base_url('login') ?>">
                    <div class="form-group mb-3">
                        <input id="email" type="email" class="form-control " name="email" value="<?= set_value('email') ?>" autocomplete="email" autofocus placeholder="Email">
                        <small class="form-text text-danger"><?php echo form_error('email') ?></small>
                    </div>

                    <div class="form-group mb-3">
                        <input id="password" type="password" class="form-control " name="password" autocomplete="current-password" placeholder="Password">
                        <small class="form-text text-danger"><?php echo form_error('password') ?></small>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
                <hr>
                <p class="mt-2 text-center">
                    <a href="<?= base_url('') ?>">Kembali halaman utama</a> <br>
                    Copyright &copy; <?= date('Y') ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script type="text/javascript" src="<?= base_url('assets/jQuery-3.6.0/jquery-3.6.0.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/Bootstrap-4-4.6.0/js/bootstrap.min.js') ?>"></script>


</body>

<?php if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
} ?>

</html>