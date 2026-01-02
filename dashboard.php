<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
<div class="container">
    <span class="navbar-brand">🍪 Dashboard Admin</span>
    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
</div>
</nav>

<div class="container mt-4">
<div class="row">

<div class="col-md-4">
<div class="card shadow">
<div class="card-header bg-primary text-white">Biodata</div>
<div class="card-body">
    <p><b>Nama:</b><br><?= $user['nama']; ?></p>
    <p><b>NIM:</b><br><?= $user['nim']; ?></p>
    <p><b>Program Studi:</b><br><?= $user['prodi']; ?></p>
    <p><b>Hobi:</b><br><?= $user['hobi']; ?> 🍪</p>
</div>
</div>
</div>

<div class="col-md-8">
<div class="card shadow">
<div class="card-header bg-success text-white">Tentang</div>
<div class="card-body">
    <p>
        Dashboard ini menampilkan informasi admin yang sedang login
        serta digunakan untuk mengelola sistem katalog produk cookies
        berbasis web.
    </p>

    <a href="tampilProduk.php" class="btn btn-primary">
        Kelola Produk
    </a>
</div>
</div>
</div>

</div>
</div>

</body>
</html>
