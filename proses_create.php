<?php 
session_start();
include 'koneksi.php';

$user = $_SESSION['id_user'];
$judul = $_POST['judul'];
$desk = $_POST['deskripsi'];
$status = $_POST['status'];
$cate = $_POST['id_category'];

$sql = "INSERT INTO todo (judul,deskripsi,status,category,id_user) values ('$judul','$desk','$status',$status,$user)";
$qq = mysqli_query($konek,$sql);

if($qq){
    header("location:dashboard.php");
}
?>