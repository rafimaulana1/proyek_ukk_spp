<?php
include "../../conf/conn.php";
if($_POST)
{
$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
$query = ("UPDATE spp SET tahun='$tahun',nominal='$nominal' WHERE id_spp ='$id_spp'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_spp"</script>';
}
}
?>