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
    <title>Tambah Pelanggan | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
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
                        <a class="nav-link" aria-current="page" href="../index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../penggunaan/index.php">Penggunaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../pelanggan/index.php">Pelanggan</a>
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
                            <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
    </nav>

    <div class="container mt-4" style="
    width:50%;
    ">
        <h4 class="mb-3">Tambah data pelanggan</h4>
        <div class="card" style="
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:10px;
            ">
            <div class="card-body m-4">
                <form action="../../../core/model.php" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="text" class="form-control mb-2 " name="nama_pelanggan" />
                            <label for="username">Username</label>
                            <input type="text" class="form-control mb-2" name="username" />
                            <label for="password">Password</label>
                            <input type="password" class="form-control mb-3" name="password" />
                        </div>
                        <div class="col">
                            <label for="nomor_kwh">Nomor KWH</label>
                            <input type="text" class="form-control mb-2" name="nomor_kwh" />
                            <label for="id_tarif">ID Tarif</label>
                            <input type="text" class="form-control mb-2" name="id_tarif" />
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control mb-2" name="alamat" />
                        </div>
                    </div>

                    <a href="index.php" class="btn btn-primary">Kembali</a>
                    <button type="submit" name="create_pelanggan" class="btn btn-success">Konfirmasi</button>
                </form>

            </div>
        </div>
    </div>

</body>

<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>