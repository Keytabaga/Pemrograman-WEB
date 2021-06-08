<?php


session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");

    exit;
}

require 'function.php';

$result = mysqli_query($db, "SELECT * FROM daftarfilm");



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
                <ul class="sidebar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="collection.php">Collection</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
            </nav>
        </div>
            
       

        
		<div class="bd">
			<div class="container-new">
            <?php while ( $row = mysqli_fetch_assoc($result)): ?>
				<div class="card">
					<div class="imgBx">
						<a href='konten.php?judul=<?= $row["judul"] ?>'><img src="gambar/<?php echo $row["poster"]; ?>" ></a>
					</div>
					<div class="content-new">
						<h2><a href='konten.php?judul=<?= $row["judul"] ?>'><?= $row["judul"]; ?> </h2><br></a></p>
						<p><strong> Disutradai oleh : </strong> <?= $row["sutradara"]; ?> <br>
                        <strong>Genre :</strong> <?= $row["genre"]; ?> <br>
                        <strong> Rilis :</strong> <?= $row["rilis"]; ?>  <br>

					</div>
				</div>
            <?php endwhile; ?>
            </div>
        </div>  
  

        <div class="social-links">
			<a href="https://www.facebook.com/thania.nelwan"target="_blank">facebook</a>
			<a href="https://www.instagram.com/keziatbga_?hl=id"target="_blank">instagram</a>
			<a href="">twitter</a>
		</div>
    </div>
    <script src="app.js"></script>
</body>
</html>
