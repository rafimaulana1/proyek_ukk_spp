<?php
session_start();
include '../conf/conn.php';
$sess_petugas = $_SESSION['id_petugas'];
if (isset($sess_petugas))
{
session_destroy();
echo '<script>alert("Anda Telah Logout !!!");
window.location.href="login.php"</script>';
}
?>