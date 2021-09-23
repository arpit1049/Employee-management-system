<?php   
include "../dbcon.php";
$a=$_POST['employee_id'];
$b=$_POST['leave_from'];
$c=$_POST['leave_to'];
$d=$_POST['earning_leave'];
$e=$_POST['medical_leave'];
$f=$_POST['casual_leave'];
$status="pending";

$data="insert into apply_leave(employee_id,leave_from,leave_to,earning_leave,medical_leave,casual_leave,status) value('$a','$b','$c','$d','$e','$f','$status')";
mysqli_query($con,$data);
header('location:assigned_leave.php');


?>