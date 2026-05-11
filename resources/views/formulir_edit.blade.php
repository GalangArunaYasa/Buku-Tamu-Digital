<!doctype html>
<html lang="en" tamu-bs-theme="dark">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <h4>Edit Formulir {{ $tamu->nama_lengkap }}</h4>

        <form action="/admin/buku-tamu/update/{{ $tamu->id }}" method="post">
            @csrf

            <div class="row g-3 mb-4">
                <div class="col-12">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input name="nama_lengkap" value="{{ $tamu->nama_lengkap }}" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Jenis Instansi</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-building"></i></span>
                        <select name="jenis_instansi" value="{{ $tamu->jenis_lengkap }}" class="form-select" required>
                            <option value="" selected>Pilih...</option>
                            <option>Pelajar</option>
                            <option>Pemerintah</option>
                            <option>Umum</option>
                            <option>Swasta</option>
                        </select>
                    </div>
                </div>


                <div class="col-md-6">
                    <label class="form-label">No WhatsApp</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-whatsapp"></i></span>
                        <input name="no_wa" value="{{ $tamu->no_wa }}" type="tel" class="form-control" placeholder="08xx-xxxx-xxxx" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input name="email" value="{{ $tamu->value }}" type="email" class="form-control" placeholder="email@contoh.com"
                            required>
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label">Keperluan</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                        <input name="keperluan" value="{{ $tamu->keperluan }}" class="form-control" placeholder="Keperluan singkat" required>
                    </div>
                </div>

                <div class="col-12 d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" id="confirm" required>
                    <label for="confirm" class="mb-0">sudah benar ? </label>
                </div>

                <div class="col-12 d-flex justify-content-between align-items-center">
                    <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
                    <div>
                        <button type="reset" class="btn btn-light btn-sm me-2">Reset</button>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Kirim <i class="bi bi-send ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
