<?php
    include "koneksi.php";
    $id_faskes = $_GET['id_faskes'];
    $sql = "SELECT * FROM `rumah_sakit` WHERE id_faskes =$id_faskes LIMIT 1";
    $result = mysqli_query($kon, $sql);
    $row = mysqli_fetch_assoc($result);
    header('location: DaftarRS.php')
?>