<?php

session_start();

require_once "../../../core/init.php";

$model = new Main();
$id = $_GET['id'];
$data = $model->edit_penggunaan($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Penggunaan | Pembayaran Listrik</title>
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
                        <a class="nav-link" href="../pelanggan/index.php">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tagihan/index.php">Tagihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pembayaran.index.php">Pembayaran</a>
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

    <div class="container mt-4" style="
    width:50%;
    ">
        <h4 class="mb-3">Ubah data penggunaan</h4>
        <div class="card" style="
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:10px;
            ">
            <div class="card-body m-4">
                <form action="../../../core/model.php?id=<?= $id; ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="mb-2 col-10">
                                <label for="disabledSelect">ID Pelanggan</label>
                                <select id="disabledSelect" class="form-select" name="id_pelanggan">
                                    <option><?= $data->id_pelanggan; ?></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="mb-3 col-10">
                                <label for="disabledSelect">Bulan</label>
                                <select id="disabledSelect" class="form-select mb-2" name="bulan">
                                    <option><?= $data->bulan ?></option>
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
                                <input type="text" class="form-control" name="tahun" value="<?= $data->tahun ?>" />
                            </div>
                        </div>

                        <div class="col">
                            <label for="meter_awal">Meter Awal</label>
                            <input type="text" class="form-control mb-2 " name="meter_awal" value="<?= $data->meter_awal ?>" />
                            <label for="meter_akhir">Meter Akhir</label>
                            <input type="text" class="form-control mb-4 " name="meter_akhir" value="<?= $data->meter_akhir ?>" />
                            <a href="index.php" class="btn btn-primary">Kembali</a>
                            <button type="submit" name="update_penggunaan" class="btn btn-success">Konfirmasi</button>
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