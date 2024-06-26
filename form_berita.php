<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Berita</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
    <a href="dashboard.php"><button class="back-button">&larr;</button></a>
        <form action="handler_berita.php" method="post" enctype="multipart/form-daa">
            <input type="hidden" name="add_berita" value="1">
            <h2>Tambahkan berita</h2>
            <div>
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul">
            </div>
            <div>
                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi">
            </div>
            <div>
                <label for="gambar">Gambar</label>
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="gambar">
            </div>
            <div>
                <label for="tanggal">tanggal</label>
                <input type="date" name="tanggal">
            </div>
            <div>
                <label for="penulis">Penulis</label>
                <input type="text" id="penulis" name="penulis">
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>