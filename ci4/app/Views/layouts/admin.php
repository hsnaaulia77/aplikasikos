<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? esc($title) : 'Cozy Stay Admin' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts: Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #FFF8F0;
            font-family: 'Nunito', Arial, sans-serif;
        }
        .navbar {
            background: #A3C9A8;
            border-radius: 0 0 24px 24px;
        }
        .navbar-brand {
            font-weight: bold;
            color: #6B4F3A !important;
            letter-spacing: 1px;
        }
        .nav-link, .btn {
            border-radius: 20px !important;
        }
        .container {
            margin-top: 32px;
        }
        .card {
            border-radius: 24px;
            box-shadow: 0 2px 12px #0001;
            border: none;
        }
        h1, h2, h3, h4, h5 {
            color: #6B4F3A;
            font-weight: 700;
        }
        .btn-primary {
            background: #A3C9A8;
            border: none;
            color: #6B4F3A;
        }
        .btn-primary:hover {
            background: #6B4F3A;
            color: #FFF8F0;
        }
        .btn-info {
            background: #F7D9C4;
            color: #6B4F3A;
            border: none;
        }
        .btn-info:hover {
            background: #6B4F3A;
            color: #FFF8F0;
        }
        .rounded-illustration {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #F7D9C4;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Cozy Stay</a>
            <div>
                <a href="<?= base_url('dashboard') ?>" class="btn btn-light btn-sm me-2">Dashboard</a>
                <a href="<?= base_url('admin/kamar') ?>" class="btn btn-light btn-sm me-2">Kamar</a>
                <a href="<?= base_url('admin/user') ?>" class="btn btn-light btn-sm me-2">User</a>
                <a href="<?= base_url('admin/penyewa') ?>" class="btn btn-light btn-sm me-2">Penyewa</a>
                <a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 