<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4" style="border-radius:24px; background:#FFFBEA;">
            <h2 class="mb-4 text-center" style="color:#6B4F3A;">Tambah Penyewa</h2>

            <?php if (isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>

            <form action="<?= site_url('admin/penyewa/store') ?>" method="post" enctype="multipart/form-data" class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control rounded-pill" value="<?= old('nama') ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">No. KTP</label>
                    <input type="text" name="no_ktp" class="form-control rounded-pill" value="<?= old('no_ktp') ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">No. HP / WA</label>
                    <input type="text" name="no_hp" class="form-control rounded-pill" value="<?= old('no_hp') ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kamar yang Disewa</label>
                    <select name="kamar_id" class="form-select rounded-pill" required>
                        <option value="">-- Pilih Kamar --</option>
                        <?php foreach ($kamar as $k): ?>
                            <option value="<?= $k['id'] ?>" <?= old('kamar_id') == $k['id'] ? 'selected' : '' ?>>
                                <?= esc($k['nama']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" class="form-control rounded-pill" value="<?= old('tanggal_masuk') ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tanggal Keluar</label>
                    <input type="date" name="tanggal_keluar" class="form-control rounded-pill" value="<?= old('tanggal_keluar') ?>">
                </div>
                <div class="col-12">
                    <label class="form-label">Upload Foto KTP / Bukti</label>
                    <input type="file" name="foto_ktp" class="form-control rounded-pill">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success rounded-pill px-4">Simpan</button>
                    <a href="<?= site_url('admin/penyewa') ?>" class="btn btn-secondary rounded-pill px-4">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?> 