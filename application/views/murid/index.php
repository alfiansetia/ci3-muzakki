<div class="container">
    <h1><?= $title ?></h1>

    <a href="<?= base_url('murid/add') ?>" class="btn btn-primary mt-2 mb-2">Tambah Data</a>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">#</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>alamat</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($murid as $row => $data) { ?>
                <tr>
                    <th class="text-center"><?= $row + 1 ?></th>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->nisn ?></td>
                    <td><?= $data->kelas ?></td>
                    <td><?= $data->alamat ?></td>
                    <td class="text-center">
                        <a href="<?= base_url('murid/edit/' . $data->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('murid/destroy/' . $data->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete Data?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>