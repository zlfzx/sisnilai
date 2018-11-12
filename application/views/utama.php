<div class="jumbotron jumbotron-fluid">
  <div class="container">

  <?php if($cek_password['password'] == $this->session->nis){ ?>
    <div class="alert alert-danger alert-dismissable">
      <button class="close" data-dismiss="alert">&times;</button>
      Anda masih menggunakan <b>Password Default</b>, ubah untuk menjaga keamanan akun anda. <a href="<?= site_url('profil');?>">Klik Disini !</a>
    </div>
  <?php } ?>

  <?php if($cek_pertanyaan['pertanyaan'] == "" || $cek_pertanyaan['jawaban'] == ""){ ?>
    <div class="alert alert-danger alert-dismissable">
      <button class="close" data-dismiss="alert">&times;</button>
      Anda belum mengatur <b>Pertanyaan / Jawaban</b> untuk mereset kata sandi. <a href="<?= site_url('profil');?>">Klik Disini!</a>
    </div>
  <?php } ?>

    <h1 class="display-4">Sistem Informasi Nilai</h1>
    <h1 class="display-3">SMK Negeri 1 Kedungwuni</h1>
    <a href="" class="btn btn-lg btn-warning text-white">Lihat Nilai</a>
  </div>
</div>
