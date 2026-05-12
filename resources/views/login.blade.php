<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Login - Buku Tamu Digital</title>

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

        .login-wrapper {
            min-height: 100vh;
        }

        .login-card {
            border: none;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(13, 110, 253, 0.12);
            overflow: hidden;
        }

        .login-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .login-icon {
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

        .login-title {
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .login-subtitle {
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

        .btn-login {
            border-radius: 10px;
            padding: 0.55rem 1.2rem;
            font-weight: 600;
        }

        .register-link {
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
            <div class="row justify-content-center align-items-center login-wrapper">
                <div class="col-12 col-sm-10 col-md-8 col-lg-5">

                    <div class="card login-card" data-aos="zoom-in" data-aos-duration="700">
                        <div class="card-body p-4 p-md-5">

                            <!-- Header -->
                            <div class="login-header">
                                <div class="login-icon">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </div>
                                <h3 class="login-title">Login</h3>
                                <p class="login-subtitle mb-0">
                                    Masuk ke akun Buku Tamu Digital
                                </p>
                            </div>

                            <!-- Alert Error -->
                            @if (session('gagal_login'))
                                <script>
                                    Swal.fire({
                                        title: 'Login Gagal',
                                        text: '{{ session('gagal_login') }}',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                </script>
                            @endif

                            <!-- Form -->
                            <form action="/login/submit" method="post" class="mt-4">
                                @csrf

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
                                            placeholder="Masukkan password"
                                            required>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <a href="{{ url('register') }}"
                                        class="btn btn-outline-secondary btn-sm register-link">
                                        Belum punya akun?
                                    </a>

                                    <button class="btn btn-primary btn-login" type="submit">
                                        Login
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