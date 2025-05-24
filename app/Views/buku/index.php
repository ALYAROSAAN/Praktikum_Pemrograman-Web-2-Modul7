<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #F5EEDD,rgb(255, 255, 255));
            color: #2A4759;
            font-family: 'Courier New', Courier, monospace;
        }

        h2 {
            color: #2A4759;
        }

        a, .btn {
            font-family: inherit;
        }

        .btn-success {
            background-color: #7AE2CF;
            border-color:#2A4759;
            color:#077A7D;
            text-shadow: none;
            font-weight: bold;
        }

        .btn-success:hover {
            background-color:rgb(18, 156, 160);
            border-color: #00dd77;
        }

        .btn-danger {
            background-color:rgb(224, 18, 110);
            border-color: #2A4759;
        }

        .btn-danger:hover {
            background-color:rgb(192, 12, 93);
        }

        .btn-primary {
            background-color: #7AE2CF;
            border-color:rgb(1, 57, 76);
            color:rgb(1, 39, 40);
        }

        .btn-primary:hover {
            background-color:rgb(18, 156, 160);
        }

        .table {
            background-color: #077A7D;
            border-color: #444;
        }

        .table th {
            background-color: #077A7D;
            color: #DDDDDD;
        }

       
    </style>
</head>
<body>
 
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4 fs-4">
        <h2><strong>MY LIBRARY</strong></h2>
        <div>
            <span class="me-3">Selamat datang, <strong><?= session()->get('username') ?></strong></span>
            <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <a href="<?= base_url('buku/create') ?>" class="btn btn-success mb-3">+ Tambah Buku</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $index => $b): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= esc($b['judul']) ?></td>
                    <td><?= esc($b['penulis']) ?></td>
                    <td><?= esc($b['penerbit']) ?></td>
                    <td><?= esc($b['tahun_terbit']) ?></td>
                    <td>
                        <a href="<?= base_url('buku/edit/' . $b['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="<?= base_url('buku/delete/' . $b['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
