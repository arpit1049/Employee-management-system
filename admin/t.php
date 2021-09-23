
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

	<div class="container-fluid">
		<div class="row">
		<form action="task_insert.php" method="post">
			<input type="text" name="assign_by" value="<?php echo $_SESSION['admin_id'] ?>">
		<div class="col-md-8 " style="float:right;" >
				<textarea rows="20" cols="90" placeholder="Assign Task Here"></textarea><br>
                <input class="btn btn-info" type="submit" name="" value="submit">
			</div>	
				
			<div class="col-md-4" style="float:;"  >
            <?php
				include "../dbcon.php";
				
			
				$data="select * from employee";
				$b=mysqli_query($con,$data);
				while ($result=mysqli_fetch_array($b)) {
					
				
				?>

				<p style="font-size: 20px;"><?php echo $result['e_name']; ?>
                 <input type="checkbox" name="name"></p>
				<?php 
	        	}
			?>
			</div>
			

			
		
		 </form>	
		</div>
		
		<div>
	

		</div>
	</section>

</body>
</html>