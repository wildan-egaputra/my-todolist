<?php 
session_start();
include 'koneksi.php';

$sql = "SELECT*FROM category";
$qq = mysqli_query($konek,$sql);

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
        <form action="proses_create.php" method="post">
            <div class="input">
                <label for="judul">judul:</label>
                <input type="text" name="judul" required>
            </div>
            <div class="input">
                <label for="deskripsi">deskripsi</label>
                <input type="text" name="deskripsi" required>
            </div>
            <select name="status">
                <option value="pending">pending</option>
                <option value="done">done</option>
            </select>
            <select name="id_category">
                <?php while($bar =mysqli_fetch_assoc($qq)){
                    ?>
                    <option value="<?= $bar['id_category']?>"> <?= $bar['category']?></option>
                    <?php
                }
                ?>
            </select>

            <input class="submit" type="submit" value="Tambah">
        </form>
    </div>
</body>
</html>