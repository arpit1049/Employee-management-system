<?php
include "../dbcon.php";
$a=$_POST['employee_id'];
$b=$_POST['task_id'];
$c=$_POST['reply'];
// echo $a,$b,$c;
$data="insert into reply(employee_id,task_id,reply) value('$a','$b','$c')";
mysqli_query($con,$data);
header('location:assigned_task.php');

?>