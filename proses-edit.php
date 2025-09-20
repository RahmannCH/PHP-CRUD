<?php

include("config.php");

if(isset($_POST['Simpan'])){

    $id = $_POST['Id'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jk = $_POST['Jenis_Kelamin'];
    $agama = $_POST['Agama'];
    $sekolah = $_POST['Sekolah_Asal'];

    $sql = "UPDATE calon_siswa SET Nama='$nama', Alamat='$alamat',Jenis_Kelamin='$jk', Agama='$agama', Sekolah_Asal='$sekolah' WHERE Id=$id";
    $query = mysqli_query($ch, $sql);

    if( $query ) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>