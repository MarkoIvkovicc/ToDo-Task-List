<?php

session_start();

require('vendor/autoload.php');

use App\User;
use App\Policy\UserPolicy;

$logedUser = new User;
$user = new User;

$policy = new UserPolicy;

$logedUser = $logedUser->show($_SESSION['user_id']);
$users = $user->developers();


require('views/Layouts/Header.php');
require 'views/admin/index-users.view.php';
require('views/Layouts/Footer.php');