<?php

require('vendor/autoload.php');

use App\User;

$user = new User;

try {
	$currentUser = $user->delete($_GET['id']);
	header('Location: /logout');
} catch (Exception $e) {
	echo $e;
}
