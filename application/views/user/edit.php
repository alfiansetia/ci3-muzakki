<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('user/edit/' . $user->id) ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?= $user->nama; ?>" autofocus required>
            <small class="text-danger">
                <?php echo form_error('nama') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?= $user->email; ?>" required>
            <small class="text-danger">
                <?php echo form_error('email') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Masukkan Password" value="<?= set_value('password') ?>">
            <small class="text-danger">
                <?= form_error('password') == '' ? 'Isi untuk mengubah password' : form_error('password') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option <?= $user->role == 'user' ? 'selected' : '' ?> value="user">user</option>
                <option <?= $user->role == 'admin' ? 'selected' : '' ?> value="admin">admin</option>
            </select>
            <small class="text-danger">
                <?php echo form_error('role') ?>
            </small>
        </div>

        <a href="<?= base_url('user') ?>" class="btn btn-secondary mt-2 mb-2">Kembali</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>