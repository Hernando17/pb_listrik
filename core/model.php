<?php

require_once 'init.php';

// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $model = new Auth();
    $model->auth($username, $password);
    header("location:../view/admin/index.php");
}

// Create new admin
if (isset($_POST['create_admin'])) {
    $nama_admin = $_POST['nama_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = "1";
    $password = password_hash($password, PASSWORD_DEFAULT);
    $model = new Main();
    $model->create_admin($username, $password, $nama_admin, $id_level);
    header("location:../view/admin/admin/index.php");
}

// Edit admin
if (isset($_POST['update_admin'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $nama_admin = $_POST['nama_admin'];
    $model = new Main();
    $model->update_admin($id, $username, $nama_admin);
    header("location:../view/admin/admin/index.php");
}

// Delete admin
if (isset($_POST['delete_admin'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_admin($id);
    header("location:../view/admin/admin/index.php");
}

// Create penggunaan
if (isset($_POST['create_penggunaan'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $meter_awal = $_POST['meter_awal'];
    $meter_akhir = $_POST['meter_akhir'];
    $model = new Main();
    $model->create_penggunaan($id_pelanggan, $bulan, $tahun, $meter_awal, $meter_akhir);
    header("location:../view/admin/penggunaan/index.php");
}

// Update penggunaan
if (isset($_POST['update_penggunaan'])) {
    $id = $_GET['id'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $meter_awal = $_POST['meter_awal'];
    $meter_akhir = $_POST['meter_akhir'];
    $model = new Main();
    $model->update_penggunaan($id, $id_pelanggan, $bulan, $tahun, $meter_awal, $meter_akhir);
    header("location:../view/admin/penggunaan/index.php");
}

// Delete penggunaan
if (isset($_POST['delete_penggunaan'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_penggunaan($id);
    header("location:../view/admin/penggunaan/index.php");
}

// Create Pelanggan
if (isset($_POST['create_pelanggan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nomor_kwh = $_POST['nomor_kwh'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $id_tarif = $_POST['id_tarif'];
    $id_level = "2";
    $password = password_hash($password, PASSWORD_DEFAULT);
    $model = new Main();
    $model->create_pelanggan($username, $password, $nomor_kwh, $nama_pelanggan, $alamat, $id_tarif, $id_level);
    header("location:../view/admin/pelanggan/index.php");
}

// Update pelanggan
if (isset($_POST['update_pelanggan'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $nomor_kwh = $_POST['nomor_kwh'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $id_tarif = $_POST['id_tarif'];
    $id_level = "2";
    $model = new Main();
    $model->update_pelanggan($id, $username, $nomor_kwh, $nama_pelanggan, $alamat, $id_tarif, $id_level);
    header("location:../view/admin/pelanggan/index.php");
}

// Delete Pelanggan
if (isset($_POST['delete_pelanggan'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_pelanggan($id);
    header("location:../view/admin/pelanggan/index.php");
}
