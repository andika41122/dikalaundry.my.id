<?php
include("service/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($username == "" || $password == "") {
        echo "Username atau password tidak boleh kosong!";
        exit();
    }

    // Cari user berdasarkan username
    $sql = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password hash
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

    </div>
</body>
</html>
