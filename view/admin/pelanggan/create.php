<?php

session_start();

if ($_SESSION['id_level'] != "1") {
    header("location:#");
}

require("../../../core/init.php");
$main = new Main();
$tarif = $main->tarif();

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
                            <select name="id_tarif" class="form-select">
                                <?php
                                foreach ($tarif as $t) : ?>
                                    <option><?= $t->id_tarif; ?></option>
                                <?php endforeach; ?>
                                ?>
                            </select>
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