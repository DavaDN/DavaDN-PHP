<?php
$koneksi = new mysqli('localhost', 'root', '', 'dbdava');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>