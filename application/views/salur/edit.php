<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('salur/edit/' . $salur->id_salur) ?>">
        <div class="form-group">
            <label for="mustahik">Mustahik</label>
            <select name="mustahik" id="mustahik" class="form-control" autofocus required>
                <option value="">Pilih Mustahik</option>
                <?php foreach ($mustahik as $m) { ?>
                    <option <?= $salur->id_mustahik == $m->id_mustahik ? 'selected' : '' ?> value="<?= $m->id_mustahik ?>"><?= $m->nama_mustahik ?></option>
                <?php } ?>
            </select>
            <small class="text-danger">
                <?php echo form_error('mustahik') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal</label>
            <input name="tgl" type="date" class="form-control" id="tgl" placeholder="Masukkan Tanggal" value="<?= $salur->tgl_salur; ?>" required>
            <small class="text-danger">
                <?php echo form_error('tgl') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input name="total" type="number" class="form-control" id="total" placeholder="Masukkan Total" value="<?= $salur->total_salur; ?>" required>
            <small class="text-danger">
                <?php echo form_error('total') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="">Pilih Jenis</option>
                <option <?= $salur->jenis_salur == 'Fakir' ? 'selected' : '' ?> value="Fakir">Fakir</option>
                <option <?= $salur->jenis_salur == 'Miskin' ? 'selected' : '' ?> value="Miskin">Miskin</option>
                <option <?= $salur->jenis_salur == 'Riqab' ? 'selected' : '' ?> value="Riqab">Riqab</option>
                <option <?= $salur->jenis_salur == 'Gharim' ? 'selected' : '' ?> value="Gharim">Gharim</option>
                <option <?= $salur->jenis_salur == 'Mualaf' ? 'selected' : '' ?> value="Mualaf">Mualaf</option>
                <option <?= $salur->jenis_salur == 'Fisabilillah' ? 'selected' : '' ?> value="Fisabilillah">Fisabilillah</option>
                <option <?= $salur->jenis_salur == 'Ibnu Sabil' ? 'selected' : '' ?> value="Ibnu Sabil">Ibnu Sabil</option>
                <option <?= $salur->jenis_salur == 'Amil' ? 'selected' : '' ?> value="Amil">Amil</option>
            </select>
            <small class="text-danger">
                <?php echo form_error('jenis') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan"><?= $salur->ket_salur; ?></textarea>
            <small class="text-danger">
                <?php echo form_error('keterangan') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="validasi">Validasi</label>
            <select name="validasi" id="validasi" class="form-control" required>
                <option <?= $salur->validasi_salur == 'ya' ? 'selected' : '' ?> value="ya">ya</option>
                <option <?= $salur->validasi_salur == 'tidak' ? 'selected' : '' ?> value="tidak">tidak</option>
            </select>
            <small class="text-danger">
                <?php echo form_error('validasi') ?>
            </small>
        </div>
        <a href="<?= base_url('salur') ?>" class="btn btn-secondary mt-2 mb-2">Kembali</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>