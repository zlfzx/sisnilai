<header>
  <nav class="navbar navbar-expand-sm">
    <div class="title d-flex">
    <a class="navbar-brand" href="<?=base_url();?>">
      <span class="nase"><?=$this->session->nama;?></span>
    </a>
    </div>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link keluar" href="<?= site_url('logout');?>">Sign Out<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<main class="pertama">  
  <section class="imbuh"></section>
  <section class="container welcome">
    <div class="row ">
    <div class="col-md-5 ">
      <div class="d-flex justify-content-center img-fluid mt-5 mb-3"><img src="<?=base_url('assets/img/logo.png');?>" alt="" width="40%" height="40%"></div>
      <h1 class="title-ucapan">sistem informasi nilai <br>smk negeri 1 kedungwuni</h1>
    </div>
    <div class="col-md-6 offset-md-1 d-flex align-items-center justify-content-center">
      <img src="<?=base_url('assets/img/buku.png');?>" alt="" class="img-fluid">
    </div>
    </div>
  </section>
  
  <!-- modal -->
  <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
              <h1 class="title-modal">nilai per Semester</h1>
                <canvas id="myChart" size="100%"></canvas>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->

  <!-- MENU -->
<section class="container menu">
  <div class="row">
    <div class="col-md-4"><a href="halamandua.html"><div class="tombol efek">lihat nilai</div></a></div>
    <div class="col-md-4"><div class="tombol" data-toggle="modal" data-target="#demoModal">rata-rata nilai</div></div>
    <div class="col-md-4"><a href="setting"><div class="tombol efek">Setting</div></a></div>
  </div>
</section>
</main>