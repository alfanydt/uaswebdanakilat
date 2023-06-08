<?php

include 'koneksi.php';

function register() {
    include 'koneksi.php';

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        $cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        $cek_login = mysqli_num_rows($cek_user);

        if ($cek_login > 0) {
            echo "<script>
            alert('Username telah terdaftar');
            window.location = 'registrasi.php';
            </script>";
        } else {
            if ($password1 != $password2) {
                echo "<script>
            alert('Konfirmasi password tidak sesuai');
            window.location = 'registrasi.php';
            </script>";
            } else {
                $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
                mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama','$username','$hashed_password')");
                echo "<script>
            alert('Data berhasil dikirim');
            window.location = 'index.php';
            </script>";
            }
        }
    }
}

// Call the function
register();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
<style>
	body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #fafafa;
    font-family: Arial, sans-serif;
}

.signup-container {
    background-color: #fff;
    border: 1px solid #dbdbdb;
    padding: 20px;
    max-width: 350px;
    width: 100%;
}

.signup-form {
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

.login-link {
    font-size: 10px;
    margin-top: 20px;
	text-align: center;
}

.login-link span {
    margin-right: 5px;
}

.login-link a {
    color: #0095f6;
    text-decoration: none;
}
</style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <img src="gambar/favicon2.png" alt="DK Logo" class="logo">
            <h2>Buat akun</h2>
            <form action="" method="POST">
                <input type="text" name="nama" placeholder="Full Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="password1" placeholder="Password" required>
                <input type="password" name="password2" placeholder="Konfirmasi Password" required>
                <input type="submit" value="Sign Up" name="submit" style="background-color: #0095f6; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;">
            </form>
        </div>
        <div class="login-link">
            <span>Sudah punya akun?</span>
            <a href="index.php">Login</a>
        </div>
    </div>
</body>
</html>
