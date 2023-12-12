<?php
$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn ='".$_GET['nisn']."'")
or die(mysqli_error($koneksi));
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH SISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH SISWA</li>
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
            <form role="form" method="post" action="pages/siswa/ubah_siswa_proses.php">
            <div class="box-body">
            <input type="hidden" name="nisn" value="<?php echo $row['nisn']; ?>">
            </div>
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" class="form-control" placeholder="Nisn" value="<?php echo $row['nisn']; ?>" required>
                </div>
                </div>
                <div class="form-group">
                  <label>NIS</label>
                  <input type="text" name="nis" class="form-control" placeholder="Nis" value="<?php echo $row['nis']; ?>" required>
                </div>
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                 <label>KELAS</label>
                 <select name="id_kelas" class="form-control" required>
                <?php
                 $distributorQuery = mysqli_query($koneksi, "SELECT * FROM kelas");
                 while ($distributor = mysqli_fetch_array($distributorQuery)) {
                  $selected = ($distributor['id_kelas'] == $row['id_kelas']) ? 'selected' : '';
                  echo "<option value='{$distributor['id_kelas']}' {$selected}>{$distributor['nama_kelas']}</option>";
                  }
                  ?>
                  </select>
                  </div>   
                <div class="form-group">
                  <label>ALAMAT</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $row['alamat']; ?>" required>
                </div>
                <div class="form-group">
                  <label>NO TELPON</label>
                  <input type="text" name="no_telp" class="form-control" placeholder="No Telpon" value="<?php echo $row['no_telp']; ?>" required>
                </div>
                <div class="form-group">
                 <label>SPP</label>
                 <select name="id_spp" class="form-control" required>
                <?php
                 $distributorQuery = mysqli_query($koneksi, "SELECT * FROM spp");
                 while ($distributor = mysqli_fetch_array($distributorQuery)) {
                  $selected = ($distributor['id_spp'] == $row['id_spp']) ? 'selected' : '';
                  echo "<option value='{$distributor['id_spp']}' {$selected}>{$distributor['nominal']}</option>";
                  }
                  ?>
                  </select>
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