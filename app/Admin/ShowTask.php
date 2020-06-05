<?php

session_start();

require('vendor/autoload.php');

use App\Policy\UserPolicy;
use App\Task;
use App\User;

$task = new Task;
$user = new User; 
$logedUser = new User;
$policy = new UserPolicy;

$currentTask = $task->show($_GET['id']);

$logedUser = $logedUser->show($_SESSION['user_id']);
$user = $user->show($currentTask->user_id);


//FLAG: 0:in progress / 1:finished
$isCompleted = ($currentTask->completed == 0) ? 'In progress' : (($currentTask->completed == 1) ? 'Finished' : '');
require('views/Layouts/Header.php');
require 'views/admin/show-task.view.php';
require('views/Layouts/Footer.php');