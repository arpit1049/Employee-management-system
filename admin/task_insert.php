s<?php
include "../dbcon.php";
$a=$_POST['employee_id'];
// $d=$_POST['e_name'];
// $e=implode(',',$d);
$b=$_POST['assign_by'];
$c=$_POST['task'];
echo $a,$b,$c;  
foreach ($a as $employee) {
	$data="insert into task(employee_id,assign_by,task) value('$employee','$b','$c')";
	mysqli_query($con,$data);
	header('location:task_display.php');
}
?>