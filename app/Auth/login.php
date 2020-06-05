<?php

session_start();

use App\User;

$policy = new App\Policy\UserPolicy;
$user = new User;

$logedUser = $user->find([
	'emailname' => $_POST['emailname'],
	'password' => hash(md5, $_POST['password']),
]);

$logedUser = $logedUser[0];

if($logedUser)
{
	$_SESSION['user_id'] = $logedUser->id;
    $_SESSION['user_name'] = $logedUser->name;
    $_SESSION['role'] = $logedUser->role;

	echo ("<script LANGUAGE='JavaScript'>
    	alert('Successfuly logged in.');
    </script>");

    if($policy->isPending($logedUser)){
        header('Location: /pending');
    }
     if ($policy->isDeveloper($logedUser)) {
        header('Location: /developer');
    }
    if ($policy->isAdmin($logedUser)) {
        header('Location: /admin');
    }
} else {
    echo ("<script LANGUAGE='JavaScript'>
    		window.location.href='/loginForm';
        	alert('Wrong credentials, please try again.');
        </script>"
    );
}

