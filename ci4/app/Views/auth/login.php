<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Penyewa</title>
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
        .btn-primary {
            background: #c8b6a6;
            color: #fff;
            border-radius: 28px;
            font-weight: 700;
            border: none;
        }
        .btn-primary:hover {
            background: #b49c85;
            color: #fff;
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
                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger text-center">
                        <?= $error ?>
                    </div>
                <?php endif; ?>
                <h3 class="mb-4 text-center">Login Penyewa</h3>
                <form method="post" action="<?= site_url('login') ?>">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="<?= base_url('register') ?>">Belum punya akun? Daftar</a>
                    <br>
                    <a href="<?= base_url('forgot-password') ?>">Lupa password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>