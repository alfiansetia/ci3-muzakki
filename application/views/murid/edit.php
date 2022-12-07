<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('murid/edit/' . $murid->id) ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?= $murid->nama; ?>" autofocus required>
            <small class="text-danger">
                <?php echo form_error('nama') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input name="nisn" type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" value="<?= $murid->nisn; ?>" required>
            <small class="text-danger">
                <?php echo form_error('nisn') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input name="kelas" type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" value="<?= $murid->kelas; ?>" required>
            <small class="text-danger">
                <?php echo form_error('kelas') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required><?= $murid->alamat; ?></textarea>
            <small class="text-danger">
                <?php echo form_error('alamat') ?>
            </small>
        </div>
        <a href="<?= base_url('murid') ?>" class="btn btn-secondary mt-2 mb-2">Kembali</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>