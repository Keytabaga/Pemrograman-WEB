<?php 

require 'function.php';

if(isset($_POST["register"]) ) {

    if(registrasi($_POST)>0) {

        echo "<script>

                alert('user baru berhasil ditambahkan!');
            </script>";

    } else {

        echo mysqli_error($db);

    }

}

?>

<!DOCTYPE html>

<html>

<head>

    <title>Database Film Indonesia</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="gambar/fi-03.png">
    
    <title> Registrasi </title>
</head>

<body>
    <div class="content">
		<h1>Welcome!</h1>
		<p>Lihat informasi tentang Film Indonesia Favoritmu.</p>
		<a href="koleksi.html" class="btn">2020 Collection</a>
	</div>



	<div class="social-links">
		<a href="https://www.facebook.com/thania.nelwan"target="_blank">facebook</a>
		<a href="https://www.instagram.com/keziatbga_?hl=id"target="_blank">instagram</a>
		<a href="">twitter</a>
	</div> 

    <div class="title"> 
        <h1> Sign Up </h1> 
    </div>

    <div class="boxeyo">
        <form action = "" method="post">  
        <ul>
            <li>
                <label for ="username"> username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for ="password"> password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for ="confirmpass" > confirm password : </label>
                <input type="password" name="confirmpass" id="confirmpass"> 
            </li>
            <li>
                <button type="submit" name="register">Sign Up</button>
            </li>
        </ul>
    </div>




</body>

</html>
