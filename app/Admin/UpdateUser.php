<?php

require('vendor/autoload.php');

use App\User;
use App\Policy\UserPolicy;

$logedUser = new User;
$user = new User;
$logedUser = $logedUser->show($_SESSION['user_id']);



if (
    !empty($_POST['userName']) &&
    !empty($_POST['userEmail']) &&
    !empty($_POST['userRole'])
) {
    $userData = [
        'id' => $_GET['id'],
        'name' => htmlspecialchars($_POST['userName']),
        'email' => htmlspecialchars($_POST['userEmail']),
        'role' => htmlspecialchars($_POST['userRole']),
    ];
  
    $user->update($userData);

    header("Location: /showUser?id=".$_GET['id']);
} else {
    header("Location: /updateUser?id=".$_GET['id']);
}