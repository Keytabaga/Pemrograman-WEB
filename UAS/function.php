<?php

$db = mysqli_connect("localhost", "root", "", "film");




function registrasi($data) {
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $confirmpass = mysqli_real_escape_string($db, $data["confirmpass"]);



    $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {

        echo "<script>
                alert('username sudah terdaftar!')
            </script>";
        return false;
    }


    if( $password !== $confirmpass ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;

    }
    
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($db, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($db);

}

return 1;




?>
