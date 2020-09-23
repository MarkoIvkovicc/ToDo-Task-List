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
        'text' =>  htmlspecialchars($_POST['text']),
        'user_id' => htmlspecialchars($logedUser->id),
        'task_id' => htmlspecialchars($_POST['taskId']),
        'created_at' => date('Y-m-d H:i:s'),
    ];
    $note = new Note;
    $note->create($noteData);

    if ($policy->isAdmin($logedUser)) {
        header('Location: /showTask?id=' . $_POST['taskId'] . '&success=1');
    } else {
        header('Location: /developerTask?id=' . $_POST['taskId'] . '&success=1');
    }
} else {
    header('Location: /showTask?id=' . $_POST['taskId']);
}
