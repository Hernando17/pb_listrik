<?php

require '../connection.php';
require 'main.php';
require_once 'auth.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $model = new Auth();
    $model->auth($username, $password);
}
