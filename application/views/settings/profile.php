<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('settings/profile') ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?= $user['nama'] ?>" autofocus required>
            <small class="text-danger">
                <?php echo form_error('nama') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?= $user['email'] ?>" required>
            <small class="text-danger">
                <?php echo form_error('email') ?>
            </small>
        </div>
        <a href="<?= base_url('settings/password') ?>" class="btn btn-danger">Change Password</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>