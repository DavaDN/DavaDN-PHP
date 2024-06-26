<?php
include_once "koneksi.php";

if (isset($_POST['add_berita'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $gambar = $_POST['gambar'];
    $penulis = $_POST['penulis'];


    $insert = $koneksi->query(
        "INSERT INTO `berita`(`judul`, `deskripsi`, `tanggal`, `gambar`, `penulis`) 
        VALUES ('$judul','$deskripsi','$tanggal', '$gambar','$penulis')");

    if ($insert) {
        header('Location: dashboard.php');
    }else{
        echo "Data Berita Gagal masuk";
        
    }
}

if(isset($_POST['update_buku'])){
    $id = $_POST['id'];
    $penulis = $_POST['penulis'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $gambar = $_POST['gambar'];

    $insert = $koneksi->query(
        "UPDATE berita SET penulis='$penulis', nama='$nama', deskripsi='$deskripsi',tanggal='$tanggal',gambar='$gambar'
        where id = '$id'
        ");

    if ($insert) {
        header('Location: data_pengguna.php');
    }else{
        echo "Data berita Gagal masuk";
        
    }
}

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $delete = $koneksi->query(
        "DELETE from berita where id = $id
        ");
    if ($delete) {
        header('Location: data_pengguna.php');
    }else{
        echo "Data berita Gagal dihapus";
        
    }
}

?>
