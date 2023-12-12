<?php
$query = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp ='".$_GET['id_spp']."'")
or die(mysqli_error($koneksi));
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH WAKTU SPP
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH WAKTU SPP</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/spp/ubah_spp_proses.php">
            <div class="box-body">
            <input type="hidden" name="id_spp" value="<?php echo $row['id_spp']; ?>">
            </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="<?php echo $row['tahun']; ?>" required>
                </div>
                </div>
                <div class="form-group">
                  <label>Nominal</label>
                  <input type="number" name="nominal" class="form-control" placeholder="Nominal" value="<?php echo $row['nominal']; ?>" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->