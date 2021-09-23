<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1,
 shrink-to-fit=no">
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
<style >
	body{
		background: url(image/back.jpg);
	}
	.login-div-size{
		height: 500px;
		width: 600px;
		/*border: 2px solid;*/
		margin-top: 78px;
		background-color: white;

	}
	.login-div-left{
		background: url(image/pink.jpg);
		height: 500px;
		text-align: center;	
	}
	.login-div-left p{
		margin-top: 200px;
		
	}
	.button{
		border-radius: 25px;
		background: linear-gradient(to left,#d40030,#eb8988);
	}
	.login-div-right{
       margin-top: 135px;
	}
    .form-group input{
        border-radius: 25px;
        background: linear-gradient(to right,white,lightgrey);
    }
    h2{
        font-family: 'Playfair Display', serif;
    }
    h1{
        font-family: 'Playfair Display', serif;
    }
    
</style>
	<title></title>
</head>
<body>

	 <section>
 
	   <!-- nav start -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top a">

             <img src="image/chunni1.jpg" width="65px" >


                 <!-- button -->
                 <button class="navbar-toggler" data-toggle="collapse" data-target="#a">

                     <span class="navbar-toggler-icon"></span>
   
                  </button>
                   <!-- button -->
                 <div class="collapse navbar-collapse x" id="a">
		           <ul class="navbar-nav "style="margin-left: auto; margin-right: 15px;">
			          <li class="nav-item " >
				      <a href="registration.php"  style="border:2px solid  #d40030; color: #d40030;border-radius: 20px;" class="nav-link ">Registration</a></li>
                     
			    	    
                   </ul>
		
		
     	         </div>		 
      </nav>
         <!-- nav end -->
    </section>

    <section>
    	<!-- login start -->
    	<center>
    		<div class="login-div-size shadow">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-6 login-div-left">
    						<p>
    						<h2>Welcome Back,</h2>
    						<h6>Sign In to continue access pages</h6>
    						</p>
    					</div>
    					<div class="col-md-6 a">

    						<form class="login-div-right" method="post" action="login.php">
    							<h1 class="text-center">Sign In</h1>
    							<div class="form-group">
    								<input class="form-control " type="text" name="e_email" placeholder="Enter username">
    							</div>
    							<br>
    							<div class="form-group">
    								<input class="form-control" type="password" name="e_password" placeholder="Enter password">
    							</div>
    							<br>
    							<input class="form-control button" type="submit" name="" value="Sign In">
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</center>

    	<!-- login end -->
    </section>

  

</body>
</html>