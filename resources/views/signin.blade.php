<!DOCTYPE html>
<html>
<head>
	<title>Scholarship Portal | Sign In</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		 body{
			/*background-color: #edf2f4;*/
			/*margin-bottom: 20px;*/
			background-image: url('/images/bg1.png');
			/*background-image: url('/images/wallpaper2.jpg');*/
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
		}
		nav, footer{
			background-color: #365783;
		}
		h4{
			color: #563d7c;
		}
		.footer{
			margin: 0px auto;
			margin-top: 5px;
			color: #FFFF;
			padding: 20px 0px 0px 0px;
		}
		#footerAddres{
			font-size: 80%;
		}
		#footerAddressHeader{
			font-family: Impact, Charcoal, sans-serif;
		}
	</style>
</head>
<body >
	<!-- <nav class=" navbar navbar-expand-lg navbar-dark">
	  <a class="navbar-brand" href="/">
	  	<img src="/images/logo.png" width="40" height="40" class="d-inline-block" alt="" style="border-radius: 50%;"> &nbsp; <font style="font-size: 120%;"><b>Scholarship Portal</b></font></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
	    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="/index">
	           Home
	        </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" style="cursor: pointer;" href="/aboutus">
	           About Us</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Create Account
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          	<div class="dropdown-item">
	          		<div class="card border-1 m-0 p-0" style="width: 15rem; height: 10rem;">
					  	<div class="card-body">
					  		<p ><b>University</b><br><font style="font-size: 80%;">Do you want to create account for <br>your university scholarship offering?</font></p>
						    <a href="/signup-university"><button class="btn btn-xs btn-success">Create</button></a>
				  		</div>
					</div>
	          	</div>
	          	<div class="dropdown-divider"></div>
	          	<div class="dropdown-item">
	          		<div class="card border-1 m-0 p-0" style="width: 15rem; height: 10rem;">
					  	<div class="card-body">
					  		<p ><b>Student</b><br><font style="font-size: 80%;">Do you want to create account for <br>applying scholarship?</font></p>
						    <a href="/signup-student"><button class="btn btn-xs btn-success">Create</button></a>
				  		</div>
					</div>
	          	</div>
	        </div>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="/signin">
	          <i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/contactus">
	           <i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav> -->
	<!-- <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
	          aria-haspopup="true" aria-expanded="false">
	          <i class="fas fa-user"></i> Profile </a>
	        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
	          <a class="dropdown-item" href="#">My account</a>
	          <a class="dropdown-item" href="#">Log out</a>
	        </div>
	      </li> -->

	<div class="container" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);" >
		
		<div class="row row-content">
			<div class="col-12 col-sm-4 offset-2 offset-sm-4 border-1 bg-light pt-3 pb-2">
				<form method="post">
					{{csrf_field()}}
					<a href="/" style="text-decoration: none;color: inherit;"><h4 class="text-center mb-2"><img src="/images/logo.png" id="icon" alt="User Icon" width="50px" height="50px" />&nbsp;<font id="brandName"><b>Scholarship Portal</b></font></h4></a>
				    <div class="form-group">
				      <label for="email">Email</label>
				      <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">

				    </div>
				    <div class="form-group">
				      <label for="userpass">Password</label>
				      <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">

				    </div>				  
				  <div class="text-center mt-2 "><p class="text-center" style="color: red;">{{session('msg')}}</p><button type="submit" class="btn btn-primary ">Sign In</button>
				  <br>Don't have an account? <a href="/createaccount">Register here!</a></div>
				</form>
			</div>
		</div>
	</div>
	
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>