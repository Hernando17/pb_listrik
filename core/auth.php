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
        $admin = mysqli_query($this->conn, "SELECT * FROM admin WHERE username='$username'");
        $pelanggan = mysqli_query($this->conn, "SELECT * FROM pelanggan WHERE username='$username'");
        $cekadmin = mysqli_num_rows($admin);
        $cekpelanggan = mysqli_num_rows($pelanggan);

        if ($cekadmin > 0) {
            while ($row = mysqli_fetch_array($admin)) {
                if (password_verify($password, $row['password'])) {
                    if ($row['id_level'] == "1") {
                        $_SESSION['username'] = $username;
                        $_SESSION['id_level'] = "1";
                        header("location:../view/admin/index.php");
                    }
                }
            }
        } elseif ($cekpelanggan > 0) {
            while ($row = mysqli_fetch_array($pelanggan)) {
                if (password_verify($password, $row['password'])) {
                    if ($row['id_level' == "2"]) {
                        $_SESSION['username'] = $username;
                        $_SESSION['id_level'] = "2";
                        header("location:../view/admin/index.php");
                    }
                }
            }
        }
    }
}
