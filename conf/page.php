<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_spp':
    include 'pages/spp/data_spp.php';
    break;
  case 'tambah_spp':
    include 'pages/spp/tambah_spp.php';
    break;
  case 'ubah_spp';
    include 'pages/spp/ubah_spp.php';
    break;

  case 'data_kelas':
      include 'pages/kelas/data_kelas.php';
      break;
  case 'tambah_kelas':
      include 'pages/kelas/tambah_kelas.php';
      break;
  case 'ubah_kelas';
      include 'pages/kelas/ubah_kelas.php';
      break;
      
  case 'data_petugas':
      include 'pages/petugas/data_petugas.php';
      break;
  case 'tambah_petugas':
      include 'pages/petugas/tambah_petugas.php';
      break;
  case 'ubah_petugas';
      include 'pages/petugas/ubah_petugas.php';
      break;
      
  case 'data_siswa':
      include 'pages/siswa/data_siswa.php';
      break;
  case 'tambah_siswa':
      include 'pages/siswa/tambah_siswa.php';
      break;
  case 'ubah_siswa';
      include 'pages/siswa/ubah_siswa.php';
      break; 
      
  case 'data_pembayaran';
      include 'pages/pembayaran/data_pembayaran.php';
      break; 
      case 'transaksi':
        include 'pages/pembayaran/transaksi.php';
        break;
      case 'ubah_pembayaran':
        include 'pages/pembayaran/ubah_pembayaran.php';
        break;
  }
}else{
    include "pages/beranda.php";
  }
  ?>