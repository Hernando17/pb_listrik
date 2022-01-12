<?php

require '../connection.php';
require_once 'auth.php';
require 'main.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $model = new Auth();
    $model->auth($username, $password);
}
