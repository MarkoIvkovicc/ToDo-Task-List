<?php
session_start();

require('vendor/autoload.php');

use App\Note;
use App\User;
use App\Task;
use App\Policy\UserPolicy;

$logedUser = new User;
$policy = new UserPolicy;

$logedUser = $logedUser->show($_SESSION['user_id']);

if (!empty($_POST['text'])) {
    $noteData = [
        'id' => htmlspecialchars($_POST['noteId']),
        'text' =>  htmlspecialchars($_POST['text']),
    ];

    $note = new Note;
    $note->update($noteData);
    $note = $note->noteById($_POST['noteId']);
    $taskId = array_shift($note)->task_id;

    if ($policy->isAdmin($logedUser)) {
        header('Location: /showTask?id=' . $_POST['taskId'] . '&success=1');
    } else {
        header('Location: /developerTask?id=' . $_POST['taskId'] . '&success=1');
    }
} else {
    header('Location: /updateNote?id=' . $_GET['noteId']);
}
