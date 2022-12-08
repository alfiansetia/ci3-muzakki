<div class="container">
    <h1><?= $title ?></h1>

    <a href="<?= base_url('salur/add') ?>" class="btn btn-primary mt-2 mb-2">Tambah Data</a>
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
                    <th>Validasi</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salur as $row => $data) { ?>
                    <tr>
                        <th class="text-center"><?= $row + 1 ?></th>
                        <td><?= $data->nama_mustahik ?></td>
                        <td><?= $data->alamat_mustahik ?></td>
                        <td><?= $data->tgl_salur ?></td>
                        <td><?= $data->total_salur ?></td>
                        <td><?= $data->jenis_salur ?></td>
                        <td><?= $data->ket_salur ?></td>
                        <td><?= $data->validasi_salur ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('salur/edit/' . $data->id_salur) ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?= base_url('salur/destroy/' . $data->id_salur) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete Data?');">Delete</a>
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