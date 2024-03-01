<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$UserName = $_POST['UserName'];
$Password =md5($_POST['Password']);
$level = $_POST['level'];
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama','$UserName','$Password' ,'$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_pengguna.php?pesan=simpan");
 
?>
