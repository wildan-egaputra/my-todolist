<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="proses_register.php" method="post">
            <div class="input">
                <label for="username">username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="input">
                <label for="password">password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="input">
                <label for="email">email:</label>
                <input type="email" name="email">
            </div>
            <div class="input">
                <label for="tanggal_lahir">tanggal lahir:</label>
                <input type="date" name="tanggal_lahir">
            </div>

            <input type="submit">
        </form>
    </div>
</body>
</html>