<!DOCTYPE>
<html>
<body bgcolor="skyblue">
<form action="update_pre.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" broder="2" bgcolor="orange">
<tr>
<td align="center" colspan="8"><h2>Update Here</h2></td>
</tr>
<tr>
<td align="right"><b>Course ID:</b> </td>
<td><input type="text" name="course_id" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Pre Reqruisite:</b> </td>
<td><input type="text" name="preR" size="60" required /></td>
</tr>

<tr align="center">
<td colspan="8"><input type="submit" name="submit" value="Update" /></td>
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
 $course_id=$_POST['course_id'];
 $preR=$_POST['preR'];
 $sql="UPDATE `pre` SET `preR`='$preR' WHERE `course_id`='$course_id';";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>




