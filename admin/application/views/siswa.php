<div class="content-wrapper">
  <section class="content-header">
    <h1 class="text-center">Siswa | <span class="small">Data Siswa</span></h1>
  </section>
  <section class="content">
    <div class="box box-warning">
      <div class="box-header">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahSiswa"><i class="fa fa-user-plus"></i> Tambah</button>

        <!-- Modal Tambah Siswa -->
        <div class="modal fade" id="tambahSiswa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-user"></i> Tambah Data Siswa</h4>
              </div>
              <div class="modal-body">
                <form action="admin/tambah_siswa" method="post" role="form">
                  <div class="box-body">
                    <div class="form-group">
                        <label for="NamaSiswa">Nama Siswa :</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa...">
                    </div>
                    <div class="form-group">
                        <label for="NamaSiswa">NIS :</label>
                        <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS Siswa...">
                    </div>
                    <div class="form-group">
                      <label for="NamaSiswa">Kelas :</label>
                      <select name="kelas" id="" class="form-control" required>
                        <option value="">Pilih Kelas...</option>
                      </select>
                    </div>
                  </div>
                  <div class="box-footer">
                      <button type="submit" class="btn btn-success">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div> <!-- End Modal -->
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped table-hover" id="tabelSiswa">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>NIS</th>
              <th>Kelas</th>
              <th>Secret</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>zulfi</td>
              <td>1610834</td>
              <td>12 tkj 2</td>
              <td> <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#lihatPassword"><i class="fa fa-eye"></i> Lihat</button> </td>
              <td>
                <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editSiswa"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusSiswa"><i class="fa fa-trash"></i> Hapus</button>
              </td>
            </tr>
            <!-- Modal Lihat Password Siswa -->
            <div class="modal fade" id="lihatPassword">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-user"></i> Nama Siswa</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="password">Password :</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="Pertanyaan">Pertanyaan :</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="Jawaban">Jawaban :</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Modal -->
            <!-- Modal Edit Siswa -->
            <div class="modal fade" id="editSiswa">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                      <button class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><i class="fa fa-user"></i> Edit Data Siswa</h4>
                  </div>
                  <div class="modal-body">
                    <form action="http://localhost/admin/admin/edit_siswa/1" method="post">
                      <div class="box-body">
                        <div class="form-group">
                            <label for="Nama">Nama :</label>
                            <input type="text" name="nama" value="Muhammad Zulfi Izzulhaq" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Nama">NIS :</label>
                            <input type="text" name="nis" value="1610853" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Kelas :</label>
                            <select name="kelas" id="" class="form-control">
                                <option value="1" selected>12 TKJ 2</option>
                                <option value="4">10 TKJ 1</option>
                                <option value="2">10 TLAS 1</option>
                                <option value="6">11 TKJ 1</option>
                                <option value="3">11 TKJ 2</option>
                                <option value="5">12 TKJ 1</option>
                                <option value="1">12 TKJ 2</option>
                                <option value="7">12 TLAS 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="text" name="password" value="1610853" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan :</label>
                            <input type="text" name="pertanyaan" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Jawaban">Jawaban :</label>
                            <input type="text" name="jawaban" value="" class="form-control">
                        </div>
                      </div>
                      <div class="box-footer">
                          <button type="submit" class="btn btn-success">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> <!-- End Modal -->
            <!-- Modal Hapus Siswa -->
            <div class="modal fade" id="hapusSiswa">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><i class="fa fa-trash"></i> Hapus Data Siswa</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box-body">
                                <h4>Anda yakin untuk menghapus siswa <b>Muhammad Zulfi Izzulhaq</b> ?</h4>
                                <p class="text-danger">*Menghapus data siswa terpilih akan menghapus semua data yang terkait seperti nilai dan yang lainnya...</p>
                            </div>
                            <div class="box-footer">
                                <a href="http://localhost/admin/admin/hapus_siswa/1" class="btn btn-danger">Ya</a> &nbsp;
                                <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Modal -->
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<script>
  $(function(){
    $('#tabelSiswa').DataTable({
      'paging' : true,
      'lengthChange' : true,
      'searching' : true,
      'ordering' : true,
      'info' : true,
      'autoWidth' : true
    });
  })
</script>
