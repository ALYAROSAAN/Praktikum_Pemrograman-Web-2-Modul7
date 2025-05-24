<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #F5EEDD, #ffffff);
            font-family: 'Courier New', Courier, monospace;
            color: #2A4759;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #2A4759;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .btn-primary {
            background-color: #7AE2CF;
            border-color: #2A4759;
            color: #077A7D;
            font-weight: bold;
            height: 50px;
        }
        label {
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: rgb(18, 156, 160);
            
        }

        .form-control {
            font-family: 'Courier New', Courier, monospace;
        }

        .error-msg {
            color: red;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4" style="width: 400px;">
        <h3 class="mb-3 text-center" ><strong>Login Dulu Yuk!</strong> </h3>
        <p class="text-center">username: alya, Pass: 12345678</p>

        <?php if (session()->getFlashdata('error')): ?>
            <p class="error-msg text-center"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <form method="post" action="<?= base_url('loginAuth') ?>">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

</body>
</html>
