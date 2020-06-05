<?php

session_start();

use App\User;

if (!$_SESSION['user_id']) {


	$user = new User;

	$userData = [
		'name' => htmlspecialchars($_POST['name']),
		'email' => htmlspecialchars($_POST['email']),
		'password' => md5($_POST['password']),
		'role' => 'pending',
		'created_at' => date('Y-m-d H:i:s')
	];
	$user->create($userData);
	$_SESSION['message'] = 'Your account is registered';
	header('Location:/');
} else {
	header('Location: /');
}
