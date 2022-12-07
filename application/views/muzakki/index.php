<div class="container">
    <h1><?= $title ?></h1>

    <a href="<?= base_url('muzakki/add') ?>" class="btn btn-primary mt-2 mb-2">Tambah Data</a>

    <table class="table table-hover table-sm" id="table">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Ket</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($muzakki as $row => $data) { ?>
                <tr>
                    <th class="text-center"><?= $row + 1 ?></th>
                    <td><?= $data->nama_muzakki ?></td>
                    <td><?= $data->alamat_muzakki ?></td>
                    <td><?= $data->ket_muzakki ?></td>
                    <td class="text-center">
                        <a href="<?= base_url('muzakki/edit/' . $data->id_muzakki) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('muzakki/destroy/' . $data->id_muzakki) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete Data?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>