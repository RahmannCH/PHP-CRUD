<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran_siswa";

$ch = mysqli_connect($server, $user, $password, $nama_database);

if( !$ch ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

function hapus($id) {
    global $ch;
    mysqli_query($ch, "DELETE FROM calon_siswa WHERE Id=$id");
    return mysqli_affected_rows($ch);
}
?>

