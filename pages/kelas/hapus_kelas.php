<?php
include "../../conf/conn.php";
$id_kelas = $_GET['id_kelas'];
$query = ("DELETE FROM kelas WHERE id_kelas ='$id_kelas'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_kelas"</script>';
}
?>