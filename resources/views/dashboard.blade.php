<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Buku Tamu</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS (optional, ringan) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }

        /* Supaya konten tidak menabrak sidebar dari layouts.master */
        .main-content {
            margin-left: 260px; /* sesuaikan dengan lebar sidebar */
            padding: 30px;
            min-height: 100vh;
        }

        /* Responsive untuk layar kecil */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }

        /* Card form */
        .form-card {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        /* Card tabel */
        .table-card {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow-x: auto;
        }

        /* Header */
        .page-header h2 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-header p {
            color: #6c757d;
            margin-bottom: 25px;
        }

        /* Input group */
        .input-group-text {
            background-color: #f8f9fa;
        }

        /* Table */
        .table th,
        .table td {
            vertical-align: middle;
        }

        /* Tombol aksi */
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        /* Navbar agar tetap di atas */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1050;
        }
    </style>
</head>

<body>

    {{-- <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">📘 Buku Tamu</span>
            <a href="#" class="btn btn-light btn-sm">Logout</a>
        </div>
    </nav> --}}

    @extends('layouts.master')
    @section('content')

        <!-- Konten utama -->
        <div class="main-content">

            <!-- Header -->
            <div class="page-header">
                <h2>Dashboard</h2>
                <p>Selamat datang di halaman buku tamu</p>
            </div>

            <!-- Form Tambah Data -->
            <div class="form-card">
                <form action="/admin/buku-tamu/tambah/" method="post">
                    @csrf

                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Jenis Instansi</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <select name="jenis_instansi" class="form-select" required>
                                    <option value="" selected>Pilih...</option>
                                    <option>Pelajar</option>
                                    <option>Pemerintah</option>
                                    <option>Umum</option>
                                    <option>Swasta</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Nama Instansi</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-bank"></i></span>
                                <input name="nama_instansi" class="form-control" placeholder="Nama Instansi" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">No WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-whatsapp"></i></span>
                                <input name="no_wa" type="tel" class="form-control"
                                    placeholder="08xx-xxxx-xxxx" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input name="email" type="email" class="form-control"
                                    placeholder="email@contoh.com" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Keperluan</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                <input name="keperluan" class="form-control"
                                    placeholder="Keperluan singkat" required>
                            </div>
                        </div>

                        <div class="col-12 d-flex align-items-center">
                            <input class="form-check-input me-2" type="checkbox" id="confirm" required>
                            <label for="confirm" class="mb-0">Data sudah benar</label>
                        </div>

                        <div class="col-12 d-flex justify-content-between align-items-center flex-wrap gap-2">
                            {{-- <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm">Kembali</a> --}}
                            <div>
                                <button type="reset" class="btn btn-light btn-sm me-2">Reset</button>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Upload <i class="bi bi-send ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Tabel Data -->
            <div class="table-card">
                <table class="table table-striped table-bordered table-hover text-center align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Keperluan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku_tamu as $no => $data)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->nama_instansi }}</td>
                                <td>{{ $data->no_wa }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->keperluan }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="/admin/buku-tamu/edit/{{ $data->id }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="/admin/buku-tamu/delete/{{ $data->id }}"
                                            method="post">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @endsection

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>