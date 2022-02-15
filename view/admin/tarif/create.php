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
    <title>Tambah Tarif | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4" style="
    width:50%;
    ">
        <h4 class="mb-3">Tambah data tarif</h4>
        <div class="card" style="
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:10px;
            ">
            <div class="card-body m-4">
                <form action="../../../core/model.php" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="daya">Daya</label>
                            <input type="text" class="form-control mb-2 " name="daya" />
                            <label for="tarifperkwh">Tarif / KWH</label>
                            <input type="text" class="form-control mb-3" name="tarifperkwh" />
                        </div>
                    </div>

                    <a href="index.php" class="btn btn-primary">Kembali</a>
                    <button type="submit" name="create_tarif" class="btn btn-success">Konfirmasi</button>
                </form>

            </div>
        </div>
    </div>

</body>

<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>