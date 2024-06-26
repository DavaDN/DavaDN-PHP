<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="coba.css">
</head>
<body>
    <header class="header">
        <a href="dashboard.php" class="logo"></a>

        <nav class="navbar">
            <a href="dashboard.php" class="active">Beranda</a>
            <a href="form_berita.php">tambah berita</a>
            <a href="data_pengguna.php">pengguna</a>
        </nav>
        <div class="nav-social-media">
            <ul>
                <li><a href="https://www.instagram.com/someone_boringwithtask/"><iconify-icon icon="skill-icons:instagram"></iconify-icon></a></li>
                <li><a href=""><iconify-icon icon="openmoji:youtube"></iconify-icon></a></li>
                <li><a href=""><iconify-icon icon="logos:tiktok-icon"></iconify-icon></a></li>
            </ul>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    
    <?php
            include_once "koneksi.php";
            $data_buku = $koneksi->query(
                "SELECT * FROM berita"
            );
        ?>
         <?php
            foreach ($data_buku as $item) {
                
        ?>
    <div class="about">
    <div class="news-item">
            <div class="img-hero">
                <img src ="./gambar/<?php echo $item['gambar']?> " width="400px" >
            </div>
            <div class="desc-hero">
                <h1><?php echo $item['judul'] ?></h1>
                <a href="detail.php"><h2>baca selengkapnya</h2></a>
                <p><?php echo $item['tanggal'] ?></p>
                <p><?php echo $item['penulis'] ?></p>
            </div>
            </div>
        </div>

        <?php
            }
        ?>
    

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <footer class="footer">
            Made by Dava
    </footer>
</body>
</html>