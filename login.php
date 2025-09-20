<?php 
    include("config.php");
    session_start();

    $login_massage = "";

    if (isset($_SESSION["is_login"])) {
        header("location: index.php");
    }

    if(isset($_POST['login'])) {
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        
        $sql = "SELECT * FROM datalogin WHERE email = '$email' AND password = '$password'";
        $result = $ch->query($sql);
        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["email"] = $data["email"];
            $_SESSION["is_login"] = true;
            
            header("location: index.php");
            
        }else{
            $login_massage = "<script>
            alert('Email/Password Salah'); document.location.href='login.php';</script>";
        }
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQq7MlhAtt6gK9RgyDznBsaa9CtjAPEaR9Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Login SMKN 1 Banjarmasin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="loginpp">Login Page <br> SMKN 1 Banjarmasin</div>
    <div class="container">
    </div>
    <form action="login.php" method="POST">
        <img  src="//cdn-icons-png.flaticon.com/128/456/456283.png" alt="" class="profile">
        <input type="text" placeholder="Email or Phone Number" class="email" name="email">
        <br>
        <input type="password" placeholder="Password" class="password" name="password" id="password">
        <br>
        <button type="submit" name="login" id="login">Log In</button>
        <br>
        <i class="login-massage"><?= $login_massage ?></i> 
        <a href="" class="forgot">Forgotten Account?</a>
        <br>
        <p class="or">or</p>
        <br>
        <input name="create" type="button" value="Create New Account" id="BikinAkun" class="btn2"/>
        <script src="Create.js"></script>
    </form>
</body>
</html>

