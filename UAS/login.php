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

    <title> Login</title>

</head>

<body>
    <h1> Sign In </h1>

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
</html>
