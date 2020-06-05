<?php 

require('vendor/autoload.php');

use App\User;

$user = new User; 

try {
	$currentUser = $user->delete($_GET['id']);

	header('Location: /users');
} catch(Exception $e) {
	echo $e;
}