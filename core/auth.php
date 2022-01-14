<?php

session_start();

class Auth extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function auth($username, $password)
    {
        $login = mysqli_query($this->conn, "SELECT * FROM admin WHERE username='$username'");
        $cek = mysqli_num_rows($login);

        if ($cek > 0) {
            // $data = mysqli_fetch_assoc($login);
            while ($row = mysqli_fetch_array($login)) {
                if (password_verify($password, $row['password'])) {
                    if ($row['id_level'] == "1") {
                        $_SESSION['username'] = $username;
                        $_SESSION['id_level'] = "1";
                        header("location:../view/admin/index.php");
                    } else if ($row['id_level'] == "2") {
                        $_SESSION['username'] = $username;
                        $_SESSION['id_level'] = "2";
                        header("location:view/kasir/halaman_kasir.php");
                    } else if ($row['id_level'] == "3") {
                        $_SESSION['username'] = $username;
                        $_SESSION['id_level'] = "3";
                        header("location:view/owner/halaman_owner.php");
                    }
                }
            }
        } else {
            header("location:view/index.php?pesan=gagal");
        }
    }
}
