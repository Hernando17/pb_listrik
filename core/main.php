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

    public function update_pelanggan($id, $username, $nomor_kwh, $nama_pelanggan, $alamat, $id_tarif, $id_level)
    {
        $sql = "UPDATE pelanggan SET username='$username', nama_pelanggan='$nama_pelanggan', nomor_kwh='$nomor_kwh', id_tarif='$id_tarif', alamat='$alamat', id_level='$id_level' WHERE id_pelanggan='$id'";
        $bind = $this->conn->query($sql);
    }

    public function delete_pelanggan($id)
    {
        $sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id';";
        $bind = $this->conn->query($sql);
    }

    public function tagihan()
    {
        $sql = "SELECT * FROM tagihan";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }

        if (!empty($baris)) {
            return $baris;
        }
    }

    public function create_tagihan($id_penggunaan, $id_pelanggan, $jumlah_meter, $bulan, $tahun, $status)
    {
        $sql = "INSERT INTO tagihan (id_penggunaan, id_pelanggan, jumlah_meter, bulan, tahun, status) VALUES ('$id_penggunaan', '$id_pelanggan', '$jumlah_meter', '$bulan', '$tahun', '$status')";
        $bind = $this->conn->query($sql);
    }

    public function status($status, $input)
    {
        $sql = "UPDATE tagihan SET status='$input' WHERE id_tagihan='$status'";
        $bind = $this->conn->query($sql);
    }

    public function tarif()
    {
        $sql = "SELECT * FROM tarif";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }

        if (!empty($baris)) {
            return $baris;
        }
    }

    public function create_tarif($daya, $tarifperkwh)
    {
        $sql = "INSERT INTO tarif (daya, tarifperkwh) VALUES ('$daya', '$tarifperkwh')";
        $bind = $this->conn->query($sql);
    }

    public function delete_tarif($id)
    {
        $sql = "DELETE FROM tarif WHERE id_tarif='$id';";
        $bind = $this->conn->query($sql);
    }

    public function pembayaran()
    {
        $sql = "SELECT * FROM pembayaran";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }

        if (!empty($baris)) {
            return $baris;
        }
    }

    public function create_pembayaran($id_tagihan, $id_pelanggan, $tanggal_pembayaran, $bulan_bayar, $biaya_admin, $total_bayar, $id_admin)
    {
        $sql = "INSERT INTO pembayaran (id_tagihan, id_pelanggan, tanggal_pembayaran, bulan_bayar, biaya_admin, total_bayar, id_admin) VALUES ('$id_tagihan', '$id_pelanggan', '$tanggal_pembayaran', '$bulan_bayar', '$biaya_admin', '$total_bayar', '$id_admin')";
        $bind = $this->conn->query($sql);
    }

    public function edit_pembayaran($id)
    {
        $sql = "SELECT * FROM pembayaran WHERE id_pembayaran='$id'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update_pembayaran($id, $id_tagihan, $id_pelanggan, $tanggal_pembayaran, $bulan_bayar, $biaya_admin, $total_bayar, $id_admin)
    {
        $sql = "UPDATE pembayaran SET id_tagihan='$id_tagihan', id_pelanggan='$id_pelanggan', tanggal_pembayaran='$tanggal_pembayaran', bulan_bayar='$bulan_bayar', biaya_admin='$biaya_admin', total_bayar='$total_bayar', id_admin='$id_admin' WHERE id_pembayaran='$id'";
        $bind = $this->conn->query($sql);
    }

    public function delete_pembayaran($id)
    {
        $sql = "DELETE FROM pembayaran WHERE id_pembayaran='$id'";
        $bind = $this->conn->query($sql);
    }

    public function deletealltagihan($status)
    {
        $sql = "DELETE FROM tagihan WHERE status='$status'";
        $bind = $this->conn->query($sql);
    }

    public function search_penggunaan($penggunaan)
    {
        $sql = "SELECT * FROM penggunaan WHERE id_penggunaan LIKE '%$penggunaan%' OR id_pelanggan LIKE '%$penggunaan%' OR bulan LIKE '%$penggunaan%' OR tahun LIKE '%$penggunaan%' OR meter_awal LIKE '%$penggunaan%' OR meter_akhir LIKE '%$penggunaan%'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }

        if (!empty($baris)) {
            return $baris;
        }
    }

    public function search_admin($admin)
    {
        $sql = "SELECT * FROM admin WHERE id_admin LIKE '%$admin%' OR username LIKE '%$admin%' OR nama_admin LIKE '%$admin%' OR id_level LIKE '$%$admin%'";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }

        if (!empty($baris)) {
            return $baris;
        }
    }
}
