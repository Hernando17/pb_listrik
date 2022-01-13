<?php

class Main extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function admin()
    {
        $sql = "SELECT * FROM admin";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function create_admin($username, $password, $nama_admin, $id_level)
    {
        $sql = "INSERT INTO admin (username, password, nama_admin, id_level) VALUES ('$username', '$password', '$nama_admin', '$id_level')";
        $bind = $this->conn->query($sql);
        header("location:../view/admin/admin/index.php");
    }
}
