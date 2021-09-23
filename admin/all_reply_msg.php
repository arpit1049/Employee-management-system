	
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
.header-body{
	width: 95%;
	margin: 0 auto;
	height: 95%;
	/*border: 2px red solid;*/
	/*background-color: lightgrey;*/
}
.reply{
	width: 98%;
	height: 20%;
	border: 2px ;
	margin: 0 auto;
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 20px;
	background-color: white;

}
.reply h2{
	font-family: 'Playfair Display', serif;
	line-height: 4;
}
.display-task{
	width: 94%;
	height: 25%;
	/*border: 2px double red;*/
	margin: 0 auto;
	margin-bottom: 20px;
	background-color: white;
	/*text-align: center;*/
}
.display-task p{
	font-size: 20px;
	text-transform: uppercase;
	line-height: 4;
	padding-left: 10px;
	margin-bottom: 0px;

}
.display-task h4{
	font-size: 15px;
	padding-left: 10px;
}
.textarea{
	width: 94%;
	height: 40%;
	/*border: 2px double red;*/
	margin: 0 auto;
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
			<div class="header-body">
				<div class="reply">
					<h2 >reply from employee</h2>
				</div>
				<div class="display-task">
					
					<tr>
					<th><p>		
					assigned task by you
					</p>
					</th>
					<?php
					include "../dbcon.php";
					// error_reporting(0);
					$a=$_GET['id'];
					$data="select * from task where task_id=$a ";
					$dataa="select * from reply where task_id=$a ";
					$query=mysqli_query($con,$data); 
					$queryy=mysqli_query($con,$dataa);
					$result=mysqli_fetch_array($query);
					$resultt=mysqli_fetch_array($queryy);
					 ?>
					 </tr>
					 <tr>
					 	<td><h4><?php echo $result['task']; ?></h4></td>
					 </tr>
					 
				</div>
				<div class="textarea">
					<form method="post" action="">
						<input type="text" name="employee_id" value="<?php echo $result['employee_id'] ?>">
						<input type="text" name="task_id" value="<?php echo $result['task_id'] ?>">
						<div>
						<textarea placeholder="" rows="7" style="width: 100%; " name="reply" class="form-control" ><?php echo $resultt['reply']  ?></textarea>
						</div>
						<br>
						<div class="form-group">
						<a href="task_display.php">
						<button type="button" class="btn btn-sm btn-success btn-block form-control" name="submit">Done</button>
						</a>
						</div>
					</form>
				</div>
			</div>
	
	

		</div>
	</section>

</body>
</html>