<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $title;?></title>
    <link rel="stylesheet" href="<?= base_url('__/css/bootstrap.min.css');?>">
    <script src="<?= base_url('__/js/jquery.js');?>" charset="utf-8"></script>
    <script src="<?= base_url('__/js/bootstrap.min.js');?>" charset="utf-8"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a href="<?=base_url();?>" class="navbar-brand">SISNILAI</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#myNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNav">
          <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="<?= site_url('user/nilai');?>">Nilai</a></li>
          </ul>
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?= site_url('profil');?>"><?= $this->session->nama;?></a></li>
            <li class="nav-item"><a class="nav-link" href="<?= site_url('u_login/logout');?>">Keluar</a></li>
          </ul>
        </div>
      </div>
    </nav>
