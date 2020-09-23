<?php

session_start();

//Homepage //TO DO: Homepage
$router->get('', 'app/Homepage/Homepage.php');
$router->get('404', 'app/Homepage/NoPage.php');

//Login
if (isset($_SESSION)) {
	$router->get('loginForm', 'app/Auth/loginForm.php');
	$router->post('login', 'app/Auth/login.php');

	$router->get('registerForm', 'app/Auth/registerForm.php');
	$router->post('register', 'app/Auth/register.php');
	$router->get('pending', 'app/Auth/pending.php');

	$router->post('createNoteBack', 'app/Developer/CreateNote.php');
	$router->get('updateNote', 'app/Developer/UpdateNoteForm.php');
	$router->post('updateNoteBack', 'app/Developer/UpdateNote.php');
	$router->post('deleteNote', 'app/Developer/DeleteNote.php');
}

$router->get('logout', 'app/Auth/logout.php');

//Admin Resources Section
	if ($_SESSION['role'] == 'admin') {
		//Admin Home Page
		$router->get('admin', 'app/Admin/AdminDashboard.php');
		$router->get('profile', 'app/Developer/Profile.php');
		$router->get('updateProfile', 'app/Developer/UpdateProfileForm.php');

		$router->post('updateProfileBack', 'app/Developer/UpdateProfile.php');
		$router->post('deleteProfile', 'app/Developer/DeleteProfile.php');
		//Admin-users CRUD section
		$router->get('users', 'app/Admin/IndexUser.php');
		$router->get('showUser', 'app/Admin/ShowUser.php');
		$router->get('createUser', 'views/admin/create-user.view.php');
		$router->get('updateUser', 'app/Admin/UpdateUserForm.php');


		$router->post('createUserBack', 'app/Admin/CreateUser.php');
		$router->post('updateUserBack', 'app/Admin/UpdateUser.php');
		$router->post('deleteUser', 'app/Admin/DeleteUser.php');

		//Admin-tasks CRUD section
		$router->get('tasks', 'app/Admin/IndexTask.php');
		$router->get('showTask', 'app/Admin/ShowTask.php');
		$router->get('createTask', 'app/Admin/CreateTaskForm.php');
		$router->get('updateTask', 'app/Admin/UpdateTaskForm.php');

		$router->post('createTaskBack', 'app/Admin/CreateTask.php');
		$router->post('updateTaskBack', 'app/Admin/UpdateTask.php');
		$router->post('deleteTask', 'app/Admin/DeleteTask.php');
	} 
	 
//User Resource Section
	if ($_SESSION['role'] == 'developer') {
		//Developers Home Page
		$router->get('developer', 'app/Developer/DeveloperDashboard.php');

		//Developers Profile
		$router->get('profile', 'app/Developer/Profile.php');
		$router->get('updateProfile', 'app/Developer/UpdateProfileForm.php');

		$router->post('updateProfileBack', 'app/Developer/UpdateProfile.php');
		$router->post('deleteProfile', 'app/Developer/DeleteProfile.php');

		//Developers Task
		$router->get('developerTask', 'app/Developer/ShowTask.php');
		
		$router->post('completeTask', 'app/Developer/CompleteTask.php');
		$router->post('inCompleteTask', 'app/Developer/InCompleteTask.php');
	} 	