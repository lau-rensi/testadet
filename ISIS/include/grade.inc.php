<?php  
 include_once'dbh.inc.php';
$id=$_POST['ID'];
$cap=$_POST['capstone'];
$math=$_POST['math'];
$science=$_POST['science'];

$sql="INSERT INTO grade (id,Capstone,Math,Science) VALUES ('$id','$cap','$math','$science');";

mysqli_query($conn,$sql);
header("location: ../Add grade.php?signup=success");