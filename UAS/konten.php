<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");

    exit;
}

$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($link);
parse_str($url_components['query'], $params);

require 'function.php';

$film = $params['judul'];

$result = mysqli_query($db, "SELECT * FROM content WHERE judul='$film'");

$row = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html>
<head>
    <title>Database Film Indonesia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
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
				<li><a href="logout.php">Log Out</a></li>

		  	 </ul>
  		</div>
			</nav>
		</div>

        <div class="full">
            <div class="judul"><?php echo $row["judul"]; ?></div>
            <div class="boxx">
                <div class= "imgBox">
                    <img src="gambar/<?php echo $row["poster"]; ?>">
                </div>
            </div>
            <div class="trai">
                <div class="trailer"><a href="<?php echo $row["trailer"]; ?>"target="_blank">Trailer</a></div>
            </div>
                <div class="data"><p>
                    <strong> Rilis :</strong> <?php echo $row["rilis"]; ?> <br><br>
                    <strong>Disutradai oleh : </strong> <?php echo $row["sutradara"]; ?>
                    <strong><br><br>Genre :</strong> <?php echo $row["genre"]; ?><br><br>
                    <div class="poin"> <strong>Pemeran :</strong><br><?php echo $row["pemeran"]; ?></div> <br>
                        
                    <div class="poin"><strong>Perusahaan Produksi :</strong><?php echo $row["produksi"]; ?> <div>
                    
                    <strong><br>Sinopsis :</strong><?php echo $row["sinopsis"]; ?>
                        <div class="sinopsis"> </div> <br><br><br>
                </div>

            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
                