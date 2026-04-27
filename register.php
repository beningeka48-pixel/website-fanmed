<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" class="form-box">
        <h3 class="font-3">daftar akun</h3>
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password"> </br>
        <button type="submit" name="register">daftar</button>
    </form>

</body>

</html>

<?php
include "service/database.php";
if (isset($_POST["register"])) {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    $sql = "INSERT INTO users_register (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($db, $sql)) { 
        $_SESSION ['oke'] = $username;
        header("location: galery.php");
        exit();
    } else {
        echo "<script>alert('berhasil login')</script>"; 
    }
    
}
?>