<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin | Pembayaran Listrik</title>
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
                        <a class="nav-link" href="#">Penggunaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Admin</a>
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
                            <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
    </nav>

    <div class="container mt-5" style="
    width:50%;
    ">
        <div class="card" style="
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:10px;
            ">
            <div class="card-body m-4">
                <form action="../../../core/model.php" method="post">
                    <label for="nama_admin">Nama Admin</label>
                    <input type="text" class="form-control mb-2 " name="nama_admin" />
                    <label for="username">Username</label>
                    <input type="text" class="form-control mb-2" name="username" />
                    <label for="password">Password</label>
                    <input type="password" class="form-control mb-2" name="password" />
                    <div class="mb-3 col-2">
                        <label for="disabledSelect">ID Level</label>
                        <select id="disabledSelect" class="form-select mb-4" name="id_level">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>

                    <a href="index.php" class="btn btn-primary">Kembali</a>
                    <button type="submit" name="create_admin" class="btn btn-success">Konfirmasi</button>
                </form>

            </div>
        </div>
    </div>
</body>

<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>