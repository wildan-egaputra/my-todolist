<?php 
include 'koneksi.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $date = $_POST['tanggal_lahir'];

    $prepare = mysqli_prepare($konek,"INSERT INTO user (username,password,email,tanggal_lahir) values (?,?,?,?)");
    mysqli_stmt_bind_param($prepare,"ssss",$user,$pass,$email,$date);
    mysqli_stmt_execute($prepare);

    if($prepare){
        header("location:login.php");
    }else{
        header("location:register.php?=pendaftaran gagal");
    }

    mysqli_stmt_close($prepare);
    mysqli_close($konek);
}
?>