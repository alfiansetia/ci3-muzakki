<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('dosen/add') ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?= set_value('nama'); ?>" autofocus required>
            <small class="text-danger">
                <?php echo form_error('nama') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="nip">NIP</label>
            <input name="nip" type="text" class="form-control" id="nip" placeholder="Masukkan NIP" value="<?= set_value('nip'); ?>" required>
            <small class="text-danger">
                <?php echo form_error('nip') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input name="kelas" type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" value="<?= set_value('kelas'); ?>" required>
            <small class="text-danger">
                <?php echo form_error('kelas') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required><?= set_value('alamat'); ?></textarea>
            <small class="text-danger">
                <?php echo form_error('alamat') ?>
            </small>
        </div>
        <a href="<?= base_url('dosen') ?>" class="btn btn-secondary mt-2 mb-2">Kembali</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>