<?php
include "koneksi.php";

$kode = $_POST['kode_produk'];
$nama = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

$sql = "INSERT INTO produk 
(kode_produk, nama_produk, kategori, harga, stok, deskripsi)
VALUES
('$kode','$nama','$kategori','$harga','$stok','$deskripsi')";

mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

header("location:tampilProduk.php");
?>
