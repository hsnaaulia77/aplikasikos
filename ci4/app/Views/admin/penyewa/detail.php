<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h2>Detail Penyewa</h2>
<div class="card p-4" style="border-radius:24px; background:#FFFBEA;">
    <dl class="row">
        <dt class="col-sm-4">Nama</dt>
        <dd class="col-sm-8"><?= esc($penyewa['nama']) ?></dd>
        <dt class="col-sm-4">No. KTP</dt>
        <dd class="col-sm-8"><?= esc($penyewa['no_ktp']) ?></dd>
        <dt class="col-sm-4">No. HP</dt>
        <dd class="col-sm-8"><?= esc($penyewa['no_hp']) ?></dd>
        <dt class="col-sm-4">Kamar</dt>
        <dd class="col-sm-8"><?= esc($kamar['nama'] ?? '-') ?></dd>
        <dt class="col-sm-4">Tanggal Masuk</dt>
        <dd class="col-sm-8"><?= esc($penyewa['tanggal_masuk']) ?></dd>
        <dt class="col-sm-4">Tanggal Keluar</dt>
        <dd class="col-sm-8"><?= esc($penyewa['tanggal_keluar']) ?></dd>
        <dt class="col-sm-4">Foto KTP/Bukti</dt>
        <dd class="col-sm-8">
            <?php if ($penyewa['foto_ktp']): ?>
                <img src="<?= base_url('uploads/penyewa/'.$penyewa['foto_ktp']) ?>" width="120">
            <?php else: ?>
                <span class="text-muted">-</span>
            <?php endif; ?>
        </dd>
    </dl>
    <a href="<?= site_url('admin/penyewa') ?>" class="btn btn-secondary rounded-pill">Kembali</a>
</div>

<h4 class="mt-5">Riwayat Penyewaan</h4>
<div class="card p-3" style="border-radius:24px; background:#E2F6CA;">
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Kamar</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Bukti/KTP</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($riwayat)): ?>
                    <tr><td colspan="4" class="text-center text-muted">Belum ada riwayat penyewaan.</td></tr>
                <?php endif; ?>
                <?php foreach ($riwayat as $r): ?>
                <tr>
                    <td><?= esc($r['nama']) ?></td>
                    <td><?= esc($r['tanggal_masuk']) ?></td>
                    <td><?= esc($r['tanggal_keluar']) ?></td>
                    <td>
                        <?php if ($r['foto_bukti']): ?>
                            <img src="<?= base_url('uploads/penyewa/'.$r['foto_bukti']) ?>" width="80">
                        <?php else: ?>
                            <span class="text-muted">-</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?> 