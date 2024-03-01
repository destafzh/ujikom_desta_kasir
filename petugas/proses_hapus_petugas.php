<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$IDUser= $_POST['IDUser'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from user where IDUser='$IDUser'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_pengguna.php?pesan=hapus");
 
?>