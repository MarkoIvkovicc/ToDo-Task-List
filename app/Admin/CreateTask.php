<?php
session_start();

require('vendor/autoload.php');

use App\Task;
use App\User;
use App\Policy\UserPolicy;

$logedUser = new User;
$policy = new UserPolicy;

$logedUser = $logedUser->show($_SESSION['user_id']);



if (!empty($_POST['title']) && !empty($_POST['description'])) {
    $taskData = [
        'title' =>  htmlspecialchars($_POST['title']),
        'description' => htmlspecialchars($_POST['description']),
        'user_id' => htmlspecialchars($_POST['user_id']),
        'created_at' => date('Y-m-d H:i:s'),
    ];
    $task = new Task;
    $task->create($taskData);

    header('Location: /tasks');
} else {
    header('Location: /createTask');
}
