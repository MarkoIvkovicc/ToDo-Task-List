<?php 

require('vendor/autoload.php');

use App\Note;

$note = new Note;
$taskId = array_shift($note->noteById($_GET['id']))->task_id;

try {
	$note->delete($_GET['id']);

	header('Location: /showTask?id=' . $taskId);
} catch(Exception $e) {
	echo $e;
}