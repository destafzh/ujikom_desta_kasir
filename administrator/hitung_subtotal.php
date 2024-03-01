<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$Stok = $_POST['Stok'];
$ProdukID = $_POST['ProdukID'];
$JumlahProduk = $_POST['JumlahProduk'];
$Harga = $_POST['Harga'];
$DetailID = $_POST['DetailID'];
$PelangganID = $_POST['PelangganID'];
$Subtotal = $JumlahProduk * $Harga;
$Stok_total =$Stok - $JumlahProduk;

// update data ke database

mysqli_query($koneksi,"update detailpenjualan set Subtotal='$Subtotal', JumlahProduk='$JumlahProduk' where DetailID='$DetailID'");
mysqli_query($koneksi,"update produk set Stok='$Stok_total' where ProdukID='$ProdukID'");

 
// mengalihkan halaman kembali ke Detail_Pembelian.php
header("location:detail_Pembelian.php?PelangganID=$PelangganID");
?>