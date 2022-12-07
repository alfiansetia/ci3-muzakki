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
    <div class="container">
        <div class="card mx-auto mt-5" style="max-width: 540px;">
            <div class="card-header">
                Silahkan Login
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('login') ?>">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email') ?>" autofocus>
                        <small class="form-text text-danger"><?php echo form_error('email') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="<?= set_value('password') ?>">
                        <small class="form-text text-danger"><?php echo form_error('password') ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

</body>

<?php if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
} ?>

</html>