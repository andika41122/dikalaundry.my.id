<?php
include("service/database.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

 
    $check = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "Email sudah digunakan, silakan pakai email lain.";
        exit();
    }

   
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Simpan ke tabel `user`
    $sql = "INSERT INTO user (username, email, password) 
            VALUES ('$username', '$email', '$hashedPassword')";

    if (mysqli_query($db, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "SQL: " . $sql . "<br>";
        echo "Error: " . mysqli_error($db);
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
      <div class="register-container">
    <h1>Register</h1>
 <form action="register.php" method="POST">
  <input type="text" name="username" placeholder="Username" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Daftar</button>
</form>

  </div>

</body>
</html>