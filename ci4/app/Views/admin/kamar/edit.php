<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1>Edit Kamar</h1>
<form action="<?= base_url('admin/kamar/'.$kamar['id'].'/update') ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Nama Kamar</label>
        <input type="text" name="nama" class="form-control" value="<?= esc($kamar['nama']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Harga / Bulan</label>
        <input type="number" name="harga" class="form-control" value="<?= esc($kamar['harga']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Ukuran (m²)</label>
        <input type="text" name="ukuran" class="form-control" value="<?= esc($kamar['ukuran']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Fasilitas</label><br>
        <?php
        $fasilitas = json_decode($kamar['fasilitas'], true) ?? [];
        $opsi = ['AC', 'Kamar Mandi Dalam', 'WiFi', 'Lemari'];
        foreach ($opsi as $o):
        ?>
            <input type="checkbox" name="fasilitas[]" value="<?= $o ?>" <?= in_array($o, $fasilitas) ? 'checked' : '' ?>> <?= $o ?>
        <?php endforeach; ?>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"><?= esc($kamar['deskripsi']) ?></textarea>
    </div>
    <div class="mb-3">
        <label>Upload Foto (bisa lebih dari satu, kosongkan jika tidak ingin menambah)</label>
        <input type="file" name="foto[]" class="form-control" multiple>
        <div>
            <b>Foto Saat Ini:</b><br>
            <?php foreach ($foto as $f): ?>
                <img src="<?= base_url('uploads/kamar/'.$f['foto']) ?>" width="80" style="margin:2px;">
            <?php endforeach; ?>
        </div>
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control" required>
            <option value="kosong" <?= $kamar['status']=='kosong'?'selected':'' ?>>Kosong</option>
            <option value="terisi" <?= $kamar['status']=='terisi'?'selected':'' ?>>Terisi</option>
            <option value="dibooking" <?= $kamar['status']=='dibooking'?'selected':'' ?>>Dibooking</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="<?= base_url('admin/kamar') ?>" class="btn btn-secondary">Kembali</a>
</form>
<?= $this->endSection() ?> 