<?php

session_start();

require('vendor/autoload.php');

use App\User;
use App\Policy\UserPolicy;

$user = new User;
$policy = new UserPolicy;

$logedUser = $user->show($_SESSION['user_id']);


require 'views/Layouts/Header.php';
require 'views/developer/profile.view.php';
require 'views/Layouts/Footer.php';