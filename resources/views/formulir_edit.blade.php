<!doctype html>
<html lang="en" tamu-bs-theme="dark">

{{-- ============================================================
     SECTION 1: HEAD — Meta, CSS, dan Konfigurasi Halaman
     ============================================================ --}}

<head>
    <title>Edit Data Buku Tamu</title>

    {{-- Meta wajib untuk encoding dan responsif --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Bootstrap CSS v5.3.8 — Framework utama untuk styling --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    {{-- Bootstrap Icons — Library ikon untuk tampilan form --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    {{-- ============================================================
         SECTION 2: CUSTOM CSS — Styling Khusus Halaman Edit
         ============================================================ --}}
    <style>
        /* Background halaman */
        body {
            background: #f8f9fa;
        }

        /* Layout utama — menyesuaikan dengan sidebar (260px) dari layouts.master */
        .main-content {
            margin-left: 260px;
            padding: 30px;
            min-height: 100vh;
        }

        /* Responsive: hilangkan margin sidebar di layar kecil (mobile) */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }

        /* Card / kotak utama form edit */
        .edit-card {
            background: #ffffff;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            max-width: 900px;
            margin: 0 auto;
        }

        /* Judul halaman */
        .page-title {
            font-weight: 700;
            margin-bottom: 25px;
            color: #212529;
        }

        /* Background ikon di sisi kiri input */
        .input-group-text {
            background-color: #f8f9fa;
        }

        /* Baris tombol aksi bawah (Kembali / Reset / Kirim) */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
    </style>
</head>

{{-- ============================================================
     SECTION 3: BODY — Konten Utama Halaman
     ============================================================ --}}

<body>

    {{-- Navbar ditempatkan di sini (dari layouts.master) --}}
    <header>
        <!-- place navbar here -->
    </header>

    <main>
        <div class="main-content">
            <div class="edit-card">

                {{-- ============================================================
                     SECTION 4: JUDUL HALAMAN — Menampilkan nama tamu yang diedit
                     ============================================================ --}}
                <h4 class="page-title">
                    <i class="bi bi-pencil-square me-2"></i>
                    Edit Formulir {{ $tamu->nama_lengkap }}
                </h4>

                {{-- ============================================================
                     SECTION 5: FORM EDIT — Action ke route update dengan method POST
                     ============================================================ --}}
                <form action="/admin/buku-tamu/update/{{ $tamu->id }}" method="post">

                    {{-- Token CSRF wajib ada untuk keamanan form Laravel --}}
                    @csrf

                    <div class="row g-3 mb-4">

                        {{-- INPUT: Nama Lengkap --}}
                        <div class="col-12">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input name="nama_lengkap" value="{{ $tamu->nama_lengkap }}" class="form-control"
                                    placeholder="Nama Lengkap" required>
                            </div>
                        </div>

                        {{-- INPUT: Jenis Instansi (dropdown pilihan) --}}
                        <div class="col-md-6">
                            <label class="form-label">Jenis Instansi</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <select name="jenis_instansi" class="form-select" required>
                                    <option value="">Pilih...</option>
                                    <option value="Pelajar" {{ $tamu->jenis_instansi == 'Pelajar' ? 'selected' : '' }}>
                                        Pelajar
                                    </option>
                                    <option value="Pemerintah"
                                        {{ $tamu->jenis_instansi == 'Pemerintah' ? 'selected' : '' }}>
                                        Pemerintah
                                    </option>
                                    <option value="Umum" {{ $tamu->jenis_instansi == 'Umum' ? 'selected' : '' }}>
                                        Umum
                                    </option>
                                    <option value="Swasta" {{ $tamu->jenis_instansi == 'Swasta' ? 'selected' : '' }}>
                                        Swasta
                                    </option>
                                </select>
                            </div>
                        </div>

                        {{-- INPUT: Nama Instansi --}}
                        <div class="col-md-6">
                            <label class="form-label">Nama Instansi</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-bank"></i></span>
                                <input name="nama_instansi" value="{{ $tamu->nama_instansi }}" class="form-control"
                                    placeholder="Nama Instansi" required>
                            </div>
                        </div>

                        {{-- INPUT: Nomor WhatsApp --}}
                        <div class="col-md-6">
                            <label class="form-label">No WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-whatsapp"></i></span>
                                <input name="no_wa" value="{{ $tamu->no_wa }}" type="tel" class="form-control"
                                    placeholder="08xx-xxxx-xxxx" required>
                            </div>
                        </div>

                        {{-- INPUT: Alamat Email --}}
                        <div class="col-md-6">
                            <label class="form-label">email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope at"></i></span>
                                <input name="email" value="{{ $tamu->email }}" type="email" class="form-control"
                                    placeholder="email@contoh.com" required>
                            </div>
                        </div>

                        {{-- INPUT: Keperluan Kunjungan --}}
                        <div class="col-12">
                            <label class="form-label">Keperluan</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                <input name="keperluan" value="{{ $tamu->keperluan }}" class="form-control"
                                    placeholder="Keperluan singkat" required>
                            </div>
                        </div>

                        {{-- ============================================================
                             SECTION 6: KONFIRMASI — Checkbox wajib dicentang sebelum submit
                             ============================================================ --}}
                        {{-- <div class="col-12 d-flex align-items-center">
                            <input class="form-check-input me-2" type="checkbox" id="confirm" required>
                            <label for="confirm" class="mb-0">sudah benar ?</label>
                        </div> --}}

                        {{-- ============================================================
                             SECTION 7: TOMBOL AKSI — Kembali, Reset, dan Submit Form
                             ============================================================ --}}
                        <div class="col-12 form-actions">

                            {{-- Tombol kiri: kembali ke dashboard --}}
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary btn-sm">
                                Kembali
                            </a>

                            {{-- Tombol kanan: reset form & kirim data --}}
                            <div>
                                <button type="reset" class="btn btn-light btn-sm me-2">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Kirim <i class="bi bi-send ms-1"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </form>
                {{-- END FORM --}}

            </div>
        </div>
    </main>

    {{-- Footer ditempatkan di sini --}}
    <footer>
        <!-- place footer here -->
    </footer>

    {{-- ============================================================
         SECTION 8: JAVASCRIPT — Bootstrap Bundle (termasuk Popper.js)
         ============================================================ --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>
