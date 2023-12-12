<?php
session_start();
include "../../conf/conn.php";
	// membuat variabel untuk menampung data dari form
    $id_petugas    = $_SESSION['id_petugas'];
    $nisn          = $_POST['nisn'];
    $tgl_bayar     = $_POST['tgl_bayar'];
    $bulan_dibayar = $_POST['bulan_dibayar'];
    $tahun_dibayar = $_POST['tahun_dibayar'];
    $nama          = $_POST['nama'];
    $id_spp        = $_POST['id_spp'];
    $nama_kelas        = $_POST['nama_kelas'];
    $nominal        = $_POST['nominal'];
    

                $query = "INSERT INTO pembayaran VALUES ('','$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar
                ', '$nama', '$id_spp','$nama_kelas','$nominal')";
 //echo"$query";
                
                $result = mysqli_query($koneksi, $query);
                // periska query apakah ada error
                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                         " - ".mysqli_error($koneksi));
                } else {
                  //tampil alert dan akan redirect ke halaman index.php
                  //silahkan ganti index.php sesuai halaman yang akan dituju
                  echo '<script>alert("Data Berhasil Ditambahkan !!!");
                  window.location.href="../../index.php?page=data_pembayaran"</script>';
                 }

          ?>