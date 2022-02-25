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
        $admin = $this->conn->query("SELECT * FROM admin WHERE username='$username'");
        $pelanggan = $this->conn->query("SELECT * FROM pelanggan WHERE username='$username'");
        $cekadmin = mysqli_num_rows($admin);
        $cekpelanggan = mysqli_num_rows($pelanggan);

        if ($cekadmin > 0) {
            while ($row = mysqli_fetch_array($admin)) {
                if (password_verify($password, $row['password'])) {
                    if ($row['id_level'] == "1") {
                        $_SESSION['username'] = $username;
                        $_SESSION['id_level'] = "1";
                    } elseif ($row['id_level'] == "3") {
                        $_SESSION['username'] = $username;
                        $_SESSION['id_level'] = "3";
                    }
                } else {
                    header("location:../view/login.php?pesan=passwordsalah");
                }
            }
        } elseif ($cekpelanggan > 0) {
            while ($row = mysqli_fetch_array($pelanggan)) {
                if (password_verify($password, $row['password'])) {
                    if ($row['id_level' == "2"]) {
                        $_SESSION['username'] = $username;
                        $_SESSION['id_level'] = "2";
                    }
                } else {
                    header("location:../view/login.php?pesan=passwordsalah");
                }
            }
        } else {
            header("location:../view/login.php?pesan=usernamesalah");
        }
    }
}
