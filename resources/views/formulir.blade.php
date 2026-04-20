<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Form Buku Tamu</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- AOS (optional, ringan) -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    /* Minimal, standar, dan rapi */
    :root{
      --primary-1:#7b2cbf;
      --muted:#6b6b78;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      font-family:system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background:linear-gradient(135deg,#fbf8ff,#ffffff);
      padding:24px;
    }

    .wrap{
      width:100%;
      max-width:720px;
    }

    .card {
      border-radius:12px;
      padding:18px;
      border:0;
      box-shadow:0 8px 24px rgba(20,20,40,0.06);
      background:linear-gradient(180deg,#fff,#fbfbff);
    }

    .form-control, .form-select{
      border-radius:8px;
      border:1px solid #e9e9f0;
      padding:10px 12px;
      background:#fff;
    }

    .input-group-text{
      background:transparent;
      border:0;
      color:var(--primary-1);
      width:44px;
      justify-content:center;
    }

    .btn-primary-custom{
      background:linear-gradient(90deg,var(--primary-1),#b140c2);
      color:#fff;
      border:0;
      border-radius:8px;
      padding:9px 14px;
    }

    .small-muted{ color:var(--muted); font-size:.9rem; }

    @media (max-width:720px){
      .wrap{ padding:0 8px; }
    }
  </style>
</head>
<body>

  <div class="wrap">
    <div class="card" data-aos="fade-up">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <div>
          <h5 class="mb-0">Form Buku Tamu</h5>
          <small class="small-muted">Isi data singkat untuk administrasi</small>
        </div>
        <div class="text-end small-muted">Versi sederhana</div>
      </div>

      <form action="{{ route('formulir_tambah') }}" method="POST" novalidate>
        @csrf

        <div class="row g-3">
          <div class="col-12">
            <label class="form-label small-muted">Nama Lengkap</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-person"></i></span>
              <input name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label small-muted">Jenis Instansi</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-building"></i></span>
              <select name="jenis_instansi" class="form-select" required>
                <option selected>Pilih...</option>
                <option>Pelajar</option>
                <option>Pemerintah</option>
                <option>Umum</option>
                <option>Swasta</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label small-muted">Nama Instansi</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-bank"></i></span>
              <input name="nama_instansi" class="form-control" placeholder="Nama Instansi" required>
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label small-muted">No WhatsApp</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-whatsapp"></i></span>
              <input name="no_wa" type="tel" class="form-control" placeholder="08xx-xxxx-xxxx" required>
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label small-muted">Email</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-envelope"></i></span>
              <input name="email" type="email" class="form-control" placeholder="email@contoh.com" required>
            </div>
          </div>

          <div class="col-12">
            <label class="form-label small-muted">Keperluan</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
              <input name="keperluan" class="form-control" placeholder="Keperluan singkat" required>
            </div>
          </div>

          <div class="col-12 d-flex align-items-center">
            <input class="form-check-input me-2" type="checkbox" id="confirm" required>
            <label for="confirm" class="small-muted mb-0">Data sudah benar</label>
          </div>

          <div class="col-12 d-flex justify-content-between align-items-center">
            <a href="javascript:history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
            <div>
              <button type="reset" class="btn btn-light btn-sm me-2">Reset</button>
              <button type="submit" class="btn-primary-custom btn-sm">Kirim <i class="bi bi-send ms-1"></i></button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS (optional, ringan) -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // Inisialisasi AOS singkat; hapus jika tidak perlu
    if (window.AOS) AOS.init({ duration: 500, once: true });

    // UX sederhana: scroll ke field invalid pertama
    (function(){
      const form = document.querySelector('form[novalidate]');
      if(!form) return;
      form.addEventListener('submit', function(e){
        if(!form.checkValidity()){
          e.preventDefault();
          const firstInvalid = form.querySelector(':invalid');
          if(firstInvalid) firstInvalid.scrollIntoView({behavior:'smooth', block:'center'});
          form.classList.add('was-validated');
        }
      });
    })();
  </script>
</body>
</html>
