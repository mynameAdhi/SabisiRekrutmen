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
                    <a class="nav-link active" href="<?php echo base_url('web/lowongan'); ?>">Lowongan Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web/about') ?>">Tentang Kami</a>
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
    <div class="container-fluid p-5">
        <h2 class="text-center">
            Lowongan Pekerjaan
        </h2>
        <div class="row p-5">
            <div class="col-1">
                Semua
            </div>
            <div class="col-1">
                Sarjana
            </div>
            <div class="col-1">
                Diploma
            </div>
            <!-- <div class="row" style="margin-top: 50px">
                <div class="col-xs-4 col-xs-offset-4">
                    <form action="<?= base_url('web/lowongan') ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Masukan Kata Kunci...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit">Cari</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div> -->

            <h4 class="text-center">
                Posisi Yang Tersedia
            </h4>

            <table border="1">
                <tr>
                    <th style="text-align:left;" rowspan="2">Kepala Produksi</th>
                    <th style="text-align:right;" colspan="2">Jenjang</th>
                    <th style="text-align:right;">Batas Akhir</th>
                </tr>
                <tr>
                    <td style="text-align:right;" colspan="2">S1</td>
                    <td style="text-align:right;">2023-12-25</td>
                </tr>
                <tr>
                    <th style="text-align:left;" rowspan="2">Kepala Produksi</th>
                    <th style="text-align:right;" colspan="2">Jenjang</th>
                    <th style="text-align:right;">Batas Akhir</th>
                </tr>
                <tr>
                    <td style="text-align:right;" colspan="2">S1</td>
                    <td style="text-align:right;">2023-12-25</td>
                </tr>
            </table>
        </div>
</body>

</html>