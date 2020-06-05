<?php

session_start();

require('vendor/autoload.php');

use App\User;
use App\Policy\UserPolicy;

$logedUser = new User;
$policy = new UserPolicy;

$logedUser = $logedUser->show($_SESSION['user_id']);

require 'views/Layouts/Header.php';
require 'views/developer/update-profile.view.php';
require 'views/Layouts/Footer.php';