<?php  
 include_once'dbh.inc.php';
 
$id=$_POST['ID'];
$name=$_POST['Name'];
$gender=$_POST['Gender'];
$age=$_POST['Age'];
$nationality=$_POST['Nationality'];
$contact=$_POST['Contact'];
$college=$_POST['college'];
$program=$_POST['programs'];
$year=$_POST['yearlevel'];




$sql="INSERT INTO student (id,name,gender,age,nationality,contact,college,program,yearlevel) VALUES ('$id','$name','$gender','$age','$nationality','$contact','$college','$program','$year');";

mysqli_query($conn,$sql);
header("location: ../Add student.php?signup=success");