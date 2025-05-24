<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
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
            background-color: rgb(188, 13, 92);
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
    <h2><strong> Edit Buku</strong></h2>

    <form method="post" action="<?= base_url('buku/update/' . $buku['id']) ?>">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label>Judul:</label>
            <input type="text" name="judul" value="<?= esc($buku['judul']) ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Penulis:</label>
            <input type="text" name="penulis" value="<?= esc($buku['penulis']) ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Penerbit:</label>
            <input type="text" name="penerbit" value="<?= esc($buku['penerbit']) ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" value="<?= esc($buku['tahun_terbit']) ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?= base_url('buku') ?>" class="btn btn-primary">Kembali</a>
    </form>
</div>

</body>
</html>
