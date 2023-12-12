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
          <a href="index.php?page=tambah_siswa" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
          <!-- <a href="pages/report.php" class="btn btn-success" role="button" title="Print Data"><i class="glyphicon glyphicon-print"></i> PRINT</a> -->
          </div>
            <div class="box-body table-responsive">
              <table nisn="siswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>NAMA</th>
                  <th>KELAS</th>
                  <th>ALAMAT</th>
                  <th>NO TELPON</th>
                  <th>SPP</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                 
                <?php
include "conf/conn.php";
$no = 0;
$query = mysqli_query($koneksi, 
    "SELECT   siswa.*,kelas.*,spp.nominal
    FROM siswa 
    INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas
    INNER JOIN spp ON siswa.id_spp = spp.id_spp
    ORDER BY kelas.id_kelas DESC")
    or die(mysqli_error($koneksi));
while ($row = mysqli_fetch_array($query)) {
    // Lakukan sesuatu dengan data yang diambil dari hasil inner join

?>


                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['nisn'];?></td>
                  <td><?php echo $row['nis'];?></td>
                  <td><?php echo $row['nama'];?></td>
                  <td><?php echo $row['nama_kelas'];?></td>
                  <td><?php echo $row['alamat'];?></td>
                  <td><?php echo $row['no_telp'];?></td>
                  <td><?php echo $row['nominal'];?></td>
                  <td>
                    <a href="index.php?page=ubah_siswa&nisn=<?=$row['nisn'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-danger" role="button" title="Hapus Data" onclick="hapussiswa(<?=$row['nisn'];?>);"><i class="glyphicon glyphicon-trash"></i></a>
                    <!--<a href="pages/cetak.php?nisn=<?=$row['nisn'];?>" class="btn btn-warning" role="button" title="Cetak Data"><i class="glyphicon glyphicon-print"></i></a> -->
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
    $('#siswa').DataTable();
  });

  function hapussiswa(nisn) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      window.location.href = "pages/siswa/hapus_siswa.php?nisn=" + nisn;
    }
  }
</script>
