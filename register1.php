<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form register</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="content">
        <h1>Ini Form register</h1>
        <a href="login1.php">login</a>

        <form action="handler_register.php" method="post">
            <input type="hidden" name="add_akun" value="1">
            <div>
                <label for="">Nama</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            
            <div class="submit">
            <button type="submit">kirim</button>
            </div>
        </form>
    </div>
</body>
</html>