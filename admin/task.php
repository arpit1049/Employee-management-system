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
    /*height: 100%;*/
    height: 695px;
   /* border: 5px solid;*/
    margin-left: 255px;
}
.header-inside{
	height: 630px;

	width: 85%;
	margin:auto;
	/*border: 2px solid;*/
	margin-top: 3%; 
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
		<!-- assign task -->
		<div class="header">
			<div class="header-inside shadow bg-light">
				<p style="margin-top: 8px;margin-left: 8px;"><b>Assign Task</b></p>
				
				<hr>
				<div class="col-md-1">
					<a style="float:left; margin-left: 3px;" class="btn btn-lg btn-outline-info" href="task_display.php">All Assign Task</a>
				</div>
				<div class="row">
					<form action="task_insert.php" method="POST">
						<input type="text" name="" value="<?php echo $_SESSION['admin_id']; ?>">
						<input type="text" name="assign_by" value="<?php echo $_SESSION['admin_name']; ?>">

					<div class="col-md-4 " style="float:right;">
						<?php
						include "../dbcon.php";
						$data="select * from employee where role='Employee' order by id desc";
						$query=mysqli_query($con,$data);
						while ($result=mysqli_fetch_array($query)) {

						?>
						<div class="form-group">
						<label><?php echo $result['e_name']; ?></label>
						<input type="checkbox" name="employee_id[]" value="<?php echo $result['id'] ?>" >
						<br>
						</div>
						<?php
					    }
					    ?>
					</div>
					

					<div class="col-md-7" style="margin-left:10px; ">
						<div class="form-group">
						<textarea rows="20" cols="80" class="form-control "  placeholder="Assign Text Here" name="task"></textarea><br>
						<button type="submit" class="btn btn-primary btn-sm btn-block  form-control">submit</button>
						</div>
					</div>


					</form>
				</div>
			</div>
		</div>
		<!-- assign task haer -->
	</section>

</body>
</html>