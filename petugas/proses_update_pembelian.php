<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NoTelepon= $_POST['NoTelepon'];
$Alamat = $_POST['Alamat'];


 
// update data ke database
mysqli_query($koneksi,"update pelanggan set NamaPelanggan='$NamaPelanggan', NoTelepon='$NoTelepon', Alamat='$Alamat' where PelangganID='$PelangganID'");
 
// mengalihkan halaman kembali ke index.php
header("location:pembelian.php?pesan=update");
 
?>