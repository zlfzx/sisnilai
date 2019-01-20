<body class="kedua">
  <main class="kedua-profile">
  <div class="container-fluid">
    <a href="<?=base_url();?>" class="back btn"></span><i class="fa fa-arrow-left"></i></a>
  </div>
    <section class="container">
      <div class="row profile p-4">
        <div class="col-md-6">
          <img class="img-fluid" src="<?=base_url('assets/img/lupa.png');?>" width="100%">
        </div>
        <div class="col-md-6 profile-kanan my-2">
          <h3 class="title-ucapan">ganti password</h3>

            <form class="form-reset">
              <div class="form-group">
                <label for="password-lama">Password Lama</label>
                <input type="text" class="form-control" id="password-lama" placeholder="Password Lama">
              </div>
              <div class="form-group">
                <label for="password-baru">Password baru</label>
                <input type="text" class="form-control" id="password-baru" placeholder="Paswword Baru">
              </div>
              <div class="from-group">
              <button class="btn btn-simpan">Simpan</button>
              </div>
            </form>  
          <button class="btn btn-danger trigger">Ganti</button>
        </div>
      </div>
    </section>
  </main>