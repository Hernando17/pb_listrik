<?php

session_start();

if ($_SESSION['id_level'] != "1") {
    header("location:#");
}

require "../../../core/init.php";

$model = new Main();
$index = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tagihan | Pembayaran Listrik</title>
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
                        <a class="nav-link" href="../admin/index.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pelanggan/index.php">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tarif/index.php">Tarif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Tagihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pembayaran/index.php">Pembayaran</a>
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
        <a href="create.php" class="btn btn-success" style="margin:12px;">+</a>
        <div class="container">
            <div class="card" style="
        border-radius:10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        ">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Penggunaan</th>
                                <th>ID Pelanggan</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Jumlah Meter</th>
                                <th>status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $result = $model->tagihan();

                            if (!empty($result)) {
                                foreach ($result as $r) : ?>
                                    <tr>
                                        <td><?= $index++; ?></td>
                                        <td><?= $r->id_penggunaan; ?></td>
                                        <td><?= $r->id_pelanggan; ?></td>
                                        <td><?= $r->bulan; ?></td>
                                        <td><?= $r->tahun; ?></td>
                                        <td><?= $r->jumlah_meter; ?></td>
                                        <td><?= $r->status; ?></td>
                                        <form action="../../../core/model.php?id_lunas=<?= $r->id_tagihan; ?>" method="post">
                                            <?php
                                            if ($r->status == "belum_lunas") {
                                                echo '<td><button type="submit" class="btn btn-success" name="lunas">Lunas</button></td>';
                                            }
                                            ?>
                                        </form>
                                <?php endforeach;
                            } else {
                                echo "<td>Data tidak ditemukan</td>";
                                for ($i = 0; $i <= 6; $i++) {
                                    echo "<td></td>";
                                }
                            }

                                ?>
                                    </tr>
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