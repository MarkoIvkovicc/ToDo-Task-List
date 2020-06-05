<?php

session_start();

require('vendor/autoload.php');

use App\Task;
use App\User;
use App\Policy\UserPolicy;

$task = new Task;
$user = new User;
$logedUser = new User;
$policy = new UserPolicy;

$currentTask = $task->show($_GET['id']);
$user = $user->show($currentTask->user_id);
$logedUser = $logedUser->show($_SESSION['user_id']);
$allDevelopers = $user->developers();



//FLAG: 0:in progress / 1:finished
$isCompleted = ($currentTask->completed == 0) ? 'In progress' : (($currentTask->completed == 1) ? 'Finished' : '');

require 'views/Layouts/Header.php';
require 'views/admin/update-task.view.php';
require 'views/Layouts/Footer.php';
