<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

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