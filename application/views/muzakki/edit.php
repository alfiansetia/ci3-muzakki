<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('muzakki/edit/' . $muzakki->id_muzakki) ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?= $muzakki->nama_muzakki; ?>" autofocus required>
            <small class="text-danger">
                <?php echo form_error('nama') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"><?= $muzakki->alamat_muzakki; ?></textarea>
            <small class="text-danger">
                <?php echo form_error('alamat') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan"><?= $muzakki->ket_muzakki; ?></textarea>
            <small class="text-danger">
                <?php echo form_error('keterangan') ?>
            </small>
        </div>
        <a href="<?= base_url('muzakki') ?>" class="btn btn-secondary mt-2 mb-2">Kembali</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>