<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buku Tamu Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --warna-utama: rgb(28, 2, 30);
            --warna-btn: rgba(237, 229, 229, 0.833);
        }

        body {
            font-family: "Segoe UI", sans-serif;
            position: relative;
            min-height: 100vh;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            /* background: url("images/bg-beranda.jpg") center/cover no-repeat; */
            filter: blur(8px);
            transform: scale(1.1);
            z-index: -1;
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px;
        }

        .glass-box {
            background: rgba(180, 173, 173, 0.55);
            backdrop-filter: blur(6px);
            border-radius: 20px;
            padding: 40px;
            max-width: 560px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .logo {}

        .logo img {
            height: 70px;
            margin-bottom: 20px;
        }

        .hero-text h1 {
            font-weight: 700;
            font-size: 2.4rem;
            color: #1f1f1f;
        }

        .hero-text p {
            font-size: 1.05rem;
            color: #333;
            margin-top: 15px;
            line-height: 1.7;
        }

        #btn-start {
            background-color: none;
            border: 1px solid rgb(156, 151, 151);
            padding: 12px 60px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-radius: 30px;
            color: var(--warna-utama);
            transition: 0.4s ease;
            font-weight: bold;
            box-shadow: 0 0 10px var(--warna-utama);
        }

        #btn-start:hover {
            background-color: rgb(132, 40, 146);
            color: #fffdfd;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transform: scale(1.05);
            box-shadow: 0 0 20px var(--warna-btn), 0 0 40px var(--warna-btn);
            font-weight: bold;
        }

        #btn-start:hover:active {
            background-color: var(--warna-btn);
            color: #1f1f1f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transform: scale(0.9);
            box-shadow: 0 0 20px var(--warna-btn), 0 0 40px var(--warna-btn);
        }

        .hero-img-container {
            height: 90vh;
            border-radius: 30px 0 0 30px;
            overflow: hidden;
        }

        .hero-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 992px) {
            .hero-img-container {
                display: none;
            }

            .glass-box {
                margin: auto;
            }
        }

        .about {
            color: black;
        }

        /* =============================================
           TAMBAHAN BARU — tidak mengubah kode di atas
           ============================================= */

        /* 1. Notif bar atas */
        .notif-bar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
            background: linear-gradient(90deg, rgb(132, 40, 146), rgb(28, 2, 30));
            color: #fff;
            text-align: center;
            font-size: 0.82rem;
            padding: 8px 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .notif-bar .notif-close {
            position: absolute;
            right: 16px;
            background: none;
            border: none;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            opacity: 0.7;
            line-height: 1;
        }

        .notif-bar .notif-close:hover {
            opacity: 1;
        }

        body.has-notif-bar {
            padding-top: 38px;
        }

        /* 2. Badge fitur kecil */
        .badge-fitur {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: rgba(132, 40, 146, 0.12);
            border: 1px solid rgba(132, 40, 146, 0.25);
            border-radius: 99px;
            padding: 4px 12px;
            font-size: 0.75rem;
            color: rgb(100, 10, 110);
            font-weight: 600;
            margin-bottom: 12px;
        }

        .badge-fitur .dot {
            width: 6px;
            height: 6px;
            background: rgb(132, 40, 146);
            border-radius: 50%;
            animation: blink 1.8s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        /* 3. Statistik kecil */
        .stat-row {
            display: flex;
            gap: 20px;
            margin-top: 18px;
            margin-bottom: 4px;
            flex-wrap: wrap;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            gap: 1px;
        }

        .stat-item .stat-angka {
            font-weight: 700;
            font-size: 1.15rem;
            color: rgb(28, 2, 30);
        }

        .stat-item .stat-label {
            font-size: 0.72rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .stat-divider {
            width: 1px;
            background: rgba(0,0,0,0.15);
            align-self: stretch;
        }

        /* 4. Toast notifikasi sukses */
        .toast-custom {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 9999;
            background: #fff;
            border-left: 4px solid rgb(132, 40, 146);
            border-radius: 10px;
            box-shadow: 0 6px 24px rgba(0,0,0,0.12);
            padding: 14px 18px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            min-width: 260px;
            max-width: 320px;
            animation: slideInToast 0.4s ease;
        }

        @keyframes slideInToast {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .toast-custom .toast-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(132, 40, 146, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .toast-custom .toast-title {
            font-weight: 700;
            font-size: 0.85rem;
            color: #1f1f1f;
            margin-bottom: 2px;
        }

        .toast-custom .toast-msg {
            font-size: 0.78rem;
            color: #555;
            line-height: 1.4;
        }

        .toast-custom .toast-close {
            position: absolute;
            top: 8px;
            right: 10px;
            background: none;
            border: none;
            font-size: 0.9rem;
            color: #aaa;
            cursor: pointer;
            line-height: 1;
        }
    </style>
</head>

<body class="has-notif-bar">

    <!-- ① NOTIFIKASI BAR ATAS (TAMBAHAN) -->
    <div class="notif-bar" id="notifBar">
        <span>✨ Sistem Buku Tamu Digital kini tersedia — daftar dan catat tamu acara Anda dengan mudah!</span>
        <button class="notif-close" onclick="tutupNotifBar()" title="Tutup">✕</button>
    </div>

    <section class="hero-section container-fluid">
        <div class="row w-100 align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 d-flex justify-content-center" data-aos="zoom-in-up">
                <div class="glass-box hero-text">

                    <div class="logo">
                        <img src="images/logos.png" alt="Logo">
                    </div>

                    <!-- ② BADGE FITUR (TAMBAHAN) -->
                    <div class="badge-fitur" data-aos="fade-right">
                        <span class="dot"></span>
                        Sistem Resmi & Terverifikasi
                    </div>

                    <h1>Buku Tamu Digital</h1>

                    <p>
                        Selamat datang di <strong>Buku Tamu Digital</strong>, sebuah sistem pencatatan kehadiran modern
                        yang dirancang untuk memudahkan pengelolaan tamu dalam berbagai acara seperti seminar, rapat,
                        workshop, pameran, pernikahan, dan kegiatan resmi lainnya.
                    </p>

                    <p>
                        Dengan website ini, proses registrasi tamu menjadi <strong>lebih cepat, akurat, dan
                            efisien</strong>
                        tanpa perlu buku fisik. Semua data langsung tersimpan secara otomatis dan dapat digunakan
                        untuk keperluan dokumentasi, laporan, serta evaluasi acara.
                    </p>

                    <!-- ③ STATISTIK KECIL (TAMBAHAN) -->
                    <div class="stat-row" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-item">
                            <span class="stat-angka">500+</span>
                            <span class="stat-label">Acara Tercatat</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-angka">12.000+</span>
                            <span class="stat-label">Tamu Terdaftar</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-angka">100%</span>
                            <span class="stat-label">Data Aman</span>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" id="btn-start" class="btn mt-4 mb-3 shadow" data-aos="fade-up"
                        data-aos-delay="450">
                        + Isi Buku Tamu
                    </a>
                    <br>
                    <a href="{{ route('tentang') }}" class="about m-3" data-aos="fade-up">
                        Selengkapnya Tentang Kami
                    </a>

                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 d-none d-lg-block">
                <div class="hero-img-container" data-aos="fade-up-left">
                    <img src="images/icon.jpg" alt="Hero Image">
                </div>
            </div>

        </div>
    </section>

    <!-- ④ TOAST SELAMAT DATANG (TAMBAHAN) -->
    <div class="toast-custom" id="toastWelcome" style="display:none; position:fixed;">
        <div class="toast-icon">👋</div>
        <div>
            <div class="toast-title">Selamat Datang!</div>
            <div class="toast-msg">Silakan isi buku tamu untuk mencatat kehadiran Anda.</div>
        </div>
        <button class="toast-close" onclick="tutupToast()">✕</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: "ease-out-cubic",
            once: true
        });

        // Notif bar atas
        function tutupNotifBar() {
            document.getElementById('notifBar').style.display = 'none';
            document.body.classList.remove('has-notif-bar');
        }

        // Toast selamat datang — muncul 1.5 detik setelah halaman terbuka
        setTimeout(function () {
            var toast = document.getElementById('toastWelcome');
            toast.style.display = 'flex';
            // Auto-tutup setelah 5 detik
            setTimeout(tutupToast, 5000);
        }, 1500);

        function tutupToast() {
            var toast = document.getElementById('toastWelcome');
            toast.style.opacity = '0';
            toast.style.transition = 'opacity 0.3s ease';
            setTimeout(function () { toast.style.display = 'none'; }, 300);
        }
    </script>
</body>

</html>