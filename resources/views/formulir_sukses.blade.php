<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Sukses</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/dist/aos.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            overflow-x: hidden; /* Mencegah scroll horizontal saat animasi AOS */
        }

        .icon-success {
            font-size: 5rem;
            color: #198754;
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.02); /* Sedikit efek zoom saat hover */
        }
    </style>
</head>

<body class="vh-100 d-flex justify-content-center align-items-center px-3">

    <div class="card border-0 shadow-lg rounded-4" 
         style="max-width: 450px; width: 100%;"
         data-aos="zoom-in" 
         data-aos-duration="1000">
        
        <div class="card-body text-center p-5">
            <div data-aos="fade-down" data-aos-delay="500">
                <i class="bi bi-check-circle-fill icon-success mb-3 d-inline-block"></i>
            </div>
            
            <h2 class="fw-bold text-dark mb-3">Sukses!</h2>
            <p class="text-muted mb-4 px-2">Terima kasih, data formulir Anda telah berhasil kami terima. Kami akan segera memprosesnya.</p>
            
            <a href="/" class="btn btn-success btn-lg rounded-pill w-100 shadow-sm">
                Kembali ke Beranda
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/dist/aos.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Inisialisasi AOS
        AOS.init({
            once: true // Animasi hanya berjalan sekali saat scroll/load
        });

        // Menjalankan SweetAlert saat halaman selesai dimuat
        window.onload = function() {
            Swal.fire({
                title: 'Berhasil Terkirim!',
                text: 'Sistem telah mencatat respon Anda.',
                icon: 'success',
                confirmButtonColor: '#198754',
                confirmButtonText: 'Mantap!',
                timer: 3000, // Menutup otomatis dalam 3 detik
                timerProgressBar: true
            });
        };
    </script>
</body>
</html>