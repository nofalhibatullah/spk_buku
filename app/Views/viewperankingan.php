<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hasil Perankingan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Proses Perankingan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- Hitung NORMALISASI -->
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Alternatif</th>
                  <th>
                    <center>Nilai Positif [B] <br /></center>
                  </th>
                  <th>
                    <center>Nilai Negatif [C] <br /> </center>
                  </th>
                  <th>Hasil Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($dataMb['all'] as $row):
                  foreach ($dataMb['B1'] as $rowa):
                    foreach ($dataMb['B2'] as $rowb):
                      foreach ($dataMb['B3'] as $rowc):
                        foreach ($dataMb['B4'] as $rowd):
                          foreach ($dataMb['B5'] as $rowe):
                            foreach ($dataMb['B6'] as $rowf):
                              foreach ($dataMb['B7'] as $rowg):
                                $no++;
                                foreach ($dataMb['maxmin'] as $rowx):
                                  // Added this loop for $dataMb['bobot']
                                  ?>
                                  <tr>
                                    <th>
                                      <?= $no; ?>
                                    </th>
                                    <td>
                                      <?= $row->nama_usaha; ?>
                                    </td>
                                    <td>
                                      <?=(round($row->C1 / $rowx->maxminK1, 6) * $rowa->nilai_bobot +
                                        round($row->C4 / $rowx->maxminK4, 6) * $rowd->nilai_bobot +
                                        round($row->C5 / $rowx->maxminK5, 6) * $rowe->nilai_bobot +
                                        round($row->C6 / $rowx->maxminK6, 6) * $rowf->nilai_bobot +
                                        round($row->C7 / $rowx->maxminK7, 6) * $rowg->nilai_bobot); ?>
                                    </td>
                                    <td>
                                      <?= (round($row->C2 / $rowx->maxminK2, 6) * $rowb->nilai_bobot +
                                        round($row->C3 / $rowx->maxminK3, 6) * $rowc->nilai_bobot); ?>
                                    </td>
                                    <td>
                                      <?=(round($row->C1 / $rowx->maxminK1, 6) * $rowa->nilai_bobot +
                                        round($row->C4 / $rowx->maxminK4, 6) * $rowd->nilai_bobot +
                                        round($row->C5 / $rowx->maxminK5, 6) * $rowe->nilai_bobot +
                                        round($row->C6 / $rowx->maxminK6, 6) * $rowf->nilai_bobot +
                                        round($row->C7 / $rowx->maxminK7, 6) * $rowg->nilai_bobot)- (round($row->C2 / $rowx->maxminK2, 6) * $rowb->nilai_bobot +
                                        round($row->C3 / $rowx->maxminK3, 6) * $rowc->nilai_bobot); ?>
                                    </td>


                                  </tr>
                                  <?php
                                endforeach; // Added to close the loop for $dataMb['bobot']
                              endforeach;
                            endforeach;
                          endforeach;
                        endforeach;
                      endforeach;
                    endforeach;
                  endforeach;
                endforeach;
                ?>
              </tbody>

            </table>
          </div>

          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

</section>
<!-- /.content -->
</div>