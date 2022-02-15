<?php

session_start();

if ($_SESSION['id_level'] != "1") {
    header("location:#");
}

require_once "../../../core/init.php";
$model = new Main();

$id = $_GET['id'];
$data = $model->edit_admin($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Admin | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4" style="
    width:50%;
    ">
        <h4 class="mb-3">Ubah data admin</h4>
        <div class="card" style="
    border-radius:10px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    ">
            <div class="card-body m-4">
                <form action="../../../core/model.php?id=<?= $id ?>" method="post">
                    <label for="nama_admin">Nama Admin</label>
                    <input type="text" class="form-control mb-2 " name="nama_admin" value="<?= $data->nama_admin ?>" />
                    <label for="username">Username</label>
                    <input type="text" class="form-control mb-3" name="username" value="<?= $data->username; ?>" />
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                    <button type="submit" name="update_admin" class="btn btn-success">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</body>

<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>