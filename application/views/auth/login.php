<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style2.css'); ?>">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-white mt-5">Login Dulu Yuuk!</h2>
                <div class="text-center mb-5 text-white">Pasti Kamu Gak Sabar Kan Mau Kerja</div>
                <div class="card my-5">

                    <?= $this->session->flashdata('pesan'); ?>
                    <form class="card-body cardbody-color p-lg-5" method="post" action="<?= base_url('auth'); ?>">

                        <div class="text-center">
                            Nanti Kita lanjut ngopi
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Ciee
                            Belum Punya Akun yaa? <a href="<?= base_url('auth/registrasi'); ?>" class="text-dark fw-bold"> Sini
                                Buat akun Dulu Yuuk
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>