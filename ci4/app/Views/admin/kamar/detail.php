<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1>Detail Kamar</h1>
<table class="table">
    <tr><th>Nama</th><td><?= esc($kamar['nama']) ?></td></tr>
    <tr><th>Harga</th><td><?= number_format($kamar['harga']) ?></td></tr>
    <tr><th>Ukuran</th><td><?= esc($kamar['ukuran']) ?></td></tr>
    <tr><th>Status</th><td><?= esc($kamar['status']) ?></td></tr>
    <tr><th>Fasilitas</th><td><?= implode(', ', json_decode($kamar['fasilitas'], true) ?? []) ?></td></tr>
    <tr><th>Deskripsi</th><td><?= esc($kamar['deskripsi']) ?></td></tr>
    <tr>
        <th>Foto</th>
        <td>
            <?php foreach ($foto as $f): ?>
                <img src="<?= base_url('uploads/kamar/'.$f['foto']) ?>" width="120" style="margin:2px;">
            <?php endforeach; ?>
        </td>
    </tr>
</table>
<a href="<?= base_url('admin/kamar') ?>" class="btn btn-secondary">Kembali</a>
<?= $this->endSection() ?> 