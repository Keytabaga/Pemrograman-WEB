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
<title>Registrasi - Database Film Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="gambar/fi-03.png">
</head>

<body>
<div class="background">
	<div class="social-links">
		<a href="https://www.facebook.com/thania.nelwan"target="_blank">facebook</a>
		<a href="https://www.instagram.com/keziatbga_?hl=id"target="_blank">instagram</a>
		<a href="">twitter</a>
	</div> 

    <div class= boxeyo> 
        <div class="title"> 
            <h1> SIGN UP </h1> 
        </div>
            <div class="input">
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
            <a href="login.php"> Already have an account?</a>   
    </div>
</div>






</body>

</html>