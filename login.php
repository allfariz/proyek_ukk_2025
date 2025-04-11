<?php
require 'koneksi.php';

if(isset($_POST['submit'])) {
    $usernameEmail  = $_POST['usernameEmail'];
    $password       = $_POST['password'];

    $result = mysqli_query($db, "SELECT * FROM users WHERE Username = '$usernameEmail' OR Email = '$usernameEmail'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["Password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: home.php");
        }
        else {
            echo "<script> alert('Wrong password'); </script>";
        }
    }
    else {
        echo "<script> alert('User not registered'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    
    <form action="" method="post" autocomplete="off">
        <h2>Login</h2>

        <label for="usernameEmail">Username or Email : </label>
        <input type="text" name="usernameEmail" id="usernameEmail" required> <br>

        <label for="password" style=" margin-top: -10px;">Password : </label>
        <input type="password" name="password" id="password" required> <br>
        <br>

        <button type="submit" name="submit">Login</button>
        <br> 
        <!-- <p>Don't have any account? <a href="registration.php">Registration</a></p> -->
    </form>
</body>
</html>