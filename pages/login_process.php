<?php
include "../conf/conn.php";

$username = mysqli_real_escape_string($koneksi,htmlentities($_POST['username']));
$password = mysqli_real_escape_string($koneksi,htmlentities($_POST['password']));

$query="SELECT * FROM petugas WHERE username = '$username' AND password = ('$password')";
$check= mysqli_query($koneksi,$query) or die(mysqli_error($koneksi));

if(mysqli_num_rows($check) >= 1){
while($row = mysqli_fetch_array($check)){
session_start();

//$_SESSION['id_admin'] = $row['id_admin'];
$_SESSION['id_petugas'] = $row['id_petugas'];
?>
<script>alert("Selamat Datang <?= $row['username']; ?> Kamu Telah Login Ke Halaman Admin !!!");
window.location.href="../index.php"</script>
<?php
}
}else{
echo '<script>alert("Masukan Username dan Password dengan Benar !!!");
window.location.href="login.php"</script>';
}
?>\
