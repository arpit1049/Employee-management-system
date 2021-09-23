
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
	
       <div class="card table-responsive">
    <div class="heading">
      <center><h2 class="text-danger">Leave</h2></center>
    </div>
  <table class="table  table-striped table-boedered">
    <tr class="bg-info">
      <th>sr no.</th>
      <th>leave from</th>
      <th>leave to</th>
      <th>earning leave</th>
      <th>medical leave</th>
      <th>casual leave</th>
      <th>emp_name</th>
      <th>status</th>
      <th>comment</th>
      <th></th>
    </tr>
    <?php 
    include "../dbcon.php";
    $i=1;
    $data="select * from apply_leave al join employee el on al.employee_id=el.id";
    $query=mysqli_query($con,$data);
    while($result=mysqli_fetch_array($query)){

    ?>
    <tr>
      <td><?php echo $i++;?></td>
      <td><?php echo $result['leave_from']?></td>
      <td><?php echo $result['leave_to']?></td>
      <td><?php echo $result['earning_leave']?></td>
      <td><?php echo $result['medical_leave']?></td>
      <td><?php echo $result['casual_leave']?></td>
      <td><?php echo $result['e_name']?></td>
      <td><?php echo $result['status']?></td>
      <td>
        <form method="post" action="status_update.php">
        <textarea name="comment" class="form-control"></textarea>
                   
      </td>
      <input type="hidden" name="a_id" value="<?php echo $result['a_id']?>">
      <td>
        <button class="btn btn-info" name="approved">Approved</button>
        <button  class="btn btn-danger" name="rejected">Rejected</button>
      </form>
      </td>

    </tr>
    <?php 
        }
    ?>
  </table>
</div>  
    
      
		</div>
	</section>

</body>
</html>