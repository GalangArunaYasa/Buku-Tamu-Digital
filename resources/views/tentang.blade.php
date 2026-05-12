<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Tentang Aplikasi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        /* Menyesuaikan dengan sidebar */
        .main-content {
            margin-left: 260px;
            padding: 30px;
            min-height: 100vh;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }

        /* Card styling */
        .about-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            background: #ffffff;
        }

        .about-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .about-icon {
            width: 55px;
            height: 55px;
            border-radius: 15px;
            background: linear-gradient(135deg, #0d6efd, #4f8dfd);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
        }

        .feature-list li {
            margin-bottom: 8px;
        }

        .badge-tech {
            font-size: 0.85rem;
            margin-right: 6px;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>

    @extends('layouts.master')
    @section('content')
        <main>
            <div class="main-content">
                <div class="container-fluid">
                    <div class="card about-card p-4 p-md-5">

                        <!-- Header -->
                        <div class="about-header">
                            <div class="about-icon">
                                <i class="bi bi-info-circle-fill"></i>
                            </div>
                            <div>
                                <h3 class="mb-1 fw-bold">Tentang Aplikasi</h3>
                                <p class="text-muted mb-0">Sistem Buku Tamu Digital</p>
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <p class="text-secondary">
                            Aplikasi ini adalah sistem buku tamu digital sederhana yang digunakan untuk
                            mencatat data pengunjung secara cepat, rapi, dan terstruktur.
                        </p>

                        <p class="text-secondary">
                            Dibuat menggunakan:
                        </p>

                        <div class="mb-3">
                            <span class="badge bg-danger badge-tech">Laravel</span>
                            <span class="badge bg-primary badge-tech">Bootstrap 5</span>
                            <span class="badge bg-dark badge-tech">MySQL</span>
                        </div>

                        <hr>

                        <!-- Fitur -->
                        <h5 class="fw-semibold mb-3">
                            <i class="bi bi-stars text-warning me-2"></i>
                            Fitur Utama
                        </h5>

                        <ul class="feature-list">
                            <li>Input data tamu</li>
                            <li>Manajemen data (edit dan hapus)</li>
                            <li>Dashboard sederhana</li>
                            <li>Tampilan modern dan responsif</li>
                            <li>Penyimpanan data ke database MySQL</li>
                        </ul>

                        <hr>

                        <!-- Footer -->
                        <div class="text-muted small">
                            © 2026 Buku Tamu Digital — Dibuat dengan Laravel dan Bootstrap.
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <footer>
            <!-- place footer here -->
        </footer>
    @endsection

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>
</body>

</html>