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
    }

    public function edit_admin($id)
    {
        $sql = "SELECT * FROM admin WHERE id_admin='$id'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_admin($id, $username, $nama_admin, $id_level)
    {
        $sql = "UPDATE admin SET username='$username', nama_admin='$nama_admin', id_level='$id_level' WHERE id_admin='$id'";
        $bind = $this->conn->query($sql);
    }

    public function delete_admin($id)
    {
        $sql = "DELETE FROM admin WHERE id_admin='$id'";
        $bind = $this->conn->query($sql);
    }
}
