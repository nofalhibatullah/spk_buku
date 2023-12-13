<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SPK Bantuan UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
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
                    <th>Keterangan</th>
                    
                    <th>C1 - | max</th>
                    <th>C2 - | min</th>
                    <th>C3 - | min</th>
                    <th>C4 - | max</th>
                    <th>C5 - | max</th>
                    <th>C6 - | max</th>
                    <th>C7 - | max</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php
                  $no=0;
                  foreach($dataMb as $row):
                    $no++;
                   
                    ?>
                <tr>
                    <th> Nilai Max/Min Kriteria</th>
                   
                    <td><?= $row->maxminK1?></td>
                    <td><?= $row->maxminK2?></td>
                    <td><?= $row->maxminK3?></td>
                 
  
                  </tr>

                  <?php
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