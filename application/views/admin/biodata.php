<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
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
                    <a class="nav-link" href="<?= base_url('admin'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/profile'); ?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('admin/biodata') ?>">Data Diri</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li><a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-outline-danger bg-danger text-white">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container p-3 my-5 text-light">
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('user/biodata'); ?>" class="row g-3 text-dark" method="post">
            <h3 class="text-left">Biodata</h3>
            <hr>
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>

            </div>
            <div class="col-md-6">
                <label for="notelp" class="form-label">No Telepon</label>
                <input type="number" class="form-control" name="notelp" id="notelp">
                <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" name="agama" id="agama">
                <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <h3 class="text-left">Pendidikan</h3>
            <hr>
            <div class="col-md-6">
                <label for="jenjang" class="form-label">Jenjang</label>
                <input type="text" class="form-control" name="jenjang" id="jenjang">
                <?= form_error('jenjang', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="thn_mulai" class="form-label">Tahun Mulai</label>
                <input type="text" class="form-control" name="thn_mulai" id="thn_mulai">
                <?= form_error('thn_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control" name="pendidikan" id="pendidikan">
                <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="thn_selesai" class="form-label">Tahun Selesai</label>
                <input type="text" class="form-control" name="thn_selesai" id="thn_selesai">
                <?= form_error('thn_selesai', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan">
                <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-6">
                <label for="negara" class="form-label">Negara</label>
                <input type="text" class="form-control" name="negara" id="negara">
                <?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <h3 class="text-left">Alamat</h3>
            <hr>
            <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-4">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi" id="provinsi">
                <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-4">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" id="kecamatan">
                <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-4">
                <label for="kelurahan" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" name="kelurahan" id="kelurahan">
                <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-1">
                <label for="kode" class="form-label">Kode Pos</label>
                <input type="number" class="form-control" name="kode" id="kode">
                <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>


            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button id="submit" type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>