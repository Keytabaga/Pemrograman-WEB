<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");

    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Database Film Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="gambar/fi-03.png">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <nav>
        <div class="container-flex">
            <div class="brand">
                <img src="gambar/logo-02.png" class="logo">
             </div>
             <div class="burger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
             </div>
             <div class="bg-sidebar"></div>
             <ul class="sidebar">
                <li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="collection.php">Collection</a></li>
             </ul>
        </div>
            </nav>
        </div>

    <div class="bd">
        <div class="about">
            <div class="box">
                <div class="img">
                    <img src="gambar/key.jpg">
                </div>
                <div class="ab">
                    <h3>Kezia Isabela Tabaga</h3>
                    <p> 19021106045</p>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="gambar/tan.jpg">
                </div>
                <div class="ab">
                    <h3>Thania Gloria Nelwan</h3>
                    <p> 19021106030</p>
                </div>
            </div>
        </div>
    </div>
        <div class="social-links">
			<a href="https://www.facebook.com/thania.nelwan"target="_blank">facebook</a>
			<a href="https://www.instagram.com/keziatbga_?hl=id"target="_blank">instagram</a>
			<a href="">twitter</a>
		</div>
        <script src="app.js"></script>
</body>
</html>
