<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-5">

<div class="card shadow">
<div class="card-header bg-success text-white text-center">
    <h5>Daftar Akun Admin</h5>
</div>

<div class="card-body">
<form method="POST">

    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama Lengkap" required>
    <input type="text" name="nim" class="form-control mb-2" placeholder="NIM" required>
    <input type="text" name="prodi" class="form-control mb-2" placeholder="Program Studi" required>
    <input type="text" name="hobi" class="form-control mb-2" placeholder="Hobi" required>

    <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

    <button type="submit" name="daftar" class="btn btn-success w-100">
        Daftar
    </button>

</form>
</div>
</div>

</div>
</div>
</div>

</body>
</html>

<?php
if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $hobi = $_POST['hobi'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO user
    (nama, nim, prodi, hobi, username, password)
    VALUES
    ('$nama','$nim','$prodi','$hobi','$username','$password')");

    echo "<script>alert('Akun berhasil dibuat');window.location='login.php';</script>";
}
?>
