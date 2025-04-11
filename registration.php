<?php
require 'koneksi.php';

if(isset($_POST["submit"])) {
  $name             = $_POST["name"];
  $username         = $_POST["username"];
  $email            = $_POST["email"];
  $password         = $_POST["password"];
  $confirmPassword  = $_POST["confirmPassword"];

  $duplicate = mysqli_query($db, "SELECT * FROM users WHERE Username = '$username' OR Email = '$email'");

  if (mysqli_num_rows($duplicate) > 0) {
    echo "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else {
    if($password == $confirmPassword) {
      $query = "INSERT INTO users VALUES ('', '$name', '$username', '$email', '$password')";
      mysqli_query($db, $query);
      echo "<script> alert('Registration Successful'); </script>";
    }
    else {
      echo "<script> alert('Password doesn't match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="./css/registration.css">
</head>
<body>
  <form action="" method="post" autocomplete = "off">
    <h2>Registration</h2>
    
    <label for="name">Name : </label>
    <input type="text" name="name" id="name" required> <br>

    <label for="username">Username : </label>
    <input type="text" name="username" id="username" required> <br>

    <label for="email">Email : </label>
    <input type="email" name="email" id="email" required> <br>

    <label for="password">Password : </label>
    <input type="password" name="password" id="password" required> <br>

    <label for="confirmpassword">Confirm Password : </label>
    <input type="password" name="confirmPassword" id="confirmpassword" required> <br>
    <br>
    <button type="submit" name="submit">Register</button>
    <br>
    <p>Already have an account? <a href="index.php">Login</a></p>
  </form>
</body>
</html>