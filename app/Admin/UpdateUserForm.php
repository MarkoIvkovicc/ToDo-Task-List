<?php

session_start();

require('vendor/autoload.php');

use App\User;
use App\Policy\UserPolicy;


$logedUser = new User; 
$user = new User;
$policy = new UserPolicy;
$logedUser = $logedUser->show($_SESSION['user_id']);
$user = $user->show($_GET['id']);

require 'views/Layouts/Header.php';
require 'views/admin/update-user.view.php';
require 'views/Layouts/Footer.php';
