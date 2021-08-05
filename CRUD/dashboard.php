<?php
session_start();

if (!isset($_SESSION) && isset($_SESSION['online'])) {
    header('location:/');
}

require('./app/Models/User.php');

$model = new User();
$me = $model->getMe();

echo 'Olá, ' . $me['name'];