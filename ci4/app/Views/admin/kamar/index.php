<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1>Manajemen Kamar</h1>
<a href="<?= base_url('admin/kamar/create') ?>" class="btn btn-primary mb-3">Tambah Kamar</a>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Ukuran</th>
            <th>Status</th>
            <th>Fasilitas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kamar as $k): ?>
        <tr>
            <td><?= esc($k['nama']) ?></td>
            <td><?= number_format($k['harga']) ?></td>
            <td><?= esc($k['ukuran']) ?></td>
            <td><?= esc($k['status']) ?></td>
            <td>
                <?php
                $fasilitas = json_decode($k['fasilitas'], true) ?? [];
                echo implode(', ', $fasilitas);
                ?>
            </td>
            <td>
                <a href="<?= base_url('admin/kamar/'.$k['id']) ?>" class="btn btn-info btn-sm">Detail</a>
                <a href="<?= base_url('admin/kamar/'.$k['id'].'/edit') ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('admin/kamar/'.$k['id'].'/delete') ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus kamar?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?> 