<?php

 
require_once('function.php');
session_start();

if(session_destroy())
	redirect('signin.php');
	exit;
?>