<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$PelangganID = $_POST['PelangganID'];
$PenjualanID = $_POST['PenjualanID'];

// update data ke database
mysqli_query($koneksi,"insert into detailpenjualan values('','$PenjualanID','','','')");
 
// mengalihkan halaman kembali ke Detail_Pembelian.php
header("location:detail_Pembelian.php?PelangganID=$PelangganID");
?>