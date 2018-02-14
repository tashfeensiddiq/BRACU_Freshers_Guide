<?php

$host="localhost";
$user="root";
$password="";
$db="final_project";
$con=mysqli_connect($host,$user,$password,$db);

if($db){
	echo 'success';
}else{
	echo 'ERROR :',mysql_error();
}
?>