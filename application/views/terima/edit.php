<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('terima/edit/' . $terima->id_terima) ?>">
        <div class="form-group">
            <label for="muzakki">Muzakki</label>
            <select name="muzakki" id="muzakki" class="form-control" autofocus required>
                <option value="">Pilih Muzakki</option>
                <?php foreach ($muzakki as $m) { ?>
                    <option <?= $terima->id_muzakki == $m->id_muzakki ? 'selected' : '' ?> value="<?= $m->id_muzakki ?>"><?= $m->nama_muzakki ?></option>
                <?php } ?>
            </select>
            <small class="text-danger">
                <?php echo form_error('muzakki') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal</label>
            <input name="tgl" type="date" class="form-control" id="tgl" placeholder="Masukkan Tanggal" value="<?= $terima->tgl_terima; ?>" required>
            <small class="text-danger">
                <?php echo form_error('tgl') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input name="total" type="number" class="form-control" id="total" placeholder="Masukkan Total" value="<?= $terima->total_terima; ?>" required>
            <small class="text-danger">
                <?php echo form_error('total') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="">Pilih Jenis</option>
                <option <?= $terima->jenis_terima == 'Zakat Fitrah' ? 'selected' : '' ?> value="Zakat Fitrah">Zakat Fitrah</option>
                <option <?= $terima->jenis_terima == 'Zakat Harta' ? 'selected' : '' ?> value="Zakat Harta">Zakat Harta</option>
                <option <?= $terima->jenis_terima == 'Infaq' ? 'selected' : '' ?> value="Infaq">Infaq</option>
                <option <?= $terima->jenis_terima == 'Sedekah' ? 'selected' : '' ?> value="Sedekah">Sedekah</option>
            </select>
            <small class="text-danger">
                <?php echo form_error('jenis') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan"><?= $terima->ket_terima; ?></textarea>
            <small class="text-danger">
                <?php echo form_error('keterangan') ?>
            </small>
        </div>
        <a href="<?= base_url('terima') ?>" class="btn btn-secondary mt-2 mb-2">Kembali</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>