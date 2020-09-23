<?php

session_start();

require('vendor/autoload.php');

use App\User;
use App\Task;
use App\Note;
use App\Policy\UserPolicy;
use App\Db\QueryBuilder;

$user = new User;
$task = new Task;
$note = new Note;
$logedUser = new User;
$policy = new UserPolicy;
$qb = new QueryBuilder;

$logedUser = $logedUser->show($_SESSION['user_id']);
$currentTask = $task->show($_GET['id']);
$user = $user->show($currentTask->user_id);

//FLAG: 0:in progress / 1:finished
$isCompleted = ($currentTask->completed == 0) ? 'In progress' : (($currentTask->completed == 1) ? 'Finished' : '');
$notes = $note->notesByTask($task->id);

require 'views/Layouts/Header.php';
require 'views/developer/show-task.view.php';
require 'views/notes/show-notes.view.php';
require 'views/notes/create-note.view.php';
require 'views/Layouts/Footer.php';