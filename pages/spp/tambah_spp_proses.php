<?php
include "../../conf/conn.php";
if($_POST)
{

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
$query = ("INSERT INTO spp(id_spp,tahun,nominal) VALUES ('','".$tahun."','".$nominal."')");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_spp"</script>';
}
}
?>