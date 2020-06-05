<?php

session_start();

require('vendor/autoload.php');

use App\Task;
use App\User;
use App\Policy\UserPolicy;

$task = new Task;
$logedUser = new User;
$taskOwner = new User;
$policy = new UserPolicy;

$tasks = $task->index();
$logedUser = $logedUser->show($_SESSION['user_id']);

require('views/Layouts/Header.php');
require 'views/admin/index-tasks.view.php';
require('views/Layouts/Footer.php');