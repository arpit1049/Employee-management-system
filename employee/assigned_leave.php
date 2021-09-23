
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

}
.big-box{
	margin-top: 20px;
	background-color: white;
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
				<h2 style="line-height: 150px;"><center> THESE ARE YOUR ASSIGNED LEAVE</center></h2>
			</div>
			<div class="big-box">
			<table class="table table-bordered table-striped">
				<tr class="bg-warning">
					<th>id</th>
					<th>emp id</th>
					<th>valid from</th>
					
					<th>valid to</th>
					<th>earning leave</th>
					<th>medical leave</th>
					<th>casual leave</th>
					<th>assign by</th>
					

				</tr>
				<?php
				include "../dbcon.php";
				$a=$_SESSION['emp_id'];
				$data="select * from assign_leave where employee_id=$a";
				$query=mysqli_query($con,$data);
				while ($result=mysqli_fetch_array($query)) {
				
				
				
				?>
				
				
				 <tr>
				 	<td><?php echo $result['id']; ?></td>
				 	<td><?php echo $result['employee_id']; ?></td>
				 	<td><?php echo $result['valid_form']; ?></td>
				 	<td><?php echo $result['valid_to']; ?></td>
				 	<td><?php echo $result['earning_leave']; ?></td>
				 	<td><?php echo $result['medical_leave']; ?></td>
				 	<td><?php echo $result['casual_leave']; ?></td>
				 	<td><?php echo $result['assign']; ?></td>
				 	
				 	
				 </tr>
				<?php
			}
				?>
			</table>
			</div>
			<div class="">
		 		<form method="post" action="ask_leave_insert.php">
							<?php
							$a=$_SESSION['emp_id'];
							$data="select * from assign_leave where employee_id=$a";
							$query=mysqli_query($con,$data);
							while ($result=mysqli_fetch_array($query)) {
								# code...
							
							
							
							
							?>
							<input type="hidden" name="employee_id" value="<?php echo$result['employee_id']?>";>
							<div class="form-group">
							<label>leave from</label>
							<input type="date" name="leave_from" class="form-control">
							</div>

							<div class="form-group">
							<label>leave to</label>
							<input type="date" name="leave_to" class="form-control">
							</div>

							<div class="form-group">
							<label>earning leave</label>
							<input type="text" name="earning_leave" class="form-control">
							</div>

							<div class="form-group">
							<label>medical leave</label>
							<input type="text" name="medical_leave" class="form-control">
							</div>

							<div class="form-group">
							<label>casual leave</label>
							<input type="text" name="casual_leave" class="form-control">
							</div>
							<br>
							<button type="submit" class="btn btn-sm btn-outline-danger btn-block form-control">submit</button>
				</form>
			<?php }?>
				</div>

	    </div>
	</section>
	<section>
		
					
	</section>

</body>
</html>