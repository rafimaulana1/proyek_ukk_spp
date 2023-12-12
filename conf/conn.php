<?php
//mysql_connect('localhost','root','') or die('Connect Failed !!!');
//mysql_select_db('kampus') or die('Database Not Found !!!');

$server    = "localhost";
$username  = "root";
$password  = "";
$db        = "sekolah";
$koneksi   = mysqli_connect($server,$username,$password,$db);

if(mysqli_connect_errno()){
    echo"koneksi gagal : ".mysqli_connect_error();
}
?>
