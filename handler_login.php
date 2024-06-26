<?php
include_once 'koneksi.php';



$nama = $_POST['nama'];
$password = $_POST['password'];

$users = $koneksi->query("SELECT * FROM user 
WHERE
nama = '$nama' AND password = '$password'");

$check_login = $users->fetch_array();

// if(isset($_COOKIE['id'])&&isset($_COOKIE['key'])){
//     $id = $_COOKIE['id'];
//     $key = $_COOKIE['key'];

//     // ambil username berdassarkan id
//     $result = $db -> query("SELECT username FROM users WHERE id = $id");
//     $row = $result -> fetch_assoc();

//     // cek cookie dan username
//     if($key === hash('sha256',$row['username'])){
//         $_SESSION['users'] = true;
//     }
// }

if($check_login[0]){
    session_start();
    $_SESSION['user'] = $check_login;
    // if(isset($_POST['remember'])){
    //     setcookie('id',$check_login['id'],time()+120);
    //     setcookie('key',hash('sha256',$check_login['username']),time()+120);
    // }
    header("Location: dashboard.php");
    exit;
}else {
    echo 'user tidak terdaftar';
    header('Location: dashboard.php');
}



