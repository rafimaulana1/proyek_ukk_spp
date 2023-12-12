<?php
ob_start();
include "../../conf/conn.php";
require_once("../../plugins/dompdf/autoload.inc.php");

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$id = $_GET['id'];
$query = mysqli_query($koneksi,"select * from pembayaran where id_pembayaran ='$id'");

$html = '<center><h3>Laporan Pembayaran SPP</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
  <tr>
  <th>No</th>
  <th>Id Petugas</th>
  <th>Nisn</th>
  <th>Tgl Bayar</th>
  <th>Bulan Bayar</th>
  <th>Tahun Bayar</th>r
  <th>Nama</th>
  <th>ID SPP</th>
  <th>Nama Kelas</th>
  <th>Nominal</th>
  </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
  $html .= "<tr>
  <td>" . $no . "</td>
  <td>" . $row['id_petugas'] . "</td>
  <td>" . $row['nisn'] . "</td>
  <td>" . $row['tgl_bayar'] . "</td>
  <td>" . $row['bulan_dibayar'] . "</td>
  <td>" . $row['tahun_dibayar'] . "</td>
  <td>" . $row['nama'] . "</td>
  <td>" . $row['id_spp'] . "</td>
  <td>" . $row['nama_kelas'] . "</td>
  <td>" . $row['nominal'] . "</td>
  </tr>";
  $no++;
}

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_Pembayaran_sekolah.pdf');

?>



