<?php 
session_start();
include 'koneksi.php';


$id = $_GET['id_todo'];

$sql = "SELECT*FROM todo where id_todo = $id";
$qq = mysqli_query($konek,$sql);

$bar = mysqli_fetch_assoc($qq);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="judul">EDIT TODO</div>
    <div class="container">
        <form action="proses_create.php" method="post">
            <div class="input">
                <label for="judul">judul:</label>
                <input type="text" name="judul" value="<?= $bar['judul']?>" required>
            </div>
            <div class="input">
                <label for="deskripsi">deskripsi</label>
                <input type="text" name="deskripsi" value="<?= $bar['deskripsi']?>" required>
            </div>
            <select name="status">
                <option value="pending"<?= $bar['status'] == "pending" ? 'selected' : ''?>>pending</option>
                <option value="done"<?= $bar['status'] == "done" ? 'selected' : ''?>>done</option>
            </select>
            <select name="id_category">
                <?php 
                $sql2 = "SELECT*FROM category";
                $qq2 = mysqli_query($konek,$sql2);
                while($bar2 =mysqli_fetch_assoc($qq2)){
                    ?>
                    <option value="<?= $bar2['id_category']?>"<?= $bar['id_category'] == $bar['id_category'] ? "selected" : ''?> > <?= $bar2['category']?></option>
                    <?php
                }
                ?>
            </select>

            <input class="submit" type="submit" value="Tambah">
        </form>
    </div>
</body>
</html>