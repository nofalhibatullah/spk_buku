<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Matriks Normalisasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan Normalisasi</li>
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
           <p>[Note:  B = Benefit
                    C = Cost]</p>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>No.</th>
                  <th>Alternatif</th>
                  <th>C1 | B</th>
                  <th>C2 | C</th>
                  <th>C3 | C</th>
                  <th>C4 | B</th>
                  <th>C5 | B</th>
                  <th>C6 | B</th>
                  <th>C7 | B</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                  <?php
                  $no=0;
                  foreach($dataMb['all'] as $row):
                    $no++;
                    foreach($dataMb['maxmin'] as $rowx ):
                    ?>
                    <tr>
                    <th> <?= $no; ?></th>
                    <td><?= $row->nama_usaha; ?></td>
                    <td><?=round($row->C1/$rowx->maxminK1,5)?></td>
                    <td><?=round($row->C2/$rowx->maxminK2,5)?></td>
                    <td><?=round($row->C3/$rowx->maxminK3,5)?></td>
                    <td><?=round($row->C4/$rowx->maxminK4,5)?></td>
                    <td><?=round($row->C5/$rowx->maxminK5,5)?></td>
                    <td><?=round($row->C6/$rowx->maxminK6,5)?></td>
                    <td><?=round($row->C7/$rowx->maxminK7,5)?></td>  
                  </tr>

                  <?php
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