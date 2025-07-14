<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1 class="mb-4">Manajemen User</h1>

<!-- Form Search -->
<form method="get" class="mb-3" action="<?= site_url('admin/user') ?>">
    <div class="input-group" style="max-width:400px;">
        <input type="text" name="q" class="form-control rounded-pill" placeholder="Cari nama, email, atau role..." value="<?= esc($keyword) ?>">
        <button class="btn btn-primary rounded-pill ms-2" type="submit">Cari</button>
        <a href="<?= site_url('admin/user') ?>" class="btn btn-info rounded-pill ms-2">Reset</a>
    </div>
</form>

<a href="<?= site_url('admin/user/create') ?>" class="btn btn-success mb-3 rounded-pill">Tambah User</a>

<div class="card p-3" style="border-radius:24px; background:#FFFBEA;">
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle" style="border-radius:16px; overflow:hidden;">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="width:180px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($users) == 0): ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada user.</td>
                    </tr>
                <?php endif; ?>
                <?php foreach ($users as $u): ?>
                <tr>
                    <td><?= esc($u['nama']) ?></td>
                    <td><?= esc($u['email']) ?></td>
                    <td><?= esc($u['role']) ?></td>
                    <td>
                        <a href="<?= site_url('admin/user/'.$u['id']) ?>" class="btn btn-info btn-sm rounded-pill">Detail</a>
                        <a href="<?= site_url('admin/user/'.$u['id'].'/edit') ?>" class="btn btn-warning btn-sm rounded-pill">Edit</a>
                        <a href="<?= site_url('admin/user/'.$u['id'].'/delete') ?>" class="btn btn-danger btn-sm rounded-pill" onclick="return confirm('Yakin hapus user?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Pagination -->
    <div>
        <?= $pager->links() ?>
    </div>
</div>

<?= $this->endSection() ?>