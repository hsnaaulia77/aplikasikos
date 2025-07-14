<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="text-center mb-4">
    <div class="rounded-illustration mx-auto">
        <!-- Ilustrasi rumah/kos, bisa pakai SVG atau gambar PNG -->
        <img src="https://img.icons8.com/ios-filled/50/6B4F3A/home--v1.png" alt="Home" width="48">
    </div>
    <h1>Dashboard Cozy Stay</h1>
    <p class="text-muted">Selamat datang, <b><?= esc($user ?? '-') ?></b>!</p>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="card text-center p-3" style="background:#FFFBEA;">
            <h5>Total Kamar</h5>
            <div class="fs-2"><?= $totalKamar ?? 0 ?></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center p-3" style="background:#E2F6CA;">
            <h5>Kamar Kosong</h5>
            <div class="fs-2"><?= $kamarKosong ?? 0 ?></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center p-3" style="background:#F7D9C4;">
            <h5>Kamar Terisi</h5>
            <div class="fs-2"><?= $kamarTerisi ?? 0 ?></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center p-3" style="background:#FFFBEA;">
            <h5>Total User</h5>
            <div class="fs-2"><?= $totalUser ?? 0 ?></div>
        </div>
    </div>
</div>

<div class="mt-5 text-center">
    <a href="<?= site_url('admin/kamar') ?>" class="btn btn-primary btn-lg me-2">Manajemen Kamar</a>
    <a href="<?= site_url('admin/user') ?>" class="btn btn-info btn-lg">Manajemen User</a>
</div>

<?= $this->endSection() ?> 