<?php

require('vendor/autoload.php');

use App\User;

if (
    !empty($_POST['name']) &&
    !empty($_POST['email']) &&
    !empty($_POST['password'])
) {
    $userData = [
        'name' => htmlspecialchars($_POST['name']),
        'email' => htmlspecialchars($_POST['email']),
        'password' => htmlspecialchars($_POST['password']),
        'role' => !empty($_POST['role']) ? $_POST['role'] : 'pending',
        'created_at' => date('Y-m-d H:i:s')
    ];
    $user = new User;
    $user->create($userData);

    header('Location: /users');
} else {
    header('Location: /createUser');
}