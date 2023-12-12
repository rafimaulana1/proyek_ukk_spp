<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH SISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH SISWA</li>
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
            <form role="form" method="post" action="pages/siswa/tambah_siswa_proses.php">
              <div class="box-body">
                </div>
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" class="form-control" placeholder="Nisn" required>
                </div>
                </div>
                <div class="form-group">
                  <label>NIS</label>
                  <input type="text" name="nis" class="form-control" placeholder="Nis" required>
                </div>
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label>KELAS</label>
                  <select class="form-control" name="id_kelas">
                     <?php
                      $query = mysqli_query($koneksi,"SELECT * FROM kelas");
                      while ($row=mysqli_fetch_array($query))
                      {   
                      ?>
                     <option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['nama_kelas']; ?> </option>
                    <?php 
                    }
                   ?>
                    </select>
                  </div>
                <div class="form-group">
                  <label>ALAMAT</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                  <label>NO TELPON</label>
                  <input type="text" name="no_telp" class="form-control" placeholder="No Telpon" required>
                </div>
                <div class="form-group">
                  <label>SPP</label>
                  <select class="form-control" name="id_spp">
                     <?php
                      $query = mysqli_query($koneksi,"SELECT * FROM spp");
                      while ($row=mysqli_fetch_array($query))
                      {   
                      ?>
                     <option value="<?php echo $row['id_spp']; ?>"> <?php echo $row['nominal']; ?> </option>
                    <?php 
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