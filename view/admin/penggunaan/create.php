<?php

session_start();

require_once "../../../core/init.php";

$main = new Main();
$pelanggan = $main->pelanggan();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penggunaan | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4" style="
    width:50%;
    ">
        <h4 class="mb-3">Tambah data penggunaan</h4>
        <div class="card" style="
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:10px;
            ">
            <div class="card-body m-4">
                <form action="../../../core/model.php" method="post">

                    <div class="row">
                        <div class="col">
                            <div class="mb-2 col-10">
                                <label for="disabledSelect">ID Pelanggan</label>
                                <select id="disabledSelect" class="form-select" name="id_pelanggan">
                                    <?php
                                    foreach ($pelanggan as $p) : ?>
                                        <option><?= $p->id_pelanggan; ?></option>
                                    <?php endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col-10">
                                <label for="disabledSelect">Bulan</label>
                                <select id="disabledSelect" class="form-select mb-2" name="bulan">
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
                                <label for="tahun">Tahun</label>
                                <input type="text" class="form-control" name="tahun" />
                            </div>
                        </div>

                        <div class="col">
                            <label for="meter_awal">Meter Awal</label>
                            <input type="text" class="form-control mb-2 " name="meter_awal" />
                            <label for="meter_akhir">Meter Akhir</label>
                            <input type="text" class="form-control mb-4 " name="meter_akhir" />
                            <a href="index.php" class="btn btn-primary">Kembali</a>
                            <button type="submit" name="create_penggunaan" class="btn btn-success">Konfirmasi</button>
                        </div>
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