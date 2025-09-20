<?php 
include("config.php");
session_start();

$register_message = "";

if (isset($_SESSION["is_login"])) {
    header("location: index.php");
    exit;
}

if (isset($_POST["regis"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tanggal = $_POST["tanggal"];
    $jenkel = $_POST["jeniskelamin"];

    $sql = "INSERT INTO datalogin (username, email, password, tanggal, jeniskelamin) VALUES ('$username', '$email', '$password', '$tanggal', '$jenkel')";

    if ($ch->query($sql)) {
        echo "<script>alert('Akun Berhasil Dibuat!'); document.location.href='login.php';</script>";   
    } else {
        echo "<script>alert('Akun Gagal Dibuat!'); document.location.href='login.php';</script>"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="styleregis.css">
</head>
<body>
    <div class="judulregis">
        Create a New Account <br> Its Quick and Easy.
    </div>
    <form action="regis.php" method="POST">
        <label for="username">Masukkan Nama Kamu</label><br>
        <input type="text" name="username" id="username" placeholder="Your Name"><br>
        <label for="email1">Email/Nomor HP</label><br>
        <input name="email" id="email" class="email" type="text" placeholder="Mobile Number or Email Address" style="text-align: left;"><br>
        <label for="password">Password</label><br>
        <input name="password" id="password" class="password" type="password" placeholder="New Password"><br>
        <label for="tanggal">Tanggal Lahir</label><br>
        <input type="date" name="tanggal" id="tanggal"><br>
        <label for="jeniskelamin">Jenis Kelamin</label><br>
        <input type="radio" id="pria" name="jeniskelamin"><label for="pria">Pria</label>
        <input type="radio" id="wanita" name="jeniskelamin"><label for="wanita">Wanita</label><br>
        <button type="submit" id="BikinAkun1" name="regis">Sign Up</button><br>
        <a href="login.php">Already Have an Account?</a>
    </form>
</body>
</html>
