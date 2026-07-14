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


    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        :root {
            --purple: #7b2cbf;
            --purple-soft: #f3ecff;
        }

        body {
            background: #f8f9fa;
        }

        /* Supaya konten tidak menabrak sidebar dari layouts.master */
        .main-content {
            margin-left: 260px;
            /* sesuaikan dengan lebar sidebar */
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

        <style> :root {
            --purple: #7b2cbf;
            --purple-soft: #f3ecff;
        }

        body {
            background: #f8f9fa;
        }

        .main-content {
            margin-left: 260px;
            padding: 30px;
            min-height: 100vh;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }

        .table-card {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow-x: auto;
        }

        .page-header h2 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-header p {
            color: #6c757d;
            margin-bottom: 25px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        /* Modal styling */
        .modal-header {
            background: #7b2cbf;
            color: #fff;
            border-radius: 15px 15px 0 0;
        }

        .modal-header .btn-close {
            filter: invert(1);
        }

        .modal-content {
            border-radius: 15px;
            border: none;
        }

        .input-group-text {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

    @extends('layouts.master')

    @section('content')
        <div class="main-content">

            @if (session('sukses_login'))
                <script>
                    Swal.fire({
                        title: 'Login Berhasil',
                        text: '{{ session('sukses_login') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif
            @if (session('sukses_edit'))
                <script>
                    Swal.fire({
                        title: 'Edit Berhasil',
                        text: '{{ session('sukses_edit') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif
            @if (session('suksesTambah'))
                <script>
                    Swal.fire({
                        title: 'Edit Berhasil',
                        text: '{{ session('suksesTambah') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif






            <!-- Header + Tombol Tambah -->
            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-4">
                <div class="page-header mb-0">
                    <h2>Dashboard</h2>
                    <p class="mb-0">Selamat datang di halaman buku tamu</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Data
                </button>
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
                                            class="btn shadow btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form id="form-delete-{{ $data->id }}"
                                            action="/admin/buku-tamu/delete/{{ $data->id }}" method="post">
                                            @csrf
                                            <button type="button" class="shadow btn btn-danger btn-sm"
                                                onclick="konfirmasiDelete({{ $data->id }},'{{ $data->nama_lengkap }}','{{ $data->email }}')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <script>
                            function konfirmasiDelete(id, nama, email) {
                                Swal.fire({
                                    title: 'Hapus Data?',
                                    text: `Data "${nama}" dengan email "${email}" akan dihapus permanen!`,
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#6c757d',
                                    confirmButtonText: 'Ya, Hapus!',
                                    cancelButtonText: 'Batal'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById(`form-delete-${id}`).submit();
                                    }
                                });
                            }
                        </script>



                    </tbody>
                </table>
            </div>

        </div>

        <!-- ======================== MODAL TAMBAH DATA ======================== -->
        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahLabel">
                            <i class="bi bi-person-plus me-2"></i>Tambah Data Buku Tamu
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body p-4">
                        <form id="formTambah" action="/admin/buku-tamu/tambah/" method="post">
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
                                        <input name="nama_instansi" class="form-control" placeholder="Nama Instansi"
                                            required>
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
                                        <input name="keperluan" class="form-control" placeholder="Keperluan singkat"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12 d-flex align-items-center">
                                    <input class="form-check-input me-2" type="checkbox" id="confirm" required>
                                    <label for="confirm" class="mb-0">Data sudah benar</label>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm"
                            onclick="document.getElementById('formTambah').reset()">
                            <i class="bi bi-arrow-counterclockwise me-1"></i>Reset
                        </button>
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" form="formTambah" class="btn btn-primary btn-sm">
                            Upload <i class="bi bi-send ms-1"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    @endsection

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
