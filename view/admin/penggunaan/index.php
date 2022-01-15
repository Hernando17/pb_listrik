<?php

session_start();

require_once "../../../core/init.php";

$model = new Main();
$index = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan | Pembayaran Listrik</title>
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
                        <a class="nav-link active" href="index.php">Penggunaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">Admin</a>
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

    <div class="container" style="margin-top:3%;">
        <a href=" create.php" class="btn btn-success" style="margin:12px;">+</a>
        <div class="container">
            <div class=" card" style="
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius:10px;
        ">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pelanggan</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Meter Awal</th>
                                <th>Meter Akhir</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $result = $model->penggunaan();
                            if (!empty($result)) {
                                foreach ($result as $r) : ?>
                                    <tr>
                                        <th><?= $index++ ?></th>
                                        <td><?= $r->username; ?></td>
                                        <td><?= $r->nama_admin; ?></td>
                                        <td><?= $r->id_level; ?></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="edit.php?id=<?= $r->id_admin; ?>" class="btn btn-primary">Ubah</a>
                                            <form action="../../../core/model.php?id=<?= $r->id_admin; ?>" method="post" class="d-inline">
                                                <button type="submit" name="delete_admin" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            } else { ?>
                                <td>Data tidak ditemukan</td>
                                <?php

                                for ($i = 0; $i <= 5; $i++) {
                                    echo "<td></td>";
                                }

                                ?>

                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>