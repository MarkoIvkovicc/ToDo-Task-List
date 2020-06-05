<?php 

require('vendor/autoload.php');

use App\Task;

$task = new Task; 

try {
	$task->delete($_GET['id']);

	header('Location: /tasks');
} catch(Exception $e) {
	echo $e;
}