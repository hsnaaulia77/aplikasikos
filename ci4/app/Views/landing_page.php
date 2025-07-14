<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($nama_kos) ?> - Landing Page</title>
    <!-- Google Fonts: Nunito & Quicksand -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --cream: #fdf6ee;
            --coklat-muda: #c8b6a6;
            --hijau-pastel: #d6e5d8;
            --coklat-tua: #7e6b4c;
            --putih: #fff;
        }
        body {
            background: var(--cream);
            font-family: 'Nunito', 'Quicksand', Arial, sans-serif;
            color: var(--coklat-tua);
        }
        .hero {
            background: linear-gradient(120deg, var(--cream) 60%, var(--hijau-pastel) 100%);
            color: var(--coklat-tua);
            padding: 120px 0 80px 0;
            border-radius: 0 0 48px 48px;
            box-shadow: 0 4px 32px 0 rgba(180, 160, 120, 0.10);
            position: relative;
            background-image: url('/images/rumahku.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(253, 246, 238, 0.82); /* semi-transparent overlay for soft effect */
            border-radius: 0 0 48px 48px;
            z-index: 1;
        }
        .hero .container {
            position: relative;
            z-index: 2;
        }
        h1, h2, h3, h4 {
            font-family: 'Quicksand', 'Nunito', Arial, sans-serif;
            font-weight: 700;
        }
        .section-title {
            color: var(--coklat-tua);
            margin-bottom: 1.7rem;
            font-size: 2.1rem;
        }
        .card-soft {
            background: var(--putih);
            border-radius: 32px;
            box-shadow: 0 4px 24px 0 rgba(180, 160, 120, 0.10);
            padding: 2.2rem 2rem;
            margin-bottom: 2.5rem;
            border: none;
        }
        .galeri-img {
            object-fit: cover;
            height: 170px;
            border-radius: 22px;
            box-shadow: 0 2px 12px 0 rgba(180, 160, 120, 0.10);
            transition: transform 0.25s, box-shadow 0.25s;
        }
        .galeri-img:hover {
            transform: scale(1.04) rotate(-1deg);
            box-shadow: 0 8px 32px 0 rgba(180, 160, 120, 0.18);
        }
        .badge-fasilitas {
            background: var(--hijau-pastel);
            color: var(--coklat-tua);
            border-radius: 18px;
            font-size: 1.05rem;
            margin-bottom: 8px;
            padding: 0.7em 1.1em;
            display: flex;
            align-items: center;
            gap: 0.5em;
        }
        .testimoni blockquote {
            background: #e6e0d4;
            border-left: 5px solid var(--coklat-muda);
            border-radius: 22px;
            padding: 1.3rem 1.7rem;
            margin-bottom: 1.7rem;
            font-style: italic;
        }
        .form-section {
            background: var(--cream);
            border-radius: 28px;
            box-shadow: 0 2px 12px 0 rgba(180, 160, 120, 0.07);
            padding: 2rem;
        }
        .form-control, .form-select, textarea {
            border-radius: 18px;
            border: 1px solid #e6e0d4;
            background: var(--putih);
        }
        .btn-success, .btn-primary, .btn-custom {
            border-radius: 28px;
            font-weight: 700;
        }
        .btn-custom {
            font-size: 1.2rem;
            background: var(--coklat-muda);
            color: #fff;
            border: none;
            transition: background 0.2s, transform 0.2s;
            font-weight: 700;
            padding: 0.75rem 2.5rem;
            box-shadow: 0 2px 8px 0 rgba(200, 182, 166, 0.10);
        }
        .btn-custom:hover {
            background: #b49c85;
            transform: translateY(-2px) scale(1.04);
        }
        .btn-success {
            background: var(--hijau-pastel);
            color: var(--coklat-tua);
            border: none;
        }
        .btn-success:hover {
            background: #b6d7b0;
            color: #3d5c3a;
        }
        .table {
            background: var(--putih);
            border-radius: 22px;
            overflow: hidden;
        }
        .badge.bg-success {
            background: #b6d7b0 !important;
            color: #3d5c3a !important;
        }
        .badge.bg-secondary {
            background: #e6e0d4 !important;
            color: #7e6b4c !important;
        }
        .ratio {
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 2px 12px 0 rgba(180, 160, 120, 0.10);
        }
        /* Card layout for main features */
        .feature-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 1.7rem;
            margin-bottom: 2.5rem;
        }
        .feature-card {
            flex: 1 1 220px;
            background: var(--putih);
            border-radius: 24px;
            box-shadow: 0 2px 12px 0 rgba(180, 160, 120, 0.09);
            padding: 1.7rem 1.2rem;
            min-width: 220px;
            text-align: center;
            transition: transform 0.18s, box-shadow 0.18s;
        }
        .feature-card:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 8px 32px 0 rgba(180, 160, 120, 0.15);
        }
        .feature-card h3 {
            font-size: 1.18rem;
            margin-bottom: 0.5rem;
            color: var(--coklat-tua);
        }
        .feature-card p {
            font-size: 1rem;
            color: #4e3c2f;
        }
        .feature-card .bi {
            font-size: 2.1rem;
            margin-bottom: 0.5rem;
            color: var(--coklat-muda);
        }
        @media (max-width: 768px) {
            .feature-cards {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-2" style="color:var(--coklat-tua); letter-spacing:1px; font-family:'Quicksand', 'Nunito', Arial, sans-serif;">
                <?= esc($nama_kos) ?>
            </h1>
            <p class="lead mb-2" style="color:var(--coklat-tua); font-size:1.3rem;">Cozy Stay – Hangat & Ramah</p>
            <p class="mb-4" style="color:var(--coklat-tua); font-size:1.1rem;"><?= esc($tagline) ?></p>
            <a href="#form-booking" class="btn btn-custom btn-lg">Lihat Kamar / Booking</a>
        </div>
    </section>

    <!-- Fitur Utama dalam Card Layout -->
    <section class="container my-5">
        <div class="feature-cards">
            <div class="feature-card">
                <i class="bi bi-images"></i>
                <h3>Galeri Foto</h3>
                <p>Lihat suasana kamar, dapur, kamar mandi, dan fasilitas bersama.</p>
            </div>
            <div class="feature-card">
                <i class="bi bi-door-open"></i>
                <h3>Daftar Kamar</h3>
                <p>Pilih kamar sesuai kebutuhan, cek harga dan status ketersediaan.</p>
            </div>
            <div class="feature-card">
                <i class="bi bi-stars"></i>
                <h3>Fasilitas Lengkap</h3>
                <p>Wi-Fi, laundry, parkir, dapur, AC, keamanan, CCTV.</p>
            </div>
            <div class="feature-card">
                <i class="bi bi-chat-heart"></i>
                <h3>Testimoni Penghuni</h3>
                <p>Simak pengalaman penghuni sebelumnya.</p>
            </div>
            <div class="feature-card">
                <i class="bi bi-geo-alt"></i>
                <h3>Lokasi Strategis</h3>
                <p>Google Maps untuk kemudahan akses lokasi kos.</p>
            </div>
            <div class="feature-card">
                <i class="bi bi-envelope-paper"></i>
                <h3>Form Tanya & Booking</h3>
                <p>Hubungi atau booking kamar dengan mudah dan cepat.</p>
            </div>
        </div>
    </section>

    <!-- Tentang Kos -->
    <section class="container mb-5">
        <div class="card-soft">
            <h2 class="section-title">Tentang Kos</h2>
        <p><?= esc($deskripsi) ?></p>
            <ul class="list-unstyled">
                <li><strong>Lokasi:</strong> <?= esc($lokasi) ?></li>
                <li><strong>Jenis Kos:</strong> <?= esc($jenis_kos) ?></li>
            </ul>
        </div>
    </section>

    <!-- Galeri Foto -->
    <section class="container mb-5">
        <div class="card-soft">
            <h2 class="section-title">Galeri Foto</h2>
            <div class="row g-3">
        <?php foreach ($galeri as $foto): ?>
                    <div class="col-6 col-md-3">
                    <img src="/galeri/<?= esc($foto) ?>" class="img-fluid galeri-img" alt="Foto <?= esc($foto) ?>">
                    </div>
        <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Daftar Kamar Tersedia -->
    <section class="container mb-5">
        <div class="card-soft">
            <h2 class="section-title">Daftar Kamar</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead style="background:var(--hijau-pastel); color:var(--coklat-tua);">
            <tr><th>Nama</th><th>Harga</th><th>Ukuran</th><th>Status</th></tr>
                    </thead>
                    <tbody>
            <?php foreach ($kamar as $k): ?>
                <tr>
                    <td><?= esc($k['nama']) ?></td>
                            <td>Rp <?= esc($k['harga']) ?></td>
                            <td><?= esc($k['ukuran']) ?> m<sup>2</sup></td>
                            <td>
                                <?php if (strtolower($k['status']) === 'tersedia'): ?>
                                    <span class="badge bg-success">Tersedia</span>
                                <?php else: ?>
                                    <span class="badge bg-secondary">Terisi</span>
                                <?php endif; ?>
                            </td>
                </tr>
            <?php endforeach; ?>
                    </tbody>
        </table>
            </div>
        </div>
    </section>

    <!-- Fasilitas Kos -->
    <section class="container mb-5">
        <div class="card-soft">
            <h2 class="section-title">Fasilitas</h2>
            <div class="row">
            <?php foreach ($fasilitas as $f): ?>
                    <div class="col-6 col-md-3 mb-2">
                        <span class="badge badge-fasilitas w-100">
                            <i class="bi bi-check-circle"></i> <?= esc($f) ?>
                        </span>
                    </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimoni Penghuni -->
    <section class="container mb-5 testimoni">
        <div class="card-soft">
            <h2 class="section-title">Testimoni Penghuni</h2>
            <div class="row">
        <?php foreach ($testimoni as $t): ?>
                    <div class="col-md-6">
            <blockquote>
                            <p class="mb-1">"<?= esc($t['komentar']) ?>"</p>
                            <footer class="blockquote-footer">- <?= esc($t['nama']) ?></footer>
            </blockquote>
                    </div>
        <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Google Maps Lokasi -->
    <section class="container mb-5">
        <div class="card-soft">
            <h2 class="section-title">Lokasi Kos</h2>
            <div class="ratio ratio-16x9">
        <?= $google_maps_embed ?>
            </div>
        </div>
    </section>

    <!-- Form Tanya Kos -->
    <section class="container mb-5">
        <div class="card-soft">
            <h2 class="section-title">Tanya Kos</h2>
            <div class="form-section p-0 border-0 shadow-none bg-transparent">
        <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Anda</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pertanyaan</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
            </div>
        </div>
    </section>

    <!-- Form Booking -->
    <section id="form-booking" class="container mb-5">
        <div class="card-soft">
            <h2 class="section-title">Form Booking</h2>
            <div class="form-section p-0 border-0 shadow-none bg-transparent">
        <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. HP / WA</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pilihan Kamar</label>
                        <select class="form-select">
                <option>Pilih Kamar</option>
                <?php foreach ($kamar as $k): ?>
                    <option><?= esc($k['nama']) ?></option>
                <?php endforeach; ?>
            </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal mulai sewa</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan tambahan</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Booking</button>
        </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Smooth scroll untuk anchor
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.onclick = function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if(target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth' });
        }
      };
    });
    </script>
</body>
</html>
