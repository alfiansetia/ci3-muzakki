<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/datatables.min.css') ?>">
    <title><?= $title ?></title>
</head>

<body>
    <?php $this->load->view('nav') ?>

    <?= $contents ?>

    <script src="<?= base_url('assets/datatables.min.js') ?>"></script>

</body>

<?php if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
} ?>

</html>