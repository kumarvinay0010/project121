<?php
$servername="localhost";
$username="root";
$password="";
$database="vinay";
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
die("connection failed:".mysqli_connect_error());
 }
 else 
 { echo "success";
 }
 $q = "insert into sample(id,name) VALUES (1,'abc')";
 if (mysqli_query($conn,$q)){
	 echo "record entere";
 }
 else{
	 echo "error";
 }
?>