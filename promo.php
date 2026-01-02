<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Promo Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card shadow-lg">
<div class="card-body text-center p-5">

    <h1 class="mb-3">🍪 Promo Spesial Cookies!</h1>
    <p class="lead">
        Nikmati cookies buatan homemade dengan rasa premium,
        renyah di luar dan lembut di dalam.
    </p>

    <hr>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Choco Chips</h5>
                    <p>Manis legit coklat asli</p>
                    <span class="badge bg-success">Diskon 20%</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Matcha Cookies</h5>
                    <p>Aroma matcha premium</p>
                    <span class="badge bg-success">Best Seller</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Red Velvet</h5>
                    <p>Lembut & creamy</p>
                    <span class="badge bg-success">New!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="dashboard.php" class="btn btn-primary me-2">
            Masuk Dashboard
        </a>
        <a href="logout.php" class="btn btn-danger">
            Keluar
        </a>
    </div>

</div>
</div>

</div>
</div>
</div>

</body>
</html>
