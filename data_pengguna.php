<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="coba1.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php
    include_once "menu.php"; 
    include_once "check_login.php";

    $user = $_SESSION['user_login'];
    ?>

        <h1 class="text-2xl font-bold mb-4">Hello, <?php echo $user['nama']; ?></h1>
        <a href="logout.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Logout</a>
</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Berita</title>
    <link href="coba1.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php
    include_once "check_login.php";
    include_once "koneksi.php";
    include_once "menu.php";
    ?>
    <div class="container mx-auto px-4 py-6">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                   
                </thead>
                <tbody>
                    <?php
                   $userid = $_SESSION['user_login']['id'];
                   $data = $koneksi->query("SELECT berita.*, user.nama FROM berita JOIN user ON user.id = berita.id_user WHERE berita.id_user = $userid");
                   if (!$data) {
                     echo "Error: " . $koneksi->error; // Debugging query error
                   }
                   ?>
                   <?php $i=1; ?>
                   <?php include_once "koneksi.php";
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
            
                            <a href="edit_berita.php?id=<?= $item['id'] ?>" class="text-blue-500 hover:underline mr-2">Edit</a>
                            <a href="handler_berita.php?delete_id=<?= $item['id'] ?>" class="text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    </div>
            </div>
        </div>
                    <?php $i++ ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>