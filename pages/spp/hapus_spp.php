<?php
include "../../conf/conn.php";
$id_spp = $_GET['id_spp'];
$query = ("DELETE FROM spp WHERE id_spp ='$id_spp'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_spp"</script>';
}
?>