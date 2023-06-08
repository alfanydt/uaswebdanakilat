<?php
session_start();
include 'koneksi.php';

function login() 
{
   if (isset($_POST['login'])) 
   {
       global $koneksi;
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $ambil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        if (mysqli_num_rows($ambil) === 1) {
            $data = mysqli_fetch_assoc($ambil);

            if (password_verify($password, $data['password'])) {
                $_SESSION['username'] = $data['username'];
                header("location: home.php");
                exit();

            } else {
                echo "<script>
                alert('Username atau Password salah!')
                window.location = 'index.php';
                </script>";
            }

            } else {
                echo "<script>
                alert('Username atau Password salah!')
                window.location = 'index.php';
                </script>";
            }
    }
}

login();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet">
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #fafafa;
    font-family: Arial, sans-serif;
    }

    .login-container {
        background-color: #fff;
        border: 1px solid #dbdbdb;
        padding: 20px;
        max-width: 350px;
        width: 100%;
    }

    .login-form {
        text-align: center;
        margin-bottom: 20px;
    }

    .logo {
        width: 120px;
        margin-bottom: 10px;
    }

    h2 {
        font-size: 22px;
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #dbdbdb;
        border-radius: 3px;
        font-size: 14px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #0095f6;
        color: #fff;
        border: none;
        border-radius: 3px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
    }

    .signup-link {
        font-size: 12px;
        margin-top: 20px;
    }

    .signup-link a {
        color: #0095f6;
        text-decoration: none;
    }
    .login-container {
    position: relative;
    }
    .login-container::before {
        content: "";
        background-image: url('gambar/blue.jpg');
        background-size: cover;
        opacity: 1; 
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: -1;
    }

    </style>
</head>
<body>
    
    <div class="login-container">
        <div class="login-form">
            <img src="gambar/favicon2.png" alt="DK Logo" class="logo">
            <h2>Log In</h2>
            <form action="" method="POST">
                <input type="text" name="user" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <input  type="submit" name="login" value="login" style="background-color: #0095f6; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;">
            </form>
            <div class="signup-link">
                Don't have an account? <a href="registrasi.php">Sign up</a><br>
            </div>
            <div class="signup-link">
        </div>
        </div>
    </div>
</body>
</html>
