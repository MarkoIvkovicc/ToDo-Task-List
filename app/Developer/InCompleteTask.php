<?php

session_start();

require('vendor/autoload.php');

use App\Task;

$task = new Task;

try {
	$task->inCompleteTask($_GET['id']);

	header('Location: /developerTask?id='.$_GET['id']);
} catch (Exception $e) {
	echo $e;
}