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
    <link rel="stylesheet" href="<?php echo base_url('css/style2.css'); ?>">

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
                    <a class="nav-link" href="<?php echo base_url('web/index') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web/lowongan'); ?>">Lowongan Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('web/about') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web/contact'); ?>">Hubungi Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li><a href="<?= base_url('auth'); ?>" class="btn btn-outline-success bg-success text-white">Login</a></li>
            </ul>
        </div>
        <a href="<?= base_url('auth/registrasi'); ?>" class="btn btn-outline-danger bg-danger text-white">Daftar</a>
    </nav>
    <div class="rounded-pill p-5 mx-5 mt-5 bg-secondary text-light">
        <p style="font-family: poppins;" class="text-center fs-4">SabiSI merupakan startup yang didirikan oleh beberapa mahasiswa Universitas
            Bina Sarana Informatika. E-recruitment ini kami buat agar para pencari lowongan pekerjaan lebih mudah
            mendapatkan pekerjaan sesuai dengan bakat serta keahliannya. Serta para rekruter lebih mudah dalam menemukan pekerja yang terampil.
        </p>
    </div>
</body>

</html>