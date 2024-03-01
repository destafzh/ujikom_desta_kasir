<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$IDUser = $_POST['IDUser'];
$nama = $_POST['nama'];
$UserName = $_POST['UserName'];
$Password =md5($_POST['Password']);
$level = $_POST['level'];
 
// update data ke database
if (!$Password) {
	mysqli_query($koneksi,"update user set nama='$nama', UserName='$UserName', level='$level' where IDUser='$IDUser'");
}else {
	mysqli_query($koneksi,"update user set nama='$nama', UserName='$UserName',  Password='$Password', level='$level' where IDUser='$IDUser'");
}
 
// mengalihkan halaman kembali ke index.php
header("location:data_pengguna.php?pesan=update");
 
?>