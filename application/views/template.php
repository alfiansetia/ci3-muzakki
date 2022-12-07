<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> -->

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Bootstrap-4-4.6.0/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/DataTables-1.13.1/css/dataTables.bootstrap4.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Buttons-2.3.3/css/buttons.bootstrap4.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/DateTime-1.2.0/css/dataTables.dateTime.min.css') ?>" />
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets/datatables.min.css') ?>"> -->
    <title><?= $title ?></title>
</head>

<body>
    <?php $this->load->view('nav') ?>

    <!-- <script type="text/javascript" src="<?= base_url('assets/datatables.min.js') ?>"></script> -->

<script type="text/javascript" src="<?= base_url('assets/jQuery-3.6.0/jquery-3.6.0.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/Bootstrap-4-4.6.0/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/DataTables-1.13.1/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/DataTables-1.13.1/js/dataTables.bootstrap4.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/Buttons-2.3.3/js/dataTables.buttons.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/Buttons-2.3.3/js/buttons.bootstrap4.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/Buttons-2.3.3/js/buttons.colVis.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/Buttons-2.3.3/js/buttons.print.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/DateTime-1.2.0/js/dataTables.dateTime.min.js') ?>"></script>
    <?= $contents ?>


</body>


<?php if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
} ?>

</html>