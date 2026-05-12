<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Register - Buku Tamu Digital</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #eef4ff, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .register-wrapper {
            min-height: 100vh;
        }

        .register-card {
            border: none;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(13, 110, 253, 0.12);
            overflow: hidden;
        }

        .register-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .register-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 1rem;
            border-radius: 20px;
            background: linear-gradient(135deg, #0d6efd, #4f8dfd);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 10px 25px rgba(13, 110, 253, 0.25);
        }

        .register-title {
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .register-subtitle {
            color: #6c757d;
            font-size: 0.95rem;
        }

        .input-group-text {
            background-color: #f8f9fa;
            border-right: 0;
        }

        .form-control {
            border-left: 0;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .input-group:focus-within {
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
            border-radius: 0.5rem;
        }

        .btn-register {
            border-radius: 10px;
            padding: 0.55rem 1.2rem;
            font-weight: 600;
        }

        .login-link {
            font-size: 0.9rem;
        }

        .footer-text {
            font-size: 0.8rem;
            color: #6c757d;
            text-align: center;
            margin-top: 1.5rem;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center register-wrapper">
                <div class="col-12 col-sm-10 col-md-8 col-lg-5">

                    <div class="card register-card" data-aos="zoom-in" data-aos-duration="700">
                        <div class="card-body p-4 p-md-5">

                            <!-- Header -->
                            <div class="register-header">
                                <div class="register-icon">
                                    <i class="bi bi-person-plus-fill"></i>
                                </div>
                                <h3 class="register-title">Register</h3>
                                <p class="register-subtitle mb-0">
                                    Buat akun baru untuk Buku Tamu Digital
                                </p>
                            </div>

                            <!-- Alert Error -->
                            @if (session('gagal'))
                                <script>
                                    Swal.fire({
                                        title: 'Registrasi Gagal',
                                        text: '{{ session('gagal') }}',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                </script>
                            @endif

                            <!-- Form -->
                            <form action="/register/submit" method="post" class="mt-4">
                                @csrf

                                <!-- Nama -->
                                <div class="mb-3">
                                    <label class="form-label small text-muted">Nama Lengkap</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                        <input type="text"
                                            name="name"
                                            class="form-control"
                                            placeholder="Masukkan nama lengkap"
                                            required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label small text-muted">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-envelope-fill"></i>
                                        </span>
                                        <input type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="email@contoh.com"
                                            required>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="mb-4">
                                    <label class="form-label small text-muted">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-lock-fill"></i>
                                        </span>
                                        <input type="password"
                                            name="password"
                                            class="form-control"
                                            placeholder="Buat password"
                                            required>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <a href="{{ url('/login') }}"
                                        class="btn btn-outline-secondary btn-sm login-link">
                                        Sudah punya akun?
                                    </a>

                                    <button class="btn btn-primary btn-register" type="submit">
                                        Daftar
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </form>

                            <!-- Footer -->
                            <div class="footer-text">
                                © 2026 Buku Tamu Digital
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>