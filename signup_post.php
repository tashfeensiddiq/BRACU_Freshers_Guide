<?php

 
require 'function.php';
session_start();
dbconnect();

if (is_user())
	redirect('index.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (empty($_POST['username']) or empty($_POST['password']))
		return redirect('signup.php?error=' . urlencode('All fields are required!'));

	if (!valid_username($_POST['username']) AND !valid_password($_POST['password']) )
		return redirect('signup.php?error=' . urlencode('Please fill username and password correctly!'));

	if (insert_new_user($_POST['username'], $_POST['password'])){
		redirect('signup.php?success=' . urlencode('Signup successful!'));
	}
	else {
		redirect('signup.php?error=' . urlencode('This username is already taken!'));
	}
}

?>