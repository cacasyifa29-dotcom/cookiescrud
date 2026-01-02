<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Produk Cookies</h2>

    <form method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <div class="mb-3">
            <label>Kode Produk</label>
            <input type="text" name="kode_produk" class="form-control" value="<?= $row['kode_produk']; ?>">
        </div>

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="<?= $row['nama_produk']; ?>">
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?= $row['kategori']; ?>">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="<?= $row['harga']; ?>">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= $row['stok']; ?>">
        </div>

        <div class="mb-3">
            <label>Foto Lama</label><br>
            <?php if ($row['foto']) { ?>
                <img src="uploads/<?= $row['foto']; ?>" width="120"><br><br>
            <?php } ?>
            <input type="file" name="foto" class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"><?= $row['deskripsi']; ?></textarea>
        </div>

        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="tampilProduk.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>

<?php
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $kode = $_POST['kode_produk'];
    $nama = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    if ($_FILES['foto']['name'] != "") {
        $foto = $_FILES['foto']['name'];
        $tmp  = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmp, "uploads/".$foto);

        mysqli_query($koneksi, "UPDATE produk SET
            kode_produk='$kode',
            nama_produk='$nama',
            kategori='$kategori',
            harga='$harga',
            stok='$stok',
            foto='$foto',
            deskripsi='$deskripsi'
            WHERE id='$id'");
    } else {
        mysqli_query($koneksi, "UPDATE produk SET
            kode_produk='$kode',
            nama_produk='$nama',
            kategori='$kategori',
            harga='$harga',
            stok='$stok',
            deskripsi='$deskripsi'
            WHERE id='$id'");
    }

    echo "<script>alert('Produk berhasil diupdate');window.location='tampilProduk.php';</script>";
}
?>
