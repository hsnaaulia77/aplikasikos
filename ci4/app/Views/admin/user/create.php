<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1>Tambah User</h1>
<form action="<?= site_url('admin/user/store') ?>" method="post">
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Role</label>
        <select name="role" class="form-control" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('admin/user') ?>" class="btn btn-secondary">Kembali</a>
</form>
<?= $this->endSection() ?> 