<div class="container pt-sm-4 pb-sm-4">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <table class="table table-sm table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th colspan="5"><h4 style="margin:0" class="text-center">Nilai UTS Semester Genap</h4></th>
        </tr>
        <tr>
          <th>No.</th>
          <th>Mata Pelajaran</th>
          <th>KKM</th>
          <th>Nilai</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $rata2 = 0;
        foreach ($nilai as $n) {
          // code...
         ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $n->mapel;?></td>
          <td><?= $n->kkm;?></td>
          <td><?= $n->nilai;?></td>
          <td><?php if($n->nilai >= $n->kkm){echo "Tuntas";} else{echo "Tidak Tuntas";};?></td>
        </tr>
        <?php
        $rata2 += $n->nilai/$jumlahnilai;
        } ?>
      </tbody>
      <tfoot>
        <th colspan="3">Rata-Rata</th>
        <th><?= $rata2;?></th>
        <th><?php if ($rata2 >= $n->kkm){echo "Tuntas";} else{echo "Tidak Tuntas";}?></th>
      </tfoot>
    </table>
  </div>
</div>
