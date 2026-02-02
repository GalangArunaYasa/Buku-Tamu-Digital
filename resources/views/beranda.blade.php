<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buku Tamu Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --warna-utama: rgb(28, 2, 30);
            --warna-btn:  rgba(237, 229, 229, 0.833);
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
            background: url("images/foto1.jpg") center/cover no-repeat;
            filter: blur(8px);
            transform: scale(1.1);
            z-index: -1;
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px;
            /* 🔧 DIUBAH */
        }

        /* 🔧 DIUBAH (baru) */
        .glass-box {
            background: rgba(255, 255, 255, 0.55);
            backdrop-filter: blur(6px);
            border-radius: 20px;
            padding: 40px;
            max-width: 560px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .logo img {
            height: 70px;
            /* 🔧 DIUBAH */
            margin-bottom: 20px;
            /* 🔧 DIUBAH */
        }

        .hero-text h1 {
            font-weight: 700;
            font-size: 2.4rem;
            /* 🔧 DIUBAH */
            color: #1f1f1f;
            /* 🔧 DIUBAH */
        }

        .hero-text p {
            font-size: 1.05rem;
            /* 🔧 DIUBAH */
            color: #333;
            /* 🔧 DIUBAH */
            margin-top: 15px;
            line-height: 1.7;
        }

        #btn-start {
            background-color: var(--warna-utama);
            padding: 12px 60px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-radius: 30px;
            color: rgb(255, 255, 255);
            transition: 0.4s ease;
            box-shadow: 0 0 10px var(--warna-utama);
        }

        #btn-start:hover {
            background-color: var(--warna-btn);
            color: #1f1f1f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transform: scale(1.1);
            box-shadow: 0 0 20px var(--warna-btn), 0 0 40px var(--warna-btn);
        }
        #btn-start:hover:active {
            background-color: var(--warna-btn);
            color: #1f1f1f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transform: scale(0.9);
            box-shadow: 0 0 20px var(--warna-btn), 0 0 40px var(--warna-btn);
        }




        /* 🔧 DIUBAH */
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
                /* 🔧 DIUBAH */
            }

            .glass-box {
                margin: auto;
                /* 🔧 DIUBAH */
            }
        }
    </style>
</head>

<body>

    <section class="hero-section container-fluid">
        <div class="row w-100 align-items-center"> <!-- 🔧 DIUBAH -->

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 d-flex justify-content-center"> <!-- 🔧 DIUBAH -->
                <div class="glass-box hero-text"> <!-- 🔧 DIUBAH -->

                    <div class="logo">
                        <img src="images/logos.png" alt="Logo">
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

                    <a href="{{ route('dashboard') }}" id="btn-start" class="btn mt-4 shadow"> <!-- 🔧 DIUBAH -->
                        Click Here
                    </a>

                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 d-none d-lg-block">
                <div class="hero-img-container">
                    <img src="images/foto1.jpg" alt="Hero Image">
                </div>
            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
