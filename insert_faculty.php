<!DOCTYPE>
<html>
<body bgcolor="skyblue">
<form action="insert_faculty.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" broder="2" bgcolor="orange">
<tr>
<td align="center" colspan="8"><h2>Insert Here</h2></td>
</tr>
<tr>
<td align="right"><b>Faculty Name:</b> </td>
<td><input type="text" name="name" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Faculty Initial:</b> </td>
<td><input type="text" name="initial" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Faculty Room No:</b> </td>
<td><input type="text" name="room" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Faculty Email ID:</b> </td>
<td><input type="text" name="email" size="60" required /></td>
</tr>




<tr align="center">
<td colspan="8"><input type="submit" name="submit" value="Insert" /></td>
</tr>
</table>
</form>

<?php
$host="localhost";
$user="root";
$password="";
$db="final_project";
$con=mysqli_connect($host,$user,$password,$db);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $initial=$_POST['initial'];

$room=$_POST['room'];

$email=$_POST['email'];


 $sql="INSERT INTO `faculty`(`name`, `initial`,`room`, `email`) VALUES ('$name','$initial', '$room', '$email');";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>




