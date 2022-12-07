<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('salur/add') ?>">
        <div class="form-group">
            <label for="mustahik">Mustahik</label>
            <select name="mustahik" id="mustahik" class="form-control" autofocus required>
                <option value="">Pilih Mustahik</option>
                <?php foreach ($mustahik as $m) { ?>
                    <option <?= set_value('mustahik') == $m->id_mustahik ? 'selected' : '' ?> value="<?= $m->id_mustahik ?>"><?= $m->nama_mustahik ?></option>
                <?php } ?>
            </select>
            <small class="text-danger">
                <?php echo form_error('mustahik') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal</label>
            <input name="tgl" type="date" class="form-control" id="tgl" placeholder="Masukkan Tanggal" value="<?= set_value('tgl'); ?>" required>
            <small class="text-danger">
                <?php echo form_error('tgl') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input name="total" type="number" class="form-control" id="total" placeholder="Masukkan Total" value="<?= set_value('total'); ?>" required>
            <small class="text-danger">
                <?php echo form_error('total') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="">Pilih Jenis</option>
                <option <?= set_value('jenis') == 'Fakir' ? 'selected' : '' ?> value="Fakir">Fakir</option>
                <option <?= set_value('jenis') == 'Miskin' ? 'selected' : '' ?> value="Miskin">Miskin</option>
                <option <?= set_value('jenis') == 'Riqab' ? 'selected' : '' ?> value="Riqab">Riqab</option>
                <option <?= set_value('jenis') == 'Gharim' ? 'selected' : '' ?> value="Gharim">Gharim</option>
                <option <?= set_value('jenis') == 'Mualaf' ? 'selected' : '' ?> value="Mualaf">Mualaf</option>
                <option <?= set_value('jenis') == 'Fisabilillah' ? 'selected' : '' ?> value="Fisabilillah">Fisabilillah</option>
                <option <?= set_value('jenis') == 'Ibnu Sabil' ? 'selected' : '' ?> value="Ibnu Sabil">Ibnu Sabil</option>
                <option <?= set_value('jenis') == 'Amil' ? 'selected' : '' ?> value="Amil">Amil</option>
            </select>
            <small class="text-danger">
                <?php echo form_error('jenis') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan"><?= set_value('keterangan'); ?></textarea>
            <small class="text-danger">
                <?php echo form_error('keterangan') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="validasi">Validasi</label>
            <select name="validasi" id="validasi" class="form-control" required>
                <option <?= set_value('validasi') == 'ya' ? 'selected' : '' ?> value="ya">ya</option>
                <option <?= set_value('validasi') == 'tidak' ? 'selected' : '' ?> value="tidak">tidak</option>
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