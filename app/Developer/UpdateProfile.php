<?php

require('vendor/autoload.php');

use App\User;

if (
    !empty($_POST['userName']) &&
    !empty($_POST['userEmail'])
) {
    $userData = [
        'id' => $_GET['id'],
        'name' => htmlspecialchars($_POST['userName']),
        'email' => htmlspecialchars($_POST['userEmail']),
        'role' => 'developer',
    ];
    $user = new User;
    $user->update($userData);

    header("Location: /profile?id=".$_GET['id']);
} else {
    header("Location: /updateProfile?id=".$_GET['id']);
}