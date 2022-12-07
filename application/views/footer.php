<!-- Optional JavaScript; choose one of the two! -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

</body>

<?php if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
} ?>

</html>