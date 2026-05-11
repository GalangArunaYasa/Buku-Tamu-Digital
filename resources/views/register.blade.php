<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS (optional, ringan) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <div class="d-flex justify-content-center align-items-center"
            style="min-height:100vh; background:linear-gradient(135deg,#fbf8ff,#ffffff);">
            <div style="width:100%; max-width:500px;">

                <div class="card shadow-sm border-0" style="border-radius:12px;">
                    <div class="card-body p-4">

                        <h5 class="mb-1">Register</h5>
                        <small class="text-muted">Buat akun baru</small>

                        {{-- session error --}}
                        @if (session('gagal'))
                            <script>
                                Swal.fire({
                                    title: 'Error!',
                                    text: '{{ session('gagal') }}',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                })
                            </script>
                        @endif

                        <form action="/register/submit" method="post" class="mt-3">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label small text-muted">Nama</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Nama lengkap"
                                        required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label small text-muted">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="email@contoh.com" required>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label small text-muted">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('/login') }}" class="btn btn-outline-secondary btn-sm">Login</a>
                                <button class="btn btn-primary btn-sm" type="submit">
                                    Daftar <i class="bi bi-arrow-right ms-1"></i>
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>
