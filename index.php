<?php 
    session_start(); 
    if (isset($_POST["logout"])) {
        session_unset();
        session_destroy();
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMKN 1 Banjarmasin</title>
    <link rel="stylesheet" href="styledb.css">
</head>
<body>
    <?php include "Layout/header.html"; ?>
    
    <main>
        <p>Halo <?= htmlspecialchars($_SESSION["email"]) ?>, Selamat Datang di Website Saya!</p>    
    </main>
    
    <?php if (isset($_GET['status'])): ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "<script>alert('Pendaftaran Berhasil!'); document.location.href='index.php';</script>";  
            } else {
                echo "<script>alert('Pendaftaran Gagal!'); document.location.href='index.php';</script>";  
            }
            ?>
        </p>
    <?php endif; ?>
    
    <?php include "Layout/footer.html"; ?>
</body>
</html>
