<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA SISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA SISWA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=transaksi" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
          <a href="pages/pembayaran/report.php" class="btn btn-success" role="button" title="Print Data"><i class="glyphicon glyphicon-print"></i> PRINT</a>
          </div>
          </div>
            <div class="box-body table-responsive">
              <table id="siswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID PETUGAS</th>
                  <th>NISN</th>
                  <th>TGL BAYAR</th>
                  <th>BULAN BAYAR</th>
                  <th>TAHUN BAYAR</th>
                  <th>NAMA</th>
                  <th>ID SPP</th>
                  <th>Kelas</th>
                  <th>Nominal</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $no=0;
                $query=mysqli_query($koneksi,"SELECT DISTINCT(pembayaran.id_pembayaran), pembayaran.id_petugas, pembayaran.nisn, pembayaran.tgl_bayar, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, pembayaran.nama, pembayaran.id_spp, kelas.nama_kelas, spp.nominal 
                FROM pembayaran 
                INNER join siswa on pembayaran.id_spp = siswa.id_spp 
                INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas 
                INNER JOIN spp ON siswa.id_spp = spp.id_spp;")
                or die(mysqli_error($koneksi));
                while ($row=mysqli_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>                  
                  <td><?php echo $row['id_petugas'];?></td>
                  <td><?php echo $row['nisn'];?></td>
                  <td><?php echo $row['tgl_bayar'];?></td>
                  <td><?php echo $row['bulan_dibayar'];?></td>
                  <td><?php echo $row['tahun_dibayar'];?></td>
                  <td><?php echo $row['nama'];?></td>
                  <td><?php echo $row['id_spp'];?></td>
                  <td><?php echo $row['nama_kelas'];?></td>
                  <td><?php echo $row['nominal'];?></td>
                  <td>
                    <a href="javascript:void(0);" class="btn btn-danger" role="button" title="Hapus Data" onclick="hapusPembayaran(<?=$row['id_pembayaran'];?>);"><i class="glyphicon glyphicon-trash"></i></a>
                    <a href="pages/pembayaran/cetak.php?id=<?=$row['id_pembayaran'];?>" class="btn btn-warning" role="button" title="Cetak Data"><i class="glyphicon glyphicon-print"></i></a>
                  </td>
                </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#Pembayaran').DataTable();
  });

  function hapusPembayaran(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      window.location.href = "pages/pembayaran/hapus_pembayaran.php?id_pembayaran=" + id;
    }
  }
</script>

