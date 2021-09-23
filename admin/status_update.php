<?php 
include "../dbcon.php";
if(isset($_POST['approved'])){
	 $status="approved";
	 $comment=$_POST['comment'];
     $id=$_POST['a_id'];
     $data="update apply_leave set status='$status',comment='$comment' where a_id=$id ";
     mysqli_query($con,$data);
     
}



if(isset($_POST['rejected'])){
	$status="rejected";
	$comment=$_POST['comment'];
    $a_id=$_POST['id'];
    $data="update apply_leave set status='$status',comment='$comment' where id=$a_id ";
    mysqli_query($con,$data);
   
}

?>