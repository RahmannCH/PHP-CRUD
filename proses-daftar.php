<?php

include("config.php");

if(isset($_POST['Daftar'])){

    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jk = $_POST['Jenis_Kelamin'];
    $agama = $_POST['Agama'];
    $sekolah = $_POST['Sekolah_Asal'];

    $sql = "INSERT INTO calon_siswa (Nama, Alamat, Jenis_Kelamin, Agama, Sekolah_Asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($ch, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>