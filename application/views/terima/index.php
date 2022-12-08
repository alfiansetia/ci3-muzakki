<div class="container">
    <h1><?= $title ?></h1>

    <a href="<?= base_url('terima/add') ?>" class="btn btn-primary mt-2 mb-2">Tambah Data</a>

    <div class="table-responsive">
        <table class="table table-hover table-sm" id="table">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tgl</th>
                    <th>Total</th>
                    <th>Jenis</th>
                    <th>Ket</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($terima as $row => $data) { ?>
                    <tr>
                        <th class="text-center"><?= $row + 1 ?></th>
                        <td><?= $data->nama_muzakki ?></td>
                        <td><?= $data->alamat_muzakki ?></td>
                        <td><?= $data->tgl_terima ?></td>
                        <td><?= $data->total_terima ?></td>
                        <td><?= $data->jenis_terima ?></td>
                        <td><?= $data->ket_terima ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('terima/edit/' . $data->id_terima) ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?= base_url('terima/destroy/' . $data->id_terima) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete Data?');">Delete</a>
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