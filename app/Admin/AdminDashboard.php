<?php

session_start();

use App\User;
use App\Policy\UserPolicy;

if (!empty($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    $logedUser = new User;
    $newUser = new User;
    $policy = new UserPolicy;

    $newUsers = $newUser->pendingUsers();
    $logedUser = $logedUser->show($userId);
    
    if ($policy->isAdmin($logedUser)) {
        require "views/Layouts/Header.php";
        require 'views/admin/admin-dashboard.view.php';
        require "views/Layouts/Footer.php";
    } else if ($policy->isDeveloper($user)) {
        header('Location: /developer');
    }
}
