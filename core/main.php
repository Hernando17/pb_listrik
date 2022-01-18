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

    public function update_admin($id, $username, $nama_admin)
    {
        $sql = "UPDATE admin SET username='$username', nama_admin='$nama_admin' WHERE id_admin='$id'";
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
        $sql = "SELECT * FROM penggunaan WHERE id_penggunaan='$id'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_penggunaan($id, $id_pelanggan, $bulan, $tahun, $meter_awal, $meter_akhir)
    {
        $sql = "UPDATE penggunaan SET id_pelanggan='$id_pelanggan', bulan='$bulan', tahun='$tahun', meter_awal='$meter_awal', meter_akhir='$meter_akhir' WHERE id_penggunaan='$id'";
        $bind = $this->conn->query($sql);
    }

    public function delete_penggunaan($id)
    {
        $sql = "DELETE FROM penggunaan WHERE id_penggunaan='$id'";
        $bind = $this->conn->query($sql);
    }

    public function pelanggan()
    {
        $sql = "SELECT * FROM pelanggan";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }

        if (!empty($baris)) {
            return $baris;
        }
    }

    public function create_pelanggan($username, $password, $nomor_kwh, $nama_pelanggan, $alamat, $id_tarif, $id_level)
    {
        $sql = "INSERT INTO pelanggan (username, password, nomor_kwh, nama_pelanggan, alamat, id_tarif, id_level) VALUES ('$username', '$password', '$nomor_kwh', '$nama_pelanggan', '$alamat', '$id_tarif', '$id_level')";
        $bind = $this->conn->query($sql);
    }

    public function edit_pelanggan($id)
    {
        $sql = "SELECT * FROM pelanggan WHERE id_pelanggan='$id'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function delete_pelanggan($id)
    {
        $sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id';";
        $bind = $this->conn->query($sql);
    }
}
