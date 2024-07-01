<?php
$host="localhost";
$user="root";
$password="";
$db="peli2";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon){
    die("koneksi gagal :".mysqli_connect_error());
} 
// else{
//     echo "koneksi berhasil";
// }
?>