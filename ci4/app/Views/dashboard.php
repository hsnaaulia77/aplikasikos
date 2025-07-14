<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1>Dashboard</h1>
<p>Selamat datang, <b><?= esc($user) ?></b> (<?= esc($role) ?>)!</p>

<div class="row">
    <div class="col-md-3">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Kamar</h5>
                <p class="card-text fs-2"><?= $totalKamar ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Kamar Kosong</h5>
                <p class="card-text fs-2"><?= $kamarKosong ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-warning mb-3">
            <div class="card-body">
                <h5 class="card-title">Kamar Terisi</h5>
                <p class="card-text fs-2"><?= $kamarTerisi ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-info mb-3">
            <div class="card-body">
                <h5 class="card-title">Total User</h5>
                <p class="card-text fs-2"><?= $totalUser ?></p>
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <a href="<?= site_url('admin/kamar') ?>" class="btn btn-primary">Manajemen Kamar</a>
    <a href="<?= site_url('admin/user') ?>" class="btn btn-info">Manajemen User</a>
</div>

<?= $this->endSection() ?> 