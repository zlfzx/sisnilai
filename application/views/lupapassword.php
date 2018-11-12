<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="<?= base_url('__/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('__/css/style.css');?>">
    <script src="<?= base_url('__/js/jquery.js');?>" charset="utf-8"></script>
    <script src="<?= base_url('__/js/bootstrap.min.js');?>" charset="utf-8"></script>
  </head>
  <body>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center pt-sm-4 pb-sm-4">
      <h3 class="text-center">Sistem Informasi Nilai</h3>
      <h1 class="text-center">SMK Negeri 1 Kedungwuni</h1>

      <div class="col-xs-10 col-sm-6 col-md-4 mt-sm-4 mb-sm-4">
        <div class="card">
          <div class="card-header bg-primary text-white"><h3 class="text-center">Lupa Password</h3></div>
          <div class="card-body">
      <?php if(!isset($ganti)){ ?>

            <?php if (!isset($ambil)) { ?>
            <form action="<?= site_url('resetp');?>" method="post">
              <div class="form-group">
                <label for="NIS">Masukkan NIS :</label>
                <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS...">
              </div>
              <?php if(isset($cek)){echo "<h4 class='text-center' style='color: red;'>Data Tidak Ada !</h4>";}?>
                <a href="<?= site_url('login');?>">Kembali</a>
            </form>
          <?php } ?>

            <?php
              if (isset($ambil)) { ?>
            <form action="" method="post">
              <div class="form-group">
                <label for="Nis">NIS :</label>
                <input type="text" value="<?= $ambil['nis'];?>" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="Pertanyaan">Pertanyaan :</label>
                <input type="text" value="<?= $ambil['pertanyaan'];?>" name="pertanyaan" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label for="Jawaban">Jawaban :</label>
                <input type="text" name="jawaban" class="form-control">
              </div>
              <button type="submit" class="btn btn-block btn-primary">Reset Password</button> <br>
              <a href="<?= site_url('login');?>"> Kembali</a>
            </form>
          <?php } ?>

      <?php } ?>
      <?php if(isset($ganti)){ ?>
            <form action="" method="post">
              <div class="form-group">
                <label for="Password">Password Baru :</label>
                <input type="password" name="" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for="UlangiPassword">Ulangi Password :</label>
                <input type="password" name="" id="" class="form-control">
              </div>
            </form>
      <?php } ?>

          </div>
        </div>
      </div>

    </div>

  </body>
</html>
