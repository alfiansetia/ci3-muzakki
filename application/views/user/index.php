<div class="container">
    <h1><?= $title ?></h1>

    <a href="<?= base_url('user/add') ?>" class="btn btn-primary mt-2 mb-2">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-hover table-sm" id="table">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $row => $data) { ?>
                    <tr>
                        <th class="text-center"><?= $row + 1 ?></th>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->email ?></td>
                        <td><?= $data->role ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('user/edit/' . $data->id) ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?= base_url('user/destroy/' . $data->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete Data?');">Delete</a>
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