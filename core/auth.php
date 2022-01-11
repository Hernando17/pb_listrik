<?php

class Auth extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function auth($username, $password)
    {
        $login = mysqli_query($this->conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
        $cek = mysqli_num_rows($login);

        if ($cek > 0) {
            $data = mysqli_fetch_assoc($login);

            if ($data['id_level'] == "1") {

                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['id_level'] = "1";
                // alihkan ke halaman dashboard admin
                header("location:view/admin/halaman_admin.php");

                // cek jika user login sebagai kasir
            } else if ($data['id_level'] == "2") {
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['id_level'] = "2";
                // alihkan ke halaman dashboard kasir
                header("location:view/kasir/halaman_kasir.php");

                // cek jika user login sebagai owner
            } else if ($data['id_level'] == "3") {
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['id_level'] = "3";
                // alihkan ke halaman dashboard owner
                header("location:view/owner/halaman_owner.php");
            }
        } else {
            header("location:view/index.php?pesan=gagal");
        }
    }
}
