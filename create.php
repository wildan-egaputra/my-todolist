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
        <form action="proses_create.php">
            <div class="input">
                <label for=""></label>
                <input type="text" name="" required>
            </div>
            <div class="input">
                <label for=""></label>
                <input type="text" name="" required>
            </div>
            <select name="status">
                <option value="pending">pending</option>
                <option value="done">done</option>
            </select>
            <select name="id_category">
                <option>--PILIH KATEGORI--</option>
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