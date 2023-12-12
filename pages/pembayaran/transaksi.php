<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      PEMBAYARAN SPP
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">PEMBAYARAN SPP</li>
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
          <form role="form" method="post" action="pages/pembayaran/proses_bayar.php">
            <div class="box-body">
              <div class="form-group">
                <label for="petugas">petugas</label>
                <select class="form-control" id="petugas" name="petugas">
                  <!-- <option value="">- Pilih -</option>-->
                  <?php
                  // include "conf/conn.php";
                  // $query = mysqli_query($koneksi, "SELECT * FROM admin") or die(mysqli_error($koneksi));
                  // while ($row = mysqli_fetch_array($query)) {
                  //   echo '<option value="' . $row['admin_id'] . '">' . $row['username'] . '</option>';
                  // }
                  ?>
                  <option value="<?php $_SESSION['id_petugas'] ?>" selected readonly><?php echo $_SESSION['id_petugas'] ?></option>
                </select>
              </div>
              <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nisn" id="id" class="form-control 
                 pencarian" placeholder="NISN Siswa" readonly>
              </div>
              <div class="form-group">
                <label>Tanggal Bayar</label>
                <input type="date" name="tgl_bayar" class="form-control" placeholder="Tanggal Bayar" required>
              </div>
              <div class="form-group">
                <label>Bulan Bayar</label>
                <select class="form-control" name="bulan_dibayar">
                  <option selected>--pilih bulan--</option>
                  <option value="januari">Januari</option>
                  <option value="februari">Februari</option>
                  <option value="maret">Maret</option>
                  <option value="april">April</option>
                  <option value="mei">Mei</option>
                  <option value="juni">Juni</option>
                  <option value="juli">Juli</option>
                  <option value="agustus">Agustus</option>
                  <option value="september">September</option>
                  <option value="oktober">oktober</option>
                  <option value="november">november</option>
                  <option value="desember">desember</option>
                </select>
              </div>

              <div class="form-group">
                <label>Tahun Bayar</label>
                <select class="form-control" name="tahun_dibayar">
                  <option selected>--pilih tahun--</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                </select>
              </div>

              <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Siswa" readonly>
              </div>
              <div class="form-group">
                <label>ID SPP</label>
                <input type="number" id="harga" name="id_spp" class="form-control" placeholder="Id SPP" readonly>
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <input type="text" id="nama_kelas" name="nama_kelas" class="form-control" placeholder="Kelas" readonly>
              </div>
              <div class="form-group">
                <label>Nominal</label>
                <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Nominal" readonly>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" title="Simpan 
            Data"> <i class="glyphicon glyphicon-floppy-disk"></i> BAYAR</button>
            </div>
          </form>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">DATA SISWA</h4>
              </div>
              <div class="modal-body">
                <table id="produk" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>NISN</th>
                      <th>NAMA SISWA</th>
                      <th>ID SPP</th>
                      <th>KELAS</th>
                      <th>NOMINAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "conf/conn.php";
                    $no = 0;
                    $query = mysqli_query(
                      $koneksi,
                      "SELECT siswa.nisn,siswa.nama,siswa.id_spp,kelas.nama_kelas,spp.nominal 
                       FROM siswa INNER JOIN kelas on siswa.id_kelas=kelas.id_kelas 
                       INNER JOIN spp on siswa.id_spp=spp.id_spp;"
                    );
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                      <tr class="pilih" data-id="<?php echo $row['nisn']; ?>" data-barang="<?php echo $row['nama']; ?>" data-harga="<?php echo $row['id_spp']; ?>" data-kelas="<?php echo $row['nama_kelas']; ?>" data-nominal="<?php echo $row['nominal']; ?>">
                        <td><?php echo $row['nisn']; //echo $no=$no+1;
                         ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['id_spp']; ?></td>
                        <td><?php echo $row['nama_kelas']; ?></td>
                        <td><?php echo $row['nominal']; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
  <!-- /.content-wrapper -->
  <script type="text/javascript">
    $(document).ready(function() {
      $(".pencarian").focusin(function() {
        $("#myModal").modal('show'); // ini fungsi untuk menampilkan modal
      });
      $('#produk').DataTable();
    });
    $(document).on('click', '.pilih', function(e) {
      document.getElementById("id").value = $(this).attr('data-id');
      document.getElementById("nama").value = $(this).attr('data-barang');
      document.getElementById("harga").value = $(this).attr('data-harga');
      document.getElementById("nama_kelas").value = $(this).attr('data-kelas');
      document.getElementById("nominal").value = $(this).attr('data-nominal');
      $('#myModal').modal('hide');
    });
  </script>