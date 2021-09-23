<?php 
include "dbcon.php";
session_start();
$a=$_POST['e_email'];
$b=$_POST['e_password'];
 $query="select * from employee where e_email='$a' && e_password='$b' ";
 $data=mysqli_query($con,$query);
echo $total=mysqli_num_rows($data);
$result=mysqli_fetch_array($data);
if($total==1){
	$role=$result['role'];
	// print_r($role);
	if($role=='Admin'){
        $_SESSION['admin']=$result['e_email'];
        $_SESSION['admin_id']=$result['id'];
        $_SESSION['admin_name']=$result['e_name'];
        
		header('location:admin/dashboard.php');
	}
	elseif($role=='Employee'){
		$_SESSION['emp_id']=$result['id'];
		$_SESSION['emp_name']=$result['e_name'];
		header('location:employee/dashboard_emp.php');
	}
	
	
	
}
else {

	header('location:index.php');
}
?>
