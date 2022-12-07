<div class="container">
    <h1><?= $title ?></h1>

    <a href="<?= base_url('dosen/add') ?>" class="btn btn-primary mt-2 mb-2">Tambah Data</a>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">#</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>alamat</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dosen as $row => $data) { ?>
                <tr>
                    <th class="text-center"><?= $row + 1 ?></th>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->nip ?></td>
                    <td><?= $data->alamat ?></td>
                    <td class="text-center">
                        <a href="<?= base_url('dosen/edit/' . $data->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('dosen/destroy/' . $data->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete Data?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>