<?php

session_start();

if ($_SESSION['id_level'] != "2") {
    header("location:#");
}

require_once "../../../core/init.php";

$id = $_GET['id'];

$main = new Main();
$pelanggan = $main->pelanggan();
$admin = $main->admin();
$tagihan = $main->tagihan();
$pembayaran = $main->edit_pembayaran($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembayaran | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4" style="
    width:50%;
    ">
        <h4 class="mb-3">Tambah data pembayaran</h4>
        <div class="card" style="
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:10px;
            ">
            <div class="card-body m-4">
                <form action="../../../core/model.php?id=<?= $id; ?>" method="post">

                    <div class="row">
                        <div class="col">
                            <div class="mb-2 col-10">
                                <label for="disabledSelect">ID Tagihan</label>
                                <select id="disabledSelect" class="form-select mb-2" name="id_tagihan">
                                    <option><?= $pembayaran->id_tagihan; ?></option>
                                    <?php
                                    foreach ($tagihan as $t) : ?>
                                        <option><?= $t->id_tagihan; ?></option>
                                    <?php endforeach;
                                    ?>
                                </select>

                                <label for="id_admin">ID Admin</label>
                                <select id="disabledSelect" class="form-select mb-2" name="id_admin">
                                    <option><?= $pembayaran->id_admin; ?></option>
                                    <?php
                                    foreach ($admin as $a) : ?>
                                        <option><?= $a->id_admin; ?></option>
                                    <?php endforeach;
                                    ?>
                                </select>
                                <label for="id_pelanggan">ID Pelanggan</label>
                                <select id="disabledSelect" class="form-select mb-2" name="id_pelanggan">
                                    <option><?= $pembayaran->id_pelanggan; ?></option>
                                    <?php
                                    foreach ($pelanggan as $p) : ?>
                                        <option><?= $p->id_pelanggan; ?></option>
                                    <?php endforeach;
                                    ?>
                                </select>
                                <label for="meter_awal">Tanggal Pembayaran</label>
                                <input type="date" class="form-control mb-2 " name="tanggal_pembayaran" value="<?= $pembayaran->tanggal_pembayaran; ?>" />
                            </div>
                        </div>

                        <div class="col">
                            <div class="col-10">
                                <label for="disabledSelect">Bulan Bayar</label>
                                <select id="disabledSelect" class="form-select mb-2" name="bulan_bayar">
                                    <option><?= $pembayaran->bulan_bayar; ?></option>
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
                            </div>
                            <label for="meter_awal">Biaya Admin</label>
                            <input type="text" class="form-control mb-2 " name="biaya_admin" value="<?= $pembayaran->biaya_admin; ?>" />
                            <label for="meter_akhir">Total Bayar</label>
                            <input type="text" class="form-control mb-3 " name="total_bayar" value="<?= $pembayaran->total_bayar; ?>" />

                            <a href="index.php" class="btn btn-primary">Kembali</a>
                            <button type="submit" name="edit_pembayaran" class="btn btn-success">Konfirmasi</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>
<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>