<?php 

session_start();

require('vendor/autoload.php');

use App\User;
use App\Task;
use App\Policy\UserPolicy;


$logedUser = new User;
$user = new User; 
$policy = new UserPolicy;

$logedUser = $logedUser->show($_SESSION['user_id']);
$currentUser = $user->show($_GET['id']);
$tasks = $currentUser->tasks($currentUser->id);


require 'views/Layouts/Header.php';
require 'views/admin/show-user.view.php';
require 'views/Layouts/Footer.php';
