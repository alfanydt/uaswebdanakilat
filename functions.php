<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'sql304.infinityfree.com';
    $DATABASE_USER = 'if0_34382073';
    $DATABASE_PASS = 'CupkXoLyoHKxF';
    $DATABASE_NAME = 'if0_34382073_danakilat';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>