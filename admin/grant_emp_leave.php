
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
@media(max-width: 900px){
	.box h2{
		display: block;
		font-size: 20px;
	}

}
	@media(max-width: 700px){
	.box h2{
		display: block;
		font-size: 15px;
	}
	.card-body tr{
		display: block;
		width: 350px;
	}
}
	@media(max-width: 500px){
	.box h2{
		display: block;
		font-size: 15px;
	}
}
	
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
				<h2 style="line-height: 150px;"><center>assign leave to grant</center></h2>
			</div>	
			<div class="card-body">
				<table class="table table-striped table-bordered">
					<tr class="bg-warning">
						<th>id</th>
						<th>emp_id</th>
						<th>leave_from</th>
						<th>leave_to</th>
						<th>earning_leave</th>
						<th >medical_leave</th>
						<th>casual_leave</th>
						<th>status</th>
					</tr>
					<?php
					include "../dbcon.php";
					$id=$_GET['id'];
					$data="select * from apply_leave where id=$id" ;
					$query=mysqli_query($con,$data);
					while ($result=mysqli_fetch_array($query)) {
						
					 ?>
					 <tr>
					 	<td><?php echo $result['id'] ?></td>
					 	<td><?php echo $result['employee_id'] ?></td>
					 	<td><?php echo $result['leave_from'] ?></td>
					 	<td><?php echo $result['leave_to'] ?></td>
					 	<td><?php echo $result['earning_leave'] ?></td>
					 	<td><?php echo $result['medical_leave'] ?></td>
					 	<td><?php echo $result['casual_leave'] ?></td>
					 	<td><?php echo $result['status'] ?></td>
					 	
					 </tr>
					<?php } ?>
				</table>
				<br>
					<form action="all_assign_leave.php">
						<div class="form-group">
							<textarea rows="8" class="form-control" style="width: 100%;" placeholder="reply for leave"></textarea>
						</div>
						<br><br><br><br>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-sm btn-outline-danger btn-block form-control"> submit</button>
						</div>
					</form>
					

			</div>
				
	

		</div>
	</section>

</body>
</html>