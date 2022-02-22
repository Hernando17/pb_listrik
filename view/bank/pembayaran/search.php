<?php

session_start();

if ($_SESSION['id_level'] != "3") {
    header("location:#");
}

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
    <title>Pembayaran | Pembayaran Listrik</title>
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
                        <a class="nav-link" href="../tagihan/index.php">Tagihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../pembayaran/index.php">Pembayaran</a>
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
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <a href=" create.php" class="btn btn-success">+</a>
                </div>
                <div class="col">
                    <form action="../../../core/model.php" method="get" class="d-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari" aria-label="Recipient's username" aria-describedby="basic-addon2" name="pembayaran">
                            <button type="submit" class="input-group-text" name="search_pembayaran">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=" card" style="
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius:10px;
        ">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Tagihan</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Bulan</th>
                                <th>Biaya Admin</th>
                                <th>Total Bayar</th>
                                <th>ID Admin</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $result = $model->search_pembayaran($_GET['search']);
                            if (!empty($result)) {
                                foreach ($result as $r) : ?>
                                    <tr>
                                        <th><?= $index++ ?></th>
                                        <td><?= $r->id_tagihan; ?></td>
                                        <td><?= $r->tanggal_pembayaran; ?></td>
                                        <td><?= $r->bulan_bayar; ?></td>
                                        <td><?= $r->biaya_admin; ?></td>
                                        <td><?= $r->total_bayar; ?></td>
                                        <td><?= $r->id_admin; ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $r->id_pembayaran; ?>" class="btn btn-primary">Ubah</a>
                                            <form action="../../../core/model.php?id=<?= $r->id_pembayaran; ?>" method="post" class="d-inline">
                                                <button type="submit" name="delete_pembayaran" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            } else { ?>
                                <td>Data tidak ditemukan</td>
                                <?php

                                for ($i = 0; $i <= 2; $i++) {
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