<?php
include "koneksi.php";

$id = $_POST['id'];

$sql = "UPDATE produk SET
kode_produk='$_POST[kode_produk]',
nama_produk='$_POST[nama_produk]',
kategori='$_POST[kategori]',
harga='$_POST[harga]',
stok='$_POST[stok]',
deskripsi='$_POST[deskripsi]'
WHERE id='$id'";

mysqli_query($koneksi, $sql);
header("location:tampilProduk.php");
?>
