<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --warna-utama: rgb(41, 53, 59);
            --warna-btn: rgb(172, 185, 183);
            --btn-utama: rgb(147, 94, 14);
            --btn-back: rgba(86, 91, 0, 0.833);
            --color-text: rgba(66, 66, 66, 0.833);
        }

        body {
            background: linear-gradient(135deg, #e9f7ff, #ffffff);
            color: var(--color-text);
            font-family: "Segoe UI", sans-serif;
            padding: 0;
        }

        .navbar-custom {
            background-color: var(--warna-utama);
        }

        .btn-custom {
            background-color: var(--warna-utama);
            color: white;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn-custom:hover {
            background-color: var(--warna-btn);
            color: black;
            box-shadow: 0 0 15px var(--warna-utama);
        }

        .card-custom {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        footer {
            background-color: var(--warna-utama);
            color: white;
        }
    </style>
</head>

<body>
    <!-- Hero -->
    <section class="py-5 text-center">
        <div class="container" data-aos="fade-down">
            <h1 class="fw-bold" style="color: var(--warna-utama);">Tentang Aplikasi</h1>
            <p class="mt-2">
                Website ini merupakan aplikasi <strong>Buku Tamu Digital</strong> yang dirancang untuk
                memudahkan pencatatan data pengunjung secara cepat, aman, dan terstruktur.
            </p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-4 shadow p-3">
                <div class="profile col-md-6" data-aos="fade-down-right">
                    <img src="images/ligu.png" class="img-thumbnail shadow" alt="Foto Profil">
                </div>
                <div class="col-md-6" data-aos-delay="450" data-aos="fade-up-left">
                    <h3 class="fw-bold mb-5" style="color: var(--warna-utama);">Tentang Pengembang</h3>
                    <h5 class="fw-bold" style="color: var(--warna-utama);">Galang Aruna Yasa</h5>
                    <p>
                        Aplikasi ini dikembangkan oleh saya sebagai bagian dari proyek pengembangan sistem
                        informasi berbasis web yang berfokus pada digitalisasi layanan tamu di sekolah,
                        instansi pemerintah, maupun organisasi umum.
                    </p>
                    <p>
                        Saya tertarik pada pengembangan web modern menggunakan teknologi seperti
                        <strong>HTML, CSS, Bootstrap, JavaScript, dan Laravel</strong> untuk menciptakan
                        aplikasi yang efisien, mudah digunakan, dan memiliki tampilan profesional.
                    </p>
                    <a href="#" class="btn btn-primary px-3 rounded-pill" data-aos="fade-up-right">
                        Lihat Proyek Lain
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section class="py-5" style="background-color: var(--warna-btn);">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-6">
                    <div class="card card-custom h-100" data-aos="fade-right" data-aos-delay="500">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Visi</h5>
                            <p class="card-text">
                                Menjadi solusi buku tamu digital yang modern, mudah digunakan, dan
                                membantu meningkatkan efisiensi pengelolaan data pengunjung.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-custom h-100" data-aos="fade-left" data-aos-delay="500">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Misi</h5>
                            <p class="card-text">
                                Mengembangkan sistem buku tamu digital yang responsif, aman,
                                mudah diakses, dan mampu menyimpan data pengunjung secara terstruktur
                                untuk kebutuhan administrasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote -->
    <div class="card m-4 shadow-sm">
        <div class="card-header fw-bold">
            Quote
        </div>
        <div class="card-body">
            <figure>
                <blockquote class="blockquote mb-2">
                    <p>"Teknologi bukan hanya tentang kode, tetapi tentang mempermudah kehidupan."</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Pengembang Aplikasi
                </figcaption>
            </figure>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: "ease-out-cubic",
            once: false,
            mirror: true
        });
    </script>
</body>

</html>
