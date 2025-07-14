<!-- app/Views/auth/register.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Penyewa</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fdf6ee;
            font-family: 'Nunito', 'Quicksand', Arial, sans-serif;
        }
        .card-soft {
            background: #fff;
            border-radius: 32px;
            box-shadow: 0 4px 24px 0 rgba(180, 160, 120, 0.10);
            padding: 2.2rem 2rem;
            border: none;
        }
        .form-control, .form-select {
            border-radius: 18px;
            border: 1px solid #e6e0d4;
            background: #f9f7f3;
        }
        .btn-success {
            background: #d6e5d8;
            color: #7e6b4c;
            border-radius: 28px;
            font-weight: 700;
            border: none;
        }
        .btn-success:hover {
            background: #b6d7b0;
            color: #3d5c3a;
        }
        h3 {
            font-family: 'Quicksand', 'Nunito', Arial, sans-serif;
            color: #7e6b4c;
            font-weight: 700;
        }
        label {
            color: #7e6b4c;
            font-weight: 600;
        }
        a {
            color: #b49c85;
        }
        a:hover {
            color: #7e6b4c;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card-soft">
                <?= view('layouts/alert') ?>
                <h3 class="mb-4 text-center">Daftar Penyewa</h3>
                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="/register">
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password_confirm" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Daftar</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="/login">Sudah punya akun? Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
