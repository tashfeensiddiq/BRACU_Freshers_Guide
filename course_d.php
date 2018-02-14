<html>
<head>
	<meta charset="utf-8"/> 
	 <!--<title> This is my firstst webpage </title>-->
</head>



<body background="back.png">
 <h2>WELCOME STUDENTS!!!!<h2/> 
 
 <form action="" method="post" ><br/>
 search:<input type="text" name="search"/><br/>
 <!--password:<input type="password" name="password"/><br/>-->
 <input type="submit" name="submit" value="Search">
 </form>
<?php

if(isset($_POST['submit'])){
  $search = $_POST['search'];
  //$password = $_POST['password'];
 
	 $host ="localhost"; 
	 $user ="root";
	 $pas = "";
	 $db = "final_project";
	 
	 $con = mysqli_connect($host,$user,$pas,$db);
	 //mysql_select_db($db,$con);
	 $sql= "SELECT * FROM course_book inner join course_link on course_book.course_id=course_link.course join date on course_link.course=date.course_id join faculty on date.course_id=faculty.taken_course WHERE course_book.course_id like '$search%';"; 
     $result = mysqli_query($con,$sql);
	 echo "<table border='1'>
     <tr>
	   <th><h2>course_id</h2></th>
	   <th><h2>recommended_book</h2></th>
	   <th><h2>links</h2></th>
	   <th><h2>exam_date</h2></th>
	   <th><h2>faculty name</h2></th>
	   
	   <th><h2>initial</h2></th>
	   <th><h2>room_no</h2></th>
	   <th><h2>email</h2></th>
	   
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['rec_book']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['links']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['exam_date']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['name']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['initial']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['room']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['email']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";
}
?>



</body>
</html>