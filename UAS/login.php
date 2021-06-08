<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'function.php';


if(isset($_POST["login"])) {


    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1 ) {


        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {

            $_SESSION["login"] = true;

            header ("Location: index.php");
            exit;
        }
    }

    $error = true;


}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Login - Database Film Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="gambar/fi-03.png">

</head>

<body>
    <div class= boxeyo> 
        <div class="title"> 
            <h1> SIGN IN </h1>
        </div>
        <div class="input">

            <?php if( isset($error)) : ?>
                <p>username/password salah <p>
            <?php endif;?>

            <form action="" method="post">

            <ul>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
            </form>

            <a href="registrasi.php"> Don't have an account? </a>
        </div>
    </div>
</html>