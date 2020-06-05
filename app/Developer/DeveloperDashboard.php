<?php

session_start();

require('vendor/autoload.php');

use App\User;
use App\Policy\UserPolicy;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['method'])) {
    if ($_GET['method'] === 'logout') {
        session_destroy();
        header('Location: /');
    }
}
if (!empty($_SESSION['user_id'])) {
    $user = new User;
    $policy = new UserPolicy;
    $logedUser = $user->show($_SESSION['user_id']);

    require('views/Layouts/Header.php');
    require('views/developer/developer-dashboard.view.php');
    require('views/Layouts/Footer.php');
} else {
    header('Location: /');
}
