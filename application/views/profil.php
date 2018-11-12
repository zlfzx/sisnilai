<div class="container pt-sm-4 pb-sm-4">
  <div class="row">

    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-warning text-white"><b class="card-title">Profil Siswa</b></div>
        <div class="card-body">
          <table class="table table-striped">
            <tr>
              <th>Nama</th><th>:</th>
              <td><?= $this->session->nama;?></td>
            </tr>
            <tr>
              <th>Kelas</th><th>:</th>
              <td><?= $this->session->kelas;?></td>
            </tr>
            <tr>
              <th>NIS</th><th>:</th>
              <td><?= $this->session->nis;?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-warning text-white"><b class="card-title">Ganti Password</b></div>
        <div class="card-body">
          <form action="<?= site_url('user/update_password');?>" method="post">
            <div class="form-group">
              <label for="PasswordLama">Password Lama :</label>
              <input type="password" name="passwordlama" id="" class="form-control" placeholder="Masukkan Password Lama...">
            </div>
            <div class="form-group">
              <label for="PasswordBaru">Password Baru :</label>
              <input type="password" name="passwordbaru" id="" class="form-control" placeholder="Masukkan Password Baru...">
            </div>
            <div class="form-group">
              <label for="KonfirmasiBaru">Password Baru (Ulangi) :</label>
              <input type="password" name="confirmpassword" id="" class="form-control" placeholder="Konfirmasi Password...">
            </div>
            <button type="submit" class="btn btn-danger">Ganti</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-danger text-white"><b class="card-title">Pertanyaan / Jawaban</b></div>
        <div class="card-body">
          <div class="form-group">
            <form action="<?= site_url('user/update_pertanyaan');?>" method="post">
              <div class="form-group">
                <label for="Pertanyaan">Pertanyaan :</label>
                <input type="text" name="pertanyaan" value="<?= $pertanyaan['pertanyaan'];?>" class="form-control" placeholder="Masukkan Pertanyaan...">
              </div>
              <div class="form-group">
                <label for="Jawaban">Jawaban :</label>
                <input type="text" name="jawaban" value="<?= $pertanyaan['jawaban'];?>" class="form-control" placeholder="Masukkan Jawaban...">
              </div>
              <button type="submit" class="btn btn-block btn-primary">Atur Pertanyaan</button>
            </form>
        </div>
      </div>
    </div>

  </div>
</div>

<!--
<script type="text/javascript">
$(function(){ $('#password').collapse('toggle') });
$(function(){ $('#pertanyaan').collapse('show') });

</script>
-->
