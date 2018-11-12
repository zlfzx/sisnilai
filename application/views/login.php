<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('__/css/bootstrap.min.css');?>">
    <script src="<?= base_url('__/js/jquery.js');?>" charset="utf-8"></script>
    <script src="<?= base_url('__/js/bootstrap.min.js');?>" charset="utf-8"></script>
  </head>
  <body>
    <div class="container-fluid d-flex flex-row flex-wrap justify-content-center align-items-center pt-sm-4 pb-sm-4">
      <!--<h3 class="text-center">Sistem Informasi Nilai</h3>
      <h1 class="text-center">SMK Negeri 1 Kedungwuni</h1>-->

      <div>
        <h3 class="text-right">Sistem informasi Nilai</h3>
        <h1 class="text-right">SMK Negeri 1 Kedungwuni</h1>
      </div>

      <div class="col-xs-8 col-sm-8 col-md-4 mt-sm-4 mt-sm-4">
        <div class="card">
          <div class="card-header bg-primary text-white"><h3 class="text-center">Login</h3></div>
          <div class="card-body">
            <form action="<?= site_url('u_login/actlogin');?>" method="post">
              <div class="form-group">
                <label for="Nis">NIS :</label>
                <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS...">
              </div>
              <div class="form-group">
                <label for="Password">Password :</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password...">
              </div>
              <button type="submit" class="btn btn-primary">Login</button> &nbsp;&nbsp;
              <a href="<?= site_url('reset');?>">Lupa Password?</a>
            </form>
          </div>
        </div>
      </div>

    </div>

  </body>
</html>
