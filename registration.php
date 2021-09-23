<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1,
 shrink-to-fit=no">
 

 <style type="">
 	body{
 		background-color: #eaebed;
 		background: url();
 	}
 	.form-group input{
        border-radius: 25px;
        background: linear-gradient(to right,white,lightgrey);
    }
    .br{
      border-radius: 25px;
        background: linear-gradient(to right,white,lightgrey);  
    }
    
    .div-size{
    	height: 720px;
    	
    }
    .div-size img{
    	height: 100%;
    	width: 100%;
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
	   <div class="container fluid">
	   	<div class="container shadow">
	   		<div class="row">
	   			<div><center><h2>Registration Form</h2></center></div>
	   			<div class="col-md-6  ">
	   				<div class="div-size">
	   				<img  src="image/background-1.jpg">
	   				</div>
	   			</div>
	   			<div class="col-md-6 ">
	   				<form class="form " action="registration_insert.php" method="POST">
                            <div class="form-group">
                                <label>Employee name:</label>
                                <input class="form-control" type="text" name="e_name" placeholder="Enter Employee Name">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Employee Age:</label>
                                <input class="form-control" type="text" name="e_age" placeholder="Enter Employee Age">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Gender:</label>
                                <br>
                                <input  type="radio" name="gender" placeholder="Enter gender" value="male">male
                                <input  type="radio" name="gender" placeholder="Enter gender" value="female">female
                                <input  type="radio" name="gender" placeholder="Enter gender" value="others">others


                            </div>
                            <br>
                            <div class="form-group">
                                <label>Employee Phone Number:</label>
                                <input class="form-control" type="number" name="e_phone" placeholder="Enter Employee Number">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Employee Department:</label>
                                <select name="e_department" class="form-control br">
                                    <option>select</option>
                                    <option>CS</option>
                                    <option>IT</option>
                                    <option>HR</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Employee Email:</label>
                                <input class="form-control" type="text" name="e_email" placeholder="Enter Employee email">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Employee Password:</label>
                                <input class="form-control" type="password" name="e_password" placeholder="Enter Employee password">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Role</label>
                                <select name="role" class="form-control br">
                                    <option>select</option>
                                    <option>Admin</option>
                                    <option>Employee</option>
                                   
                                </select>
                            </div>
                            <br>
                            <input class="form-control bg-info" type="submit" name="" value="submit">

                        </form>
	   			</div>
	   		</div>
	   	</div>
	   </div>

    </section>    

</body>
</html>