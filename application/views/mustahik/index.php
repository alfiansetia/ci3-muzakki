<div class="container">
    <h1><?= $title ?></h1>

    <a href="<?= base_url('mustahik/add') ?>" class="btn btn-primary mt-2 mb-2">Tambah Data</a>

    <div class="table-responsive">
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
                <?php foreach ($mustahik as $row => $data) { ?>
                    <tr>
                        <th class="text-center"><?= $row + 1 ?></th>
                        <td><?= $data->nama_mustahik ?></td>
                        <td><?= $data->alamat_mustahik ?></td>
                        <td><?= $data->ket_mustahik ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('mustahik/edit/' . $data->id_mustahik) ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?= base_url('mustahik/destroy/' . $data->id_mustahik) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete Data?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>