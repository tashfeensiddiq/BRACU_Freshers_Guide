
<!DOCTYPE>
<html>
<head>
<title>Faculty Details</title>



<body background="back.png">
<h2>WELCOME STUDENTS<h2/>
<h3>Faculty details joining with lab project based course details---</h3>

<?php
$host="localhost";
$user="root";
$password="";
$db="final_project";
$con=mysqli_connect($host,$user,$password,$db);


 //mysqli_select_db($db,$con);
 //echo 'database connected';
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql= "SELECT * FROM lab  inner join faculty WHERE lab.course_id=faculty.taken_course; "; 
     $result = mysqli_query($con,$sql);
	 echo "<table border='1'>
     <tr>
	   <th><h2>course_id</h2></th>
	   <th><h2>lab</h2></th>
	   <th><h2>faculty name</h2></th>
	   <th><h2>inital</h2></th>
	   <th><h2>room</h2></th>
	   <th><h2>email</h2></th>
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['lab']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['name']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['initial']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['room']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['email']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['exam_date']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";













?>
 
</body>
</html>