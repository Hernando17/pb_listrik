<?php

require_once 'init.php';

// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $model = new Auth();
    $model->auth($username, $password);
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
    header("location:../view/admin/admin/index.php");
}

// Edit admin
if (isset($_POST['update_admin'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $nama_admin = $_POST['nama_admin'];
    $id_level = $_POST['id_level'];
    $model = new Main();
    $model->update_admin($id, $username, $nama_admin, $id_level);
    header("location:../view/admin/admin/index.php");
}

// Delete admin
if (isset($_POST['delete_admin'])) {
    $id = $_GET['id'];
    $model = new Main();
    $model->delete_admin($id);
    header("location:../view/admin/admin/index.php");
}
