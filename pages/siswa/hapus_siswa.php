<?php
include "../../conf/conn.php";
$nisn = $_GET['nisn'];
$query = ("DELETE FROM siswa WHERE nisn ='$nisn'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_siswa"</script>';
}
?>