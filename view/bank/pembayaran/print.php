<?php

session_start();

if ($_SESSION['id_level'] != "3") {
    header("location:#");
}

require "../../../core/init.php";
$model = new Main();

$sejak = $_GET['sejak'];
$sampai = $_GET['sampai'];

$pembayaran = $model->print($sejak, $sampai);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Laporan Pembayaran Listrik</h1>
        <table class="table table-bordered mt-5 border-dark">
            <thead>
                <tr>
                    <th>ID Pembayaran</th>
                    <th>ID Tagihan</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Bulan</th>
                    <th>Biaya Admin</th>
                    <th>Total Bayar</th>
                    <th>ID Admin</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if (!empty($pembayaran)) {
                    foreach ($pembayaran as $p) : ?>
                        <tr>
                            <td><?= $p->id_pembayaran; ?></td>
                            <td><?= $p->id_tagihan; ?></td>
                            <td><?= $p->tanggal_pembayaran; ?></td>
                            <td><?= $p->bulan_bayar; ?></td>
                            <td><?= $p->biaya_admin; ?></td>
                            <td><?= $p->total_bayar; ?></td>
                            <td><?= $p->id_admin; ?></td>
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
</body>


<script>
    window.print();
</script>

</html>