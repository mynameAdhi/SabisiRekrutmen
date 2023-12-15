<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabisi Rekrutmen</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>
    <img class="bg-gambar" src="<?php echo base_url('css/img/gambar3.jpeg') ?>" alt="">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SabiSI</a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #00008B;">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('admin'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/profile'); ?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/data'); ?>">Data Pelamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/berkas'); ?>">Berkas Pelamar</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li><a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-outline-danger bg-danger text-white">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container p-3 my-5 text-light">
        <h1>Selamat Datang!!</h1>
        <h3><?php echo $this->session->userdata('email'); ?></h3>
        <p class="fs-4">Kamu Telah Login Sebagai Admin !!</p>

    </div>
</body>

</html>