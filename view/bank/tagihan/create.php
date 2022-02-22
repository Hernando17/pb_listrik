<?php

session_start();

if ($_SESSION['id_level'] != "3") {
    header("location:#");
}

require "../../../core/init.php";

$main = new Main();
$penggunaan = $main->penggunaan();
$pelanggan = $main->pelanggan();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tagihan | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4" style="width:50%;">
        <h4 class="mb-3">Tambah data tagihan</h4>
        <div class="card" style="
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius:10px;
        ">
            <div class="card-body m-4">
                <form action="../../../core/model.php" method="post">
                    <div class="row">
                        <div class="col">

                            <label for="id_penggunaan" class="form-label">ID Penggunaan</label>
                            <select id="id_penggunaan" class="form-select mb-2" name="id_penggunaan">
                                <?php
                                foreach ($penggunaan as $p) : ?>
                                    <option><?= $p->id_penggunaan; ?></option>
                                <?php endforeach;
                                ?>
                            </select>

                            <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                            <select id="id_pelanggan" class="form-select mb-2" name="id_pelanggan">
                                <?php
                                foreach ($pelanggan as $pe) : ?>
                                    <option><?= $pe->id_pelanggan; ?></option>
                                <?php endforeach;
                                ?>
                            </select>

                            <label for="jumlah_meter" class="form-label">Jumlah Meter</label>
                            <input type="text" class="form-control mb-2" name="jumlah_meter">

                        </div>
                        <div class="col">
                            <label for="bulan" class="form-label">Bulan</label>
                            <select id="bulan" class="form-select mb-2" name="bulan">
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>

                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="text" class="form-control mb-3" name="tahun">

                            <a href="index.php" class="btn btn-primary">Kembali</a>
                            <button type="submit" name="create_tagihan" class="btn btn-success">Konfirmasi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>