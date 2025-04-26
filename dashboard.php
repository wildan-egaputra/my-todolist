<?php 
session_start();
include 'koneksi.php';

if(!isset($_SESSION['username'])){
    header("location:login.php?= silahkan login terlebih dahulu");
}
$user = $_SESSION['id_user'];

$sql = "SELECT todo.*, user.username, category.category
        from todo
        JOIN user ON todo.id_user = user.id_user
        JOIN category ON todo.id_category = category.id_category
        where todo.id_user = $user";
$qq = mysqli_query($konek,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
</head>
<body>
    <div class="navbar">
        <navbar>
            <p class="judul">TODOLIST</p>
            <a href="profile.php" class="akun"><?= $_SESSION['username']?></a>
        </navbar>
    </div>
    <div class="main">
        <div class="head">

        </div>
        <div class="container">
            <?php while($bar = mysqli_fetch_assoc($qq)){
                ?> 
                <div class="card">
                    <p class=""><?= $bar['judul']?></p>
                    <p class=""><?= $bar['deskripsi']?></p>
                    <p class=""><?= $bar['created_at']?></p>
                    <p class=""><?= $bar['updated_at']?></p>
                    <p class=""><?= $bar['status']?></p>
                    <p class=""><?= $bar['username']?></p>
                    <p class=""><?= $bar['category']?></p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>
</html>