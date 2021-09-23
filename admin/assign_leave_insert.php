<?php
include "../dbcon.php";
$a=$_POST['valid_form'];
$b=$_POST['valid_to'];
$c=$_POST['earning_leave'];
$d=$_POST['medical_leave'];
$e=$_POST['casual_leave'];
$f=$_POST['assign'];
$g=$_POST['employee_id'];
// 
foreach ($g as $employee) {
	$data="insert into assign_leave(valid_form,valid_to,earning_leave,medical_leave,casual_leave,assign,employee_id) value('$a','$b','$c','$d','$e','$f','$employee' )";
	$query=mysqli_query($con,$data);
	header('location:assign_leave.php');
}
?>