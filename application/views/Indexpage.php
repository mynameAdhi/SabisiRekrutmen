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
                    <a class="nav-link active" href="<?php echo base_url('web/index') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web/lowongan');?>">Lowongan Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web/about') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web/contact'); ?>">Hubungi Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li><a href="<?php echo base_url('auth'); ?>" class="btn btn-outline-success bg-success text-white">Login</a></li>
            </ul>
        </div>
        <a href="<?php echo base_url('auth/registrasi'); ?>" class="btn btn-outline-danger bg-danger text-white">Daftar</a>
    </nav>
    <div class="container p-3 my-5 text-light">
        <h3>
            SELAMAT DATANG
            <br>E-RECRUITMENT
        </h3>
        <br>
        <h1>
            DI CV SABISI
        </h1>
        <br>
        <h4>Mulai Bangun Mimpimu!!</h4>
        <a href="<?= base_url('auth/registrasi'); ?>" class="btn btn-outline-light">Awali Perjalananmu</a>
    </div>
</body>

</html>