<?php

session_start();

require('vendor/autoload.php');

use App\Task;
use App\User;
use App\Policy\UserPolicy;

$logedUser = new User;
$logedUser = $logedUser->show($_SESSION['user_id']);
$policy = new UserPolicy;

$devUsers = $logedUser->developers();
if ($policy->isAdmin($logedUser)) {
    require 'views/Layouts/Header.php';
    require 'views/admin/create-task.view.php';
    require 'views/Layouts/Footer.php';
} else {
    header('Location: /developer');
} 

