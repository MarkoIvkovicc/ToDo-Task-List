<?php

session_start();

use App\User;
use App\Policy\UserPolicy;

$logedUser = new User;
$policy = new UserPolicy;

require 'views/Layouts/Header.php';
require 'views/pending.view.php';
require 'views/Layouts/Footer.php';
