<?php

include("config.php");
$id = $_GET['id'];

if( hapus($id) > 0 ) {
    echo "<script>
    alert('Data Berhasil Dihapus'); document.location.href='list-siswa.php';</script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus'); document.location.href='list-siswa.php';</script>";
}
// if( isset($_GET['id']) >0 ){

//     $id = $_GET['id'];

//     echo "<script>
//             var confirmed = confirm('Apakah Anda yakin ingin menghapus data ini?');
//             if(confirmed) {
//                 ";
//                 $sql = "DELETE FROM calon_siswa WHERE Id=$id";
//                 $query = mysqli_query($db, $sql);
//                 echo "
//             } else {
//                 alert('Penghapusan dibatalkan.');
//                 window.location.href='list-siswa.php';
//             }
//           </script>";

//     if($query){
//     } else {
//         die("Gagal Menghapus...");
//     }
// } else {
//     die("Akses Dilarang...");
// }

?>