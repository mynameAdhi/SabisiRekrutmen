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
                    <a class="nav-link" href="<?= base_url('user'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('user/profile');?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('user/biodata') ?>">Data Diri</a>
                </li>

            </ul>
            <ul class="navbar-nav navbar-right">
                <li><a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-outline-danger bg-danger text-white">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container p-3 my-5">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url('css/img/') . $user['image']; ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?= $user['nama'];?></h4>
                      <p class="text-secondary mb-1"><?= $user['email'];?></p>
                      <p class="text-muted font-size-sm"> <?= $biodata['provinsi'];?>, <?= $biodata['alamat'];?>, <?= $biodata['kelurahan'];?></p>
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
        <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $user['nama'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $user['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $biodata['notelp'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $biodata['alamat'];?>
                    </div>
                  </div>
                  <!-- <hr> -->
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div> -->
                </div>
              </div>


            </div>
           
          </div>

        </div>
    </div>
</body>

</html>