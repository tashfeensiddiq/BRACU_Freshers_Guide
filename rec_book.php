<html>
<head>
	<meta charset="utf-8"/> 
	 <!--<title> This is my firstst webpage </title>-->
</head>


<body>
<body background="back.png">
<h2>WELCOME STUDENTS<h2/>

 
 
 <form action="" method="post" ><br/>
 put course id:<input type="text" name="search"/><br/>
 <!--password:<input type="password" name="password"/><br/>-->
 <input type="submit" name="submit" value="search">
  </form>
<?php
if(isset($_POST['search'])){
  $search = $_POST['search'];
  //$password = $_POST['password'];
 
	 $host ="localhost"; 
	 $user ="root";
	 $pas = "";
	 $db = "final_project";
	 
	 $con = mysqli_connect($host,$user,$pas,$db);
	 //mysql_select_db($db,$con);
	 
     if($search=='all'){
     	$sql_1= "SELECT * FROM `course_book` ;";
     	$result = mysqli_query($con,$sql_1); 
     	//echo'hi';
     	echo "<table border='1'>
     <tr>
	   <th><h2>course_id</h2></th>
	   <th><h2>recommended book</h2></th>
	   <!--<th><h2>course</h2></th>-->
	   <!--<th><h2>links</h2></th>-->
	   <!--<th><h2>course_id</h2></th>-->
	   <!--<th><h2>exam_date</h2></th>-->
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['rec_book']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['course']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['links']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['exam_date']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";
     }else{
     	$sql= "SELECT * FROM `course_book` where course_id='$search';"; 
     $result = mysqli_query($con,$sql);
     	echo "<table border='1'>
     <tr>
	   <th><h2>course_id</h2></th>
	   <th><h2>recommended book</h2></th>
	   <!--<th><h2>course</h2></th>-->
	   <!--<th><h2>links</h2></th>-->
	   <!--<th><h2>course_id</h2></th>-->
	   <!--<th><h2>exam_date</h2></th>-->
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['rec_book']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['course']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['links']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['exam_date']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";}
	 
}

?>
</body>
</html>