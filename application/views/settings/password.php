<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('settings/password') ?>">
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Masukkan password" autofocus required>
            <small class="text-danger">
                <?php echo form_error('password') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="confirm_password">Email</label>
            <input name="confirm_password" type="password" class="form-control" id="confirm_password" placeholder="Masukkan Konfirmasi Password" required>
            <small class="text-danger">
                <?php echo form_error('confirm_password') ?>
            </small>
        </div>
        <a href="<?= base_url('settings/profile') ?>" class="btn btn-secondary mt-2 mb-2">Kembali</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>