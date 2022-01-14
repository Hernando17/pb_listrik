<?php

require '../connection.php';
require_once 'auth.php';
require 'main.php';

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
}

// Edit admin
