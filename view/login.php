<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pembayaran Listrik</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container col-4">
        <div class="card" style="
    margin-top:30%;
    border-radius:10px;
    
    ">
            <div class="card-body m-4">
                <form action="../core/model.php" method="post">
                    <label for="username">Username</label>
                    <input type="text" class="form-control mb-3" name="username">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control mb-3" name="password">

                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>