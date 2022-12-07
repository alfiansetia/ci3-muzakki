<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Bootstrap-4-4.6.0/css/bootstrap.min.css') ?>" />

    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <div class="card mx-auto mt-5" style="max-width: 540px;">
            <div class="card-header">
                Silahkan Login
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('login') ?>">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?= set_value('email') ?>" autofocus>
                        <small class="form-text text-danger"><?php echo form_error('email') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" value="<?= set_value('password') ?>">
                        <small class="form-text text-danger"><?php echo form_error('password') ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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