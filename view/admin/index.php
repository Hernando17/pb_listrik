<?php

session_start();

if ($_SESSION['id_level'] != "1") {
    header("location:#");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container">
            <a class="navbar-brand" href="#">Listrik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="penggunaan/index.php">Penggunaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tagihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembayaran</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['username']; ?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
    </nav>
    <div class="container" style="
    padding:80px;
    width:60%;
    ">
        <div class="card" style="
        padding:50px; 
        border-radius:10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        ">
            <div class="card-body">
                <?php
                if ($_SESSION['id_level'] == "1") {
                    echo "<h4>Selamat datang di situs pembayaran listrik</h4> <br>";
                    echo "<h5>Anda berhasil login sebagai admin</h5>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

<footer>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>