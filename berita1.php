<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
   session_start();
//   if (!isset($_SESSION['users'])) {

//     exit;
//   }

  include_once "koneksi.php";
  

  $userid = $_SESSION['user_login']['id'];
  $data_berita = $koneksi->query("SELECT berita.*, user.nama FROM berita JOIN user ON user.id = berita.id_user WHERE berita.id_user = $userid");
  if (!$data_berita) {
    echo "Error: " . $koneksi->error; // Debugging query error
  }
  ?>
 <?php include_once "menu.php"; ?>

  
 <a href="tambah_berita.php"><button type="button" class="btn btn-primary">Tambah berita</button></a>
  <div class="my-berita d-flex justify-content-center">
    <div class="d-flex flex-wrap justify-content-center gap-3" style="margin-top:9vh;">
      <?php foreach ($data_berita as $item): ?>
      <div class="card shadow" style="width: 25rem;">
        <img src="./img/<?= $item['gambar'] ?>" class="card-img-top" style="height:220px;" alt="">
        <div class="card-body">
          <h5 class="card-title"><?= $item['judul'] ?></h5>
          <p class="card-text"><?= $item['deskripsi'] ?></p>
          <p class="card-text"><small class="text-body-secondary"><?= $item['tanggal'] ?></small></p>
          <div class="d-flex gap-1">
          <i class='bx bxs-user bx-sm'></i>
            <p class="card-text"><small class="text-body-secondary"><?= $_SESSION['user_login']['nama'] ?></small></p>
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center">
            <a href="edit.php?id=<?php echo $item['id'] ?>"><button type="button" class="btn btn-dark mt-3" style="background-color: #83C0E0;border:none;width:27vw;">Edit</button></a>
            <a href="delete.php?delete_id=<?php echo $item['id'] ?>"><button type="button" class="btn btn-dark mt-3" style="background-color: #83C0E0;border:none;width:27vw;">Delete</button></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> 
</body>
</html>