<?php

session_start();

if ($_SESSION['id_level'] != "1") {
    header("location:#");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4" style="
    width:50%;
    ">
        <h4 class="mb-3">Tambah data admin</h4>
        <div class="card" style="
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:10px;
            ">
            <div class="card-body m-4">
                <form action="../../../core/model.php" method="post">
                    <label for="nama_admin">Nama Admin</label>
                    <input type="text" class="form-control mb-2 " name="nama_admin" />
                    <label for="username">Username</label>
                    <input type="text" class="form-control mb-2" name="username" />
                    <label for="password">Password</label>
                    <input type="password" class="form-control mb-2" name="password" />
                    <label for="disabledSelect" class="form-label">Level</label>
                    <select id="disabledSelect" class="form-select mb-3" style="width:20%;" name="id_level">
                        <option>1</option>
                        <option>3</option>
                    </select>

                    <a href="index.php" class="btn btn-primary">Kembali</a>
                    <button type="submit" name="create_admin" class="btn btn-success">Konfirmasi</button>
                </form>

            </div>
        </div>
    </div>
</body>

<footer>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</footer>

</html>