<?php
include 'functions.php';

?>


<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>
.box {
    background-color: #f5f5f5;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 4px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.box:hover {
    transform: translateY(-5px);
}

.box h3 {
    margin-top: 0;
    color: #333;
    font-size: 20px;
}
.box h3 a {
    text-decoration: none;
    color: inherit;
}

.box p {
    margin-bottom: 0;
    color: #666;
}

.content {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.footer {
    background-color: #f9f9f9;
    padding: 30px 0;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-logo img {
    width: 100px;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links ul li {
    display: inline-block;
    margin-right: 15px;
}

.footer-links ul li a {
    color: #333;
    text-decoration: none;
}

.footer-social ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-social ul li {
    display: inline-block;
    margin-right: 50px;
}

.footer-social ul li a {
    color: #333;
    font-size: 20px;
    text-decoration: none;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    color: #888;
    font-size: 14px;
}
.footer-social ul {
    display: flex;
    justify-content: center;
}

.footer-social ul li:last-child {
    margin-right: 500;
}

</style>
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Dana Kilat.</h1>
            <a href="home.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Data</a>
            <a href="index.php"><i class="fas fa-sign-in-alt"></i>Login</a>
            <a href="registrasi.php"><i class="fas fa-user-plus"></i>Daftar</a>
    	</div>
    </nav>

<div class="content">
	<h2>Selamat Datang di Dana Kilat</h2>
	<p style="font-family: 'Arial', sans-serif; font-size: 20px; color: #333; text-align: center; line-height: 1.5; letter-spacing: 1px;">
  <strong>Rasakan kenyamanan dan kecepatan</strong><br>
  <em>dalam memanfaatkan layanan pinjaman online.</em>
</p>

<div class="box">
        <h3><a href="#"><i class="fas fa-credit-card"></i> KREDIT</a></h3>
        <p>Anda dapat mengatur pembayaran sesuai dengan kemampuan finansial anda.</p>
    </div>
    
    <div class="box">
        <h3><a href="#"><i class="fas fa-money-bill"></i> CASH</a></h3>
        <p>Anda tidak perlu menunggu proses transfer ke rekening bank atau mengeluarkan kredit.</p>
    </div>
    
    <div class="box">
        <h3><a href="#"><i class="fas fa-hand-holding-usd"></i> CICILAN</a></h3>
        <p>Anda bisa memilih jangka waktu pinjaman yang sesuai dengan kebutuhan dan kemampuan finansial.</p>
    </div>
	</div>
    
</body>
</html>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="favicon.png" alt="Logo">
        </div>
        <div class="footer-social">
            <ul>
                <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://youtube.com"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; Alfansyah Yuandianto - 223307063.</p>
    </div>
</footer>

<?=template_footer()?>
