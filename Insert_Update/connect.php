<?php

$host="localhost";
$user="root";
$password="";
$db="tutorials";
$con=mysqli_connect($host,$user,$password,$db);





if($db){
	echo 'success';
}else{
	echo 'ERROR :',mysql_error();
}
?>