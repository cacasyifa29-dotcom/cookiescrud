<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">🍪 Katalog Cookies</a>
    <a href="tambahProduk.php" class="btn btn-warning">+ Tambah Produk</a>
  </div>
</nav>

<div class="container mt-4">
    <div class="row">

        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM produk");

        if (mysqli_num_rows($query) == 0) {
            echo "<p class='text-center'>Belum ada produk</p>";
        }

        while ($data = mysqli_fetch_assoc($query)) {
        ?>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">

                <!-- FOTO -->
                <?php if (!empty($data['foto'])) { ?>
                    <img src="uploads/<?= $data['foto']; ?>" class="card-img-top" height="220" style="object-fit:cover;">
                <?php } else { ?>
                    <img src="https://via.placeholder.com/300x220?text=No+Image" class="card-img-top">
                <?php } ?>

                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama_produk']; ?></h5>
                    <p class="card-text"><?= $data['deskripsi']; ?></p>

                    <p class="fw-bold text-primary">
                        Rp <?= number_format($data['harga'], 0, ',', '.'); ?>
                    </p>

                    <span class="badge bg-success mb-2">
                        Stok: <?= $data['stok']; ?>
                    </span>

                    <div class="mt-3">
                        <a href="editProduk.php?id=<?= $data['id']; ?>" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
</div>

</body>
</html>


