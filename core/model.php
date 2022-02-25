<?php

session_start();
require_once 'init.php';

// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $model = new Auth();
    $model->auth($username, $password);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/index.php");
    }
}

// Create new admin
if (isset($_POST['create_admin'])) {
    $nama_admin = $_POST['nama_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = $_POST['id_level'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $model = new Main();
    $model->create_admin($username, $password, $nama_admin, $id_level);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/admin/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/admin/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/admin/index.php");
    }
}

// Edit admin
if (isset($_POST['update_admin'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $nama_admin = $_POST['nama_admin'];
    $model = new Main();
    $model->update_admin($id, $username, $nama_admin);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/admin/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/admin/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/admin/index.php");
    }
}

// Delete admin
if (isset($_POST['delete_admin'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_admin($id);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/admin/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/admin/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/admin/index.php");
    }
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

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/penggunaan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/penggunaan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/penggunaan/index.php");
    }
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

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/penggunaan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/penggunaan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/penggunaan/index.php");
    }
}

// Delete penggunaan
if (isset($_POST['delete_penggunaan'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_penggunaan($id);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/penggunaan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/penggunaan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/penggunaan/index.php");
    }
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

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pelanggan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/pelanggan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pelanggan/index.php");
    }
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

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pelanggan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/pelanggan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pelanggan/index.php");
    }
}

// Delete Pelanggan
if (isset($_POST['delete_pelanggan'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_pelanggan($id);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pelanggan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/pelanggan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pelanggan/index.php");
    }
}

// Create Tagihan
if (isset($_POST['create_tagihan'])) {
    $id_penggunaan = $_POST['id_penggunaan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $jumlah_meter = $_POST['jumlah_meter'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $status = "belum_lunas";
    $model = new Main();
    $model->create_tagihan($id_penggunaan, $id_pelanggan, $jumlah_meter, $bulan, $tahun, $status);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/tagihan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/tagihan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/tagihan/index.php");
    }
}

// Create Tarif
if (isset($_POST['create_tarif'])) {
    $daya = $_POST['daya'];
    $tarifperkwh = $_POST['tarifperkwh'];
    $model = new Main();
    $model->create_tarif($daya, $tarifperkwh);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/tarif/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/tarif/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/tarif/index.php");
    }
}

// Delete Tarif
if (isset($_POST['delete_tarif'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_tarif($id);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/tarif/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/tarif/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/tarif/index.php");
    }
}

// Lunas Tagihan
if (isset($_POST['lunas'])) {
    $status = $_GET['id_lunas'];
    $input = "lunas";
    $model = new Main();
    $model->status($status, $input);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/tagihan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/tagihan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/tagihan/index.php");
    }
}

// Delete all tagihan
if (isset($_POST['deleteall_tagihan'])) {
    $status = "lunas";
    $model = new Main();
    $model->deletealltagihan($status);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/tagihan/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/tagihan/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/tagihan/index.php");
    }
}

// Create Pembayaran
if (isset($_POST['create_pembayaran'])) {
    $id_tagihan = $_POST['id_tagihan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $bulan_bayar = $_POST['bulan_bayar'];
    $biaya_admin = $_POST['biaya_admin'];
    $total_bayar = $_POST['total_bayar'];
    $id_admin = $_POST['id_admin'];
    $model = new Main();
    $model->create_pembayaran($id_tagihan, $id_pelanggan, $tanggal_pembayaran, $bulan_bayar, $biaya_admin, $total_bayar, $id_admin);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pembayaran/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/pembayaran/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pembayaran/index.php");
    }
}

// Edit Pembayaran
if (isset($_POST['edit_pembayaran'])) {
    $id = $_GET['id'];
    $id_tagihan = $_POST['id_tagihan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $bulan_bayar = $_POST['bulan_bayar'];
    $biaya_admin = $_POST['biaya_admin'];
    $total_bayar = $_POST['total_bayar'];
    $id_admin = $_POST['id_admin'];
    $model = new Main();
    $model->update_pembayaran($id, $id_tagihan, $id_pelanggan, $tanggal_pembayaran, $bulan_bayar, $biaya_admin, $total_bayar, $id_admin);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pembayaran/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/pembayaran/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pembayaran/index.php");
    }
}

// Delete Pembayaran
if (isset($_POST['delete_pembayaran'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_pembayaran($id);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pembayaran/index.php");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/pembayaran/index.php");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pembayaran/index.php");
    }
}

// Search Penggunaan
if (isset($_GET['search_penggunaan'])) {
    $penggunaan = $_GET['penggunaan'];
    $model = new Main();
    $model->search_penggunaan($penggunaan);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/penggunaan/search.php?search=$penggunaan");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/penggunaan/search.php?search=$penggunaan");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/penggunaan/search.php?search=$penggunaan");
    }
}

// Search Admin
if (isset($_GET['search_admin'])) {
    $admin = $_GET['admin'];
    $model = new Main();
    $model->search_admin($admin);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/admin/search.php?search=$admin");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/admin/search.php?search=$admin");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/admin/search.php?search=$admin");
    }
}

// Search Pelanggan
if (isset($_GET['search_pelanggan'])) {
    $pelanggan = $_GET['pelanggan'];
    $model = new Main();
    $model->search_pelanggan($pelanggan);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pelanggan/search.php?search=$pelanggan");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/pelanggan/search.php?search=$pelanggan");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pelanggan/search.php?search=$pelanggan");
    }
}

// Search Tarif
if (isset($_GET['search_tarif'])) {
    $tarif = $_GET['tarif'];
    $model = new Main();
    $model->search_tarif($tarif);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/tarif/search.php?search=$tarif");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/tarif/search.php?search=$tarif");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/tarif/search.php?search=$tarif");
    }
}

// Search Tagihan
if (isset($_GET['search_tagihan'])) {
    $tagihan = $_GET['tagihan'];
    $model = new Main();
    $model->search_tagihan($tagihan);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/tagihan/search.php?search=$tagihan");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/tagihan/search.php?search=$tagihan");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/tagihan/search.php?search=$tagihan");
    }
}

// Search Pembayaran
if (isset($_GET['search_pembayaran'])) {
    $pembayaran = $_GET['pembayaran'];
    $model = new Main();
    $model->search_pembayaran($pembayaran);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pembayaran/search.php?search=$pembayaran");
    } elseif ($_SESSION['id_level'] == "2") {
        header("location:../view/pelanggan/pembayaran/search.php?search=$pembayaran");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pembayaran/search.php?search=$pembayaran");
    }
}

if (isset($_GET['print'])) {
    $sejak = $_GET['sejak'];
    $sampai = $_GET['sampai'];
    $model = new Main();
    $model->print($sejak, $sampai);

    if ($_SESSION['id_level'] == "1") {
        header("location:../view/admin/pembayaran/print.php?sejak=$sejak&sampai=$sampai");
    } elseif ($_SESSION['id_level'] == "3") {
        header("location:../view/bank/pembayaran/print.php?sejak=$sejak&sampai=$sampai");
    }
}
