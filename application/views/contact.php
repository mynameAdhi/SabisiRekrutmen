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

    <script type="text/javascript" src="<?php echo base_url('js/setting.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('js/setting.js'); ?>">
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
                    <a class="nav-link" href="<?php echo base_url('web/lowongan'); ?>">Lowongan Pekerjaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web/about') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('web/contact'); ?>">Hubungi Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li><a href="<?php echo base_url('auth'); ?>" class="btn btn-outline-success bg-success text-white">Login</a></li>
            </ul>
        </div>
        <a href="<?php echo base_url('auth/registrasi'); ?>" class="btn btn-outline-danger bg-danger text-white">Daftar</a>
    </nav>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <?= $this->session->flashdata('message'); ?>
                        <h3>Hubungi Kami</h3>
                        <p>Isi data ini apabila ada masalah terkait website/lowongan pekerjaan.</p>
                        <form class="requires-validation" action="<?= base_url('web/contact'); ?>" method="post" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nama" placeholder="Nama*" required>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail*" required>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div><br>

                            <div class="col-md-12">
                                <input class="form-control" type="number" name="no_telp" placeholder="Nomor Telepon*" required>
                                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div><br>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="pesan" placeholder="Pesan Anda*" required>
                                <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label">I confirm that all data are correct</label>
                                <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>


                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-info">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>