<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<h1>Daftar Penyewa</h1>
<?php if (!empty($penyewa)): ?>
    <ul>
    <?php foreach ($penyewa as $p): ?>
        <li><?= esc($p['nama']) ?></li>
    <?php endforeach ?>
    </ul>
<?php else: ?>
    <p>Tidak ada data penyewa.</p>
<?php endif ?>
<?= $this->endSection() ?> 