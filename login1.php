<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="content">
        <h1>Ini Login User</h1>
        <a href="register.php">Register</a>

        <form action="handler_login.php" method="post">
            <input type="hidden" name="add_buku" value="1">
            <div>
                <label for="">Username</label>
                <input type="text" name="Username">
            </div>
            <div>
                <label for="">Password</label>
                <input type="Password" name="Password">
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>