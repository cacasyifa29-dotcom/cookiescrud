<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-4">

<div class="card shadow">
<div class="card-header bg-dark text-white text-center">
    <h5>Login Admin</h5>
</div>

<div class="card-body">
<form method="POST">

    <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

    <button type="submit" name="login" class="btn btn-primary w-100">
        Login
    </button>

    <div class="text-center mt-3">
        <a href="register.php">Belum punya akun? Daftar</a>
    </div>

</form>
</div>
</div>

</div>
</div>
</div>

</body>
</html>

<?php
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);

    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = $data;
        header("Location: promo.php");
        exit;
    } else {
        echo "<script>alert('Login gagal');</script>";
    }
}
?>
