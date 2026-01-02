<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Tambah Produk Cookies</h2>

    <form method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label>Kode Produk</label>
            <input type="text" name="kode_produk" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Foto Produk</label>
            <input type="file" name="foto" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>

        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="tampilProduk.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>

<?php
if (isset($_POST['simpan'])) {

    $kode = $_POST['kode_produk'];
    $nama = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "uploads/".$foto);

    mysqli_query($koneksi, "INSERT INTO produk 
    (kode_produk, nama_produk, kategori, harga, stok, foto, deskripsi)
    VALUES 
    ('$kode','$nama','$kategori','$harga','$stok','$foto','$deskripsi')");

    echo "<script>alert('Produk berhasil ditambahkan');window.location='tampilProduk.php';</script>";
}
?>

