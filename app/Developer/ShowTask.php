<?php

session_start();

require('vendor/autoload.php');

use App\User;
use App\Task;
use App\Policy\UserPolicy;

$logedUser = new User;
$user = new User;
$task = new Task;
$policy = new UserPolicy;

$logedUser = $logedUser->show($_SESSION['user_id']);
$currentTask = $task->show($_GET['id']);
$user = $user->show($currentTask->user_id);


//FLAG: 0:in progress / 1:finished
$isCompleted = ($currentTask->completed == 0) ? 'In progress' : (($currentTask->completed == 1) ? 'Finished' : '');

require 'views/Layouts/Header.php';
require 'views/developer/show-task.view.php';
require 'views/Layouts/Footer.php';