<?php


require('vendor/autoload.php');

use App\Task;

if (
    !empty($_POST['taskTitle']) &&
    !empty($_POST['taskDescription']) &&
    !empty($_POST['isTaskCompleted']) &&
    !empty($_POST['assignedTo'])
) {

    $taskData = [
        'id' => $_GET['id'],
        'user_id' => htmlspecialchars($_POST['assignedTo']),
        'title' => htmlspecialchars($_POST['taskTitle']),
        'description' => htmlspecialchars($_POST['taskDescription']),
    ];


    if ($_POST['isTaskCompleted'] == 'inProgress') {
        $taskData['completed'] = 0;
        $taskData['completed_at'] = date('Y-m-d H:i:s');
    } else if ($_POST['isTaskCompleted'] == 'finished') {
        $taskData['completed'] = true;
        $taskData['completed_at'] = date('Y-m-d H:i:s');
    }

    $task = new Task;
    $task->update($taskData);

    header("Location: /showTask?id=" . $_GET['id']);
} else {
    header("Location: /updateTask?id=" . $_GET['id']);
}
