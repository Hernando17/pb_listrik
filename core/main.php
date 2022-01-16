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

    public function penggunaan()
    {
        $sql = "SELECT * FROM penggunaan";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }

        if (!empty($baris)) {
            return $baris;
        }
    }

    public function create_penggunaan($id_pelanggan, $bulan, $tahun, $meter_awal, $meter_akhir)
    {
        $sql = "INSERT INTO penggunaan (id_pelanggan, bulan, tahun, meter_awal, meter_akhir) VALUES ('$id_pelanggan', '$bulan', '$tahun', '$meter_awal', '$meter_akhir')";
        $bind = $this->conn->query($sql);
    }

    public function edit_penggunaan($id)
    {
        $sql = mysqli_query($this->conn, "SELECT * FROM penggunaan WHERE id_penggunaan='$id'");

        while ($obj = $sql->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_penggunaan($id, $id_pelanggan, $bulan, $tahun, $meter_awal, $meter_akhir)
    {
        $sql = mysqli_query($this->conn, "UPDATE penggunaan SET id_pelanggan='$id_pelanggan', bulan='$bulan', tahun='$tahun', meter_awal='$meter_awal', meter_akhir='$meter_akhir' WHERE id_penggunaan='$id'");
    }

    public function delete_penggunaan($id)
    {
        $sql = "DELETE FROM penggunaan WHERE id_penggunaan='$id'";
        $bind = $this->conn->query($sql);
    }
}
