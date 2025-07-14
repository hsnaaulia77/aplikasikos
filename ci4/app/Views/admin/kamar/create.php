<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1 class="mb-4">Tambah Kamar</h1>

<?php if (isset($validation)): ?>
    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif; ?>

<form action="<?= site_url('admin/kamar/store') ?>" method="post" enctype="multipart/form-data" class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Nama Kamar</label>
        <input type="text" name="nama" class="form-control" value="<?= old('nama') ?>" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Harga / Bulan</label>
        <input type="number" name="harga" class="form-control" value="<?= old('harga') ?>" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Ukuran (m²)</label>
        <input type="text" name="ukuran" class="form-control" value="<?= old('ukuran') ?>" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
            <option value="kosong" <?= old('status')=='kosong'?'selected':'' ?>>Kosong</option>
            <option value="terisi" <?= old('status')=='terisi'?'selected':'' ?>>Terisi</option>
            <option value="dibooking" <?= old('status')=='dibooking'?'selected':'' ?>>Dibooking</option>
        </select>
    </div>
    <div class="col-12">
        <label class="form-label">Fasilitas</label><br>
        <?php
        $opsi = ['AC', 'Kamar Mandi Dalam', 'WiFi', 'Lemari'];
        $fasilitas = old('fasilitas') ?? [];
        foreach ($opsi as $o):
        ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="fasilitas[]" value="<?= $o ?>" <?= in_array($o, $fasilitas) ? 'checked' : '' ?>>
                <label class="form-check-label"><?= $o ?></label>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-12">
        <label class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control"><?= old('deskripsi') ?></textarea>
    </div>
    <div class="col-12">
        <label class="form-label">Upload Foto (bisa lebih dari satu)</label>
        <input type="file" name="foto[]" class="form-control" multiple>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= site_url('admin/kamar') ?>" class="btn btn-secondary">Kembali</a>
    </div>
</form>

<?= $this->endSection() ?> 
<h1>Tambah Kamar</h1>
<form action="<?= base_url('admin/kamar/store') ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Nama Kamar</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Harga / Bulan</label>
        <input type="number" name="harga" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Ukuran (m²)</label>
        <input type="text" name="ukuran" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Fasilitas</label><br>
        <input type="checkbox" name="fasilitas[]" value="AC"> AC
        <input type="checkbox" name="fasilitas[]" value="Kamar Mandi Dalam"> Kamar Mandi Dalam
        <input type="checkbox" name="fasilitas[]" value="WiFi"> WiFi
        <input type="checkbox" name="fasilitas[]" value="Lemari"> Lemari
        <!-- Tambahkan fasilitas lain sesuai kebutuhan -->
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label>Upload Foto (bisa lebih dari satu)</label>
        <input type="file" name="foto[]" class="form-control" multiple>
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control" required>
            <option value="kosong">Kosong</option>
            <option value="terisi">Terisi</option>
            <option value="dibooking">Dibooking</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= base_url('admin/kamar') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?> 