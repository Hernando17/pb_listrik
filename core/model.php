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
if (isset($_POST['insert_admin'])) {
    // 
}
