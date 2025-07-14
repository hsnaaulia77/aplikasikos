<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1>Dashboard User</h1>
<p>Selamat datang, <b><?= esc($user) ?></b>!</p>

<div class="alert alert-info">
    Kamar kosong tersedia: <b><?= $kamarKosong ?></b>
</div>

<a href="<?= site_url('kamar') ?>" class="btn btn-primary">Lihat Daftar Kamar</a>

<?= $this->endSection() ?> 