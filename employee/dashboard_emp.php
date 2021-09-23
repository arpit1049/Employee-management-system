
<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<style >
		.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 250px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.header{
	background: url();
    height: 100%;
    height: 758px;
    /*border: 2px solid;*/
    margin-left: 255px;
}
.box{
	height: 150px;
	border: 2px ;
	/*background-color: white;*/
	

}
.big-box{
	height: 450px;
/*	border: 2px solid;
*/	margin-top: 2%;

}
th{
	text-transform: uppercase;
	font-size: 16px;
}
td{
	font-size: 13px;
}
h2{
        font-family: 'Playfair Display', serif;
    }
body{
	background: linear-gradient(to right,white,lightgrey);
}     
	</style>
	<title></title>
</head>
<body>
	<section>
		<!-- sidebaar stsrt -->
		<div class="sidenav bg-dark">
			<img src="../image/chunni1.jpg">
			<br><br>
           <a href="task.php">TASK</a>
           <a href="../registration.php">REGISTRATION</a>
           <a href="#">LEAVE</a>           
           <a href="../logout.php">LOGOUT</a>
        </div>
   
		<!-- side bar end -->
	</section>
	<section>
		<div class="header card-body ">
			<div class="box shadow bg-light">
				<h2 style="line-height: 150px;"><center> Welcome Employee</center></h2>
			</div>
			<div class="big-box bg-light shadow">
				<div class="card-body">
			<table class="table table-bordered table-striped">
				<h2 class="text-center">EMPLOYEE DATA</h2>
				<a class="btn btn-info" style="margin-left: 800px; margin-top:-70px;" href="assigned_task.php">ALL ASSIGNED TASK</a>
				<a class="btn btn-info" style="margin-left: 100px; margin-top:-117px;" href="assigned_LEAVE.php">ALL ASSIGNED LEAVE</a>
				<br>
				<thead>
				<tr class="bg-info">
					<th>id</th>
					<th>EMPLOYEE NAME</th>
					<th>EMPLOYEE AGE</th>
					<th>GENDER</th>
					<th>PHONE NO</th>
					<th>DEPARTMENT</th>
					<th>EMPLOYEE EMAIL</th>
					<th>PASSWORD</th>
					<th>ROLE</th>
					
				</tr>
				</thead>

                
				<?php
				include "../dbcon.php";
				$a=$_SESSION['emp_id'];
				$data="select * from employee where id=$a ";
				$query=mysqli_query($con,$data);
				$result=mysqli_fetch_array($query);
					
				
				?>
				<form><input type="hidden" name="" value="<?php echo $_SESSION['emp_id'] ?>"></form>
				
				<tr>
					
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['e_name']; ?></td>
					<td><?php echo $result['e_age']; ?></td>
					<td><?php echo $result['gender']; ?></td>
					<td><?php echo $result['e_phone']; ?></td>
					<td><?php echo $result['e_department']; ?></td>
					<td><?php echo $result['e_email']; ?></td>
					<td><?php echo $result['e_password']; ?></td>
					<td><?php echo $result['role']; ?></td>
					
				</tr>
			
			
			</table>
			</div>
			</div>
		</div>
	</section>

</body>
</html>