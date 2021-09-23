<?php
include "dbcon.php";
$a=$_POST['e_name'];
$b=$_POST['e_age'];
$c=$_POST['gender'];
$d=$_POST['e_phone'];
$e=$_POST['e_department'];
$f=$_POST['e_email'];
$g=$_POST['e_password'];
$h=$_POST['role'];
$data="insert into employee(e_name,e_age,gender,e_phone,e_department,e_email,e_password,role) value('$a','$b','$c','$d','$e','$f','$g','$h' )";
$query=mysqli_query($con,$data);

if ($query) {
	echo "<script> alert('data inserted')</script>";
}
else{
	echo "<script> alert('data not inserted')</script>";
}


?>