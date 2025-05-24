<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #F5EEDD, rgb(255, 255, 255));
            color: #2A4759;
            font-family: 'Courier New', Courier, monospace;
        }

        h2 {
            color: rgb(224, 18, 110);
        }

        a, .btn {
            font-family: inherit;
        }

        .btn-success {
            background-color: #7AE2CF;
            border-color: #2A4759;
            color: #077A7D;
            text-shadow: none;
            font-weight: bold;
        }

        .btn-success:hover {
            background-color: rgb(18, 156, 160);
        }

        .btn-primary {
            background-color: rgb(224, 18, 110);
            border-color: rgb(1, 57, 76);
        }

        .btn-primary:hover {
            background-color: rgb(194, 15, 96);
        }

        label {
            font-weight: bold;
        }
        
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2><strong>Tambah Buku</strong></h2>

    <form action="<?= base_url('buku/store') ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label>Judul:</label>
            <input type="text" name="judul" class="form-control" value="<?= old('judul') ?>">
            <small><?= isset($validation) ? $validation->getError('judul') : '' ?></small>
        </div>

        <div class="mb-3">
            <label>Penulis:</label>
            <input type="text" name="penulis" class="form-control" value="<?= old('penulis') ?>">
            <small><?= isset($validation) ? $validation->getError('penulis') : '' ?></small>
        </div>

        <div class="mb-3">
            <label>Penerbit:</label>
            <input type="text" name="penerbit" class="form-control" value="<?= old('penerbit') ?>">
            <small><?= isset($validation) ? $validation->getError('penerbit') : '' ?></small>
        </div>

        <div class="mb-3">
            <label>Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" class="form-control" value="<?= old('tahun_terbit') ?>">
            <small><?= isset($validation) ? $validation->getError('tahun_terbit') : '' ?></small>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= base_url('buku') ?>" class="btn btn-primary">Kembali</a>
    </form>
</div>

</body>
</html>
