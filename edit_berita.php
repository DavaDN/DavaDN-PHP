<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Berita</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
    <a href="dashboard.php"><button class="back-button">&larr;</button></a>
        <?php
            include_once 'koneksi.php';
            $id = $_GET['id'];
            $berita = $koneksi->query("SELECT * FROM berita where id = '$id' ")->fetch_assoc();

        ?>

        <form action="handler_berita.php" method="post" enctype="multipart/form-daa">
        <input type="hidden" name="add_berita" value="1">
        <h2>Tambahkan berita</h2>
            <div>
                <label for="">judul</label>
                <input type="text" value="<?php echo $berita['judul'] ?>" name="judul">
            </div>
            <div>
                <label for="">Deskripsi</label>
                <input type="text" value="<?php echo $berita['deskripsi'] ?>" name="deskripsi">
            </div>
            <div>
                <label for="">Gambar</label>
                <input type="file" accept="image/png, image/jpeg, image/jpg" value="<?php echo $berita['gambar'] ?>" name="gambar">
            </div>
            <div>
                <label for="">Tanggal</label>
                <input type="date" value="<?php echo $berita['tanggal'] ?>" name="tanggal">
            </div>
            <div>
                <label for="">Penulis</label>
                <input type="text" value="<?php echo $berita['penulis'] ?>" name="penulis">
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>