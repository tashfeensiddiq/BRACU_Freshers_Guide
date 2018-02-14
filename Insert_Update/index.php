<?php include('connect.php');
//$sql=mysqli_query("SELECT * FROM student_tbl");
$epr='';
$msg='';
if(isset($_GET['epr']))
$epr=$_GET['epr'];
if($epr=='save'){
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$adr=$_POST['adr'];
	$a_sql=mysqli_query($con, "INSERT INTO `student_tbl`(`name`,`sex`,`adr`) values ('$name', '$sex', '$adr')" );
	if($a_sql){
		header("location:index.php");
	}
	
	
}


?>

<html>
<head> 
</head>
<body>

<h2 align ="center">Add New Student</h2>
<form action="#" method="POST">
<table align="center">
<tr>
<td>Name: </td>
<td><Input type='text' name='txtname' /></td>
</tr>
<td>Sex: </td>
<td><Input type='text' name='txtsex' /></td>
</tr>

<tr>
<td>Address: </td>
<td><Input type='text' name='txtadr' /></td>
</tr>

<tr>
<td></td>
<td><Input type='submit' name='submit' /></td>
</tr>



</table>


</form>
<h2 align="center">Student List</h2>
<table align="center" border="1" cellspacing="0" cellpadding="0" width="700">
<thread>
<th>No</th>>
<th>Name</th>>
<th>Sex</th>>
<th>Adr</th>>
<th>Action</th>>

<tr>
</thread>>
<?php include('connect.php');
$sql=mysqli_query($con, "SELECT * FROM student_tbl");
$i=1;
while($row=mysqli_fetch_array($sql)){ 
echo "<tr>
<td>",$i,"</td>
<td>",$row['name'],"</td>
<td>",$row['sex'],"</td>
<td>",$row['adr'],"</td>
<td>",$i,"</td>

<td align='center'>
<a href='index.php?epr=delete&id=",$row['student_id'],"'>DELETE</a> |
<a href='#'<UPDATE</a>
</td>

</tr>";
$i++;
}
?>

</table>
<?php //echo $msg;?>
</body>>
</html>