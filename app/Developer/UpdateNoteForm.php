<?php
session_start();

require('vendor/autoload.php');

use App\Note;
use App\User;
use App\Policy\UserPolicy;

$note = new Note;
$user = new User; 
$policy = new UserPolicy;
$logedUser = $user->show($_SESSION['user_id']);

$note = array_shift($note->noteById($_GET['id']));
$noteText = $note->text;
$taskId = $note->task_id;

require('views/Layouts/Header.php');
require 'views/notes/update-note.view.php';
require('views/Layouts/Footer.php');