<?php
// Action for Daftar RS
    include "koneksi.php";
    if(isset($_POST['Add'])){
        $nama_faskes = $_POST['nama_faskes'];
        $alamat = $_POST['alamat'];
    
        $sql = "INSERT INTO `rumah_sakit`(`id_faskes`, `nama_faskes`, `alamat`) VALUES (NULL,'$nama_faskes','$alamat')";
        $result = mysqli_query($kon, $sql);
        if($result){
            header("Location:DaftarRS.php?msg= Data telah ditambahkan");
        }
        else{
            echo "Data gagal ditambahkan".mysqli_error($kon);
        }
    }



    if (isset($_POST['Update'])){
        $id_faskes = $_POST['id_faskes'];
        $nama_faskes = $_POST['nama_faskes'];
        $alamat = $_POST['alamat'];
        $sql = "UPDATE `rumah_sakit` SET `nama_faskes`='$nama_faskes',`alamat`='$alamat' WHERE `rumah_sakit`.`id_faskes` = $id_faskes";
        $ubah = mysqli_query($kon, $sql );

        if($ubah){
            header("Location:DaftarRS.php?msg= Data telah Diubah");
        }
        else{
            echo "Data gagal Diubah".mysqli_error($kon);
        }
    }
        

    if (isset($_POST['hapus'])){
        $id_faskes = $_POST['id_faskes'];
        $sql = "DELETE FROM `rumah_sakit` WHERE `rumah_sakit`.`id_faskes` = $id_faskes";
        $ubah = mysqli_query($kon, $sql );

        if($ubah){
            header("Location:DaftarRS.php?msg= Data telah Dihapus");
        }
        else{
            echo "Data gagal Dihapus".mysqli_error($kon);
        }
    }



// Action for Daftar Pengguna

if(isset($_POST['Add_pengguna'])){
    $NIK = $_POST['NIK'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $email_pengguna = $_POST['email_pengguna'];
    $HP_pengguna = $_POST['HP_pengguna'];

    $sql_pengguna = "INSERT INTO `pengguna`(`NIK`, `Nama`, `Email`, `HP`) VALUES ('$NIK','$nama_pengguna','$email_pengguna', '$HP_pengguna')";
    $result_pengguna = mysqli_query($kon, $sql_pengguna);
    if($result_pengguna){
        header("Location:DaftarUser.php?msg= Data telah ditambahkan");
    }
    else{
        echo "Data gagal ditambahkan".mysqli_error($kon);
    }
}



if (isset($_POST['Update_pengguna'])){
    $NIK = $_POST['NIK'];
    $email_pengguna = $_POST['email_pengguna'];
    $hp_pengguna = $_POST['hp_pengguna'];
    $sql_pengguna = "UPDATE `pengguna` SET `Email`='$email_pengguna',`HP`='$hp_pengguna' WHERE `pengguna`. `NIK`= $NIK";
    $ubah_pengguna = mysqli_query($kon, $sql_pengguna);

    if($ubah_pengguna){
        header("Location:DaftarUser.php?msg= Data telah Diubah");
    }
    else{
        echo "Data gagal Diubah".mysqli_error($kon);
    }
}
    

if (isset($_POST['hapus_pengguna'])){
    $NIK = $_POST['NIK'];
    $sql_pengguna = "DELETE FROM `pengguna` WHERE `pengguna`. `NIK`= $NIK";
    $ubah_pengguna = mysqli_query($kon, $sql_pengguna );

    if($ubah_pengguna){
        header("Location:DaftarUser.php?msg= Data telah Dihapus");
    }
    else{
        echo "Data gagal Dihapus".mysqli_error($kon);
    }
}


// Action for Data Vaksin

if(isset($_POST['Add_vaksin'])){
    $nama_vaksin = $_POST['Nama_Vaksin'];
    $dosis = $_POST['dosis'];

    $sql_vaksin = "INSERT INTO `vaksin`(`kode_vaksin`, `Nama_vaksin`, `dosis`) VALUES (NULL,'$nama_vaksin','$dosis')";
    $result_vaksin = mysqli_query($kon, $sql_vaksin);
    if($result_vaksin){
        header("Location:DaftarVaksin.php?msg= Data telah ditambahkan");
    }
    else{
        echo "Data gagal ditambahkan".mysqli_error($kon);
    }
}



if (isset($_POST['Update_vaksin'])){
    $kode_vaksin = $_POST['kode_vaksin'];
    $nama_vaksin = $_POST['Nama_vaksin'];
    $dosis = $_POST['dosis'];
    $sql_vaksin = "UPDATE `vaksin` SET `Nama_vaksin`='$nama_vaksin',`dosis`='$dosis' WHERE `vaksin` . `kode_vaksin` = $kode_vaksin ";
    $result_vaksin = mysqli_query($kon, $sql_vaksin);

    if($result_vaksin){
        header("Location:DaftarVaksin.php?msg= Data telah Diubah");
    }
    else{
        echo "Data gagal Diubah".mysqli_error($kon);
    }
}
    

if (isset($_POST['hapus_vaksin'])){
    $kode_vaksin = $_POST['kode_vaksin'];
    $sql_vaksin = "DELETE FROM `vaksin` WHERE `vaksin`. `kode_vaksin` = $kode_vaksin ";
    $result_vaksin = mysqli_query($kon, $sql_vaksin );

    if($result_vaksin){
        header("Location:DaftarVaksin.php?msg= Data telah Dihapus");
    }
    else{
        echo "Data gagal Dihapus".mysqli_error($kon);
    }

    
}


// Action for Catatan Kesehatan

if(isset($_POST['Add_catatan'])){
    $kode_vaksin = $_POST['kode_vaksin'];
    $NIK = $_POST['NIK'];
    $tanggal = $_POST['tanggal'];
    $dosis = $_POST['dosis'];
    $id_faskes = $_POST['id_faskes'];

    $sql_vaksin = "INSERT INTO `catatankesehatan`(`id_catatan`, `kode_vaksin`, `NIK`, `tanggal`, `dosis`, `id_faskes`) VALUES (NULL,'$kode_vaksin','$NIK','$tanggal','$dosis','$id_faskes')";
    $result_vaksin = mysqli_query($kon, $sql_vaksin);
    if($result_vaksin){
        header("Location:index.php?msg= Data telah ditambahkan");
    }
    else{
        echo "Data gagal ditambahkan".mysqli_error($kon);
    }
}

    

if (isset($_POST['hapus_catatan'])){
    $id_catatan = $_POST['id_catatan'];
    $sql_catatan = "DELETE FROM `catatankesehatan` WHERE catatankesehatan.id_catatan = $id_catatan";
    $result_catatan = mysqli_query($kon, $sql_catatan);

    if($result_catatan){
        header("Location:index.php?msg= Data telah Dihapus");
    }
    else{
        echo "Data gagal Dihapus".mysqli_error($kon);
    }

    
}
?>

















    