<?php 
session_start();
include 'koneksi.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT*FROM user where username = $user";
    $qq = mysqli_query($konek,$sql);

    if($bar = mysqli_fetch_assoc($qq)){
        $pwh = password_verify($pass, $bar['password']);
        if($pwh == $bar['password']){
            $_SESSION['username'] = $bar['username'];
            header("location:dashboard.php");
        }else{
            header("location:login.php?= password anda salah");
        }
    }else{
        header("location:login.php:?= username tidak ditemukan");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="" method="post">
            <div class="input">
                <label for="username">username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="input">
                <label for="password">password:</label>
                <input type="password" name="password" required>
            </div>
            <input type="submit">
        </form>
    </div>
</body>
</html>