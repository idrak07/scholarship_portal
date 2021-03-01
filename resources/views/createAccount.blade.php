<!DOCTYPE html>
<html>
<head>
	<title>Scholarship Portal | Sign UP</title>
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
		h2{
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
<body>
	<nav class=" navbar navbar-expand-lg navbar-dark">
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
	          <!-- <span class="sr-only">(current)</span> -->
	        </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" style="cursor: pointer;" href="/aboutus">
	           About Us</a>
	      </li>
	      <li class="nav-item dropdown active">
	        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Create Account
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <!-- <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a> -->
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
	      <li class="nav-item">
	        <a class="nav-link" href="/signin">
	          <i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/contactus">
	           <i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
	      </li>
	      <!-- <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
	          aria-haspopup="true" aria-expanded="false">
	          <i class="fas fa-user"></i> Profile </a>
	        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
	          <a class="dropdown-item" href="#">My account</a>
	          <a class="dropdown-item" href="#">Log out</a>
	        </div>
	      </li> -->
	    </ul>
	  </div>
	</nav>

	<div class="container mb-3 mt-5 pt-5 pb-5">
		
		<div class="row row-content">
			<div class="col-12 col-sm-6 offset-sm-3 border-1 bg-light pt-3 pb-2">
				<form>
					<h2 class="text-center mb-2">Sign Up</h2>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="useremail">Email</label>
				      <input type="email" class="form-control" id="useremail" placeholder="Email">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="userpass">Password</label>
				      <input type="password" class="form-control" id="userpass" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="userName">FUll Name</label>
				    <input type="text" class="form-control" id="username" placeholder="Mr./Mrs. XYX">
				  </div>
				  <div class="form-group">
				    <label for="country">Country</label>
				    <input type="text" class="form-control" id="userCountry" placeholder="Country Name">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">City</label>
				      <input type="text" class="form-control" id="inputCity">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">State</label>
				      <input type="text" class="form-control" id="inputState">
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputZip">Zip</label>
				      <input type="text" class="form-control" id="inputZip">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="userdegree">Scholarship you are looking for</label>
				      <select id="userdegree" class="form-control">
				        <option selected>Choose degree</option>
				        <option>Bachelor</option>
				        <option>Masters</option>
				        <option>Ph.D</option>
				        <option>Others</option>
				      </select>
				  </div>
				  <div class="form-group ">
				  	<label class="form-label" for="customFile">Add your CV</label>&nbsp;
			      	<input type="file" class="form-control-sm" id="customFile" accept="application/pdf" />
				  </div>
				  <div class="text-center"><button type="submit" class="btn btn-primary mt-2 ">Create Account</button>
				  <br>Already have an account? <a href="/signin">Sign in here!</a></div>
				</form>
			</div>
		</div>
	</div>
	<footer class="footer mt-5 mb-0">
     <div class="container">
            <div class="row border-bottom pb-1  border-secondary">             
                <div class="col-4 offset-1 offset-sm-0 col-sm-3" id="footerAddres">
                    <h5 id="footerAddressHeader">Find&nbsp;&nbsp;Scholarships&nbsp;&nbsp;In</h5>
                    <a  href="" style="text-decoration: none; color: inherit;"><u style="border-bottom: 2px dotted #fff;text-decoration: none;">Asia</u></a><br>
                    <a href="" style="text-decoration: none; color: inherit;"><u style="border-bottom: 2px dotted #fff;text-decoration: none;">Europe</u></a><br>
                    <a  href="" style="text-decoration: none; color: inherit;"><u style="border-bottom: 2px dotted #fff;text-decoration: none;">America</u></a><br>
                    <a  href="" style="text-decoration: none; color: inherit;"><u style="border-bottom: 2px dotted #fff;text-decoration: none;">Australia</u></a><br>
                </div>
                <div class="col-7 col-sm-6  text-center">
                    
                    <b>Scholarship Portal</b><br>
                    <small>For getting our latest scholarship updates<br><a href="" style="text-decoration: none; color: inherit;"><u>Subscribe Here !</u></a><br>
                    	To get any info,contact through email below<br><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> <a href="mailto:support@schorship-portal.com" style="text-decoration: none;color: white;"> &nbsp;support@scholarship-portal.com</a></small>

                </div>
                <div class="col-12 col-sm-3 pt-3 pt-sm-0 pb-3 pb-sm-0">
                    <div class="text-center text-sm-right">
                      <h5 id="footerAddressHeader">Follow&nbsp;&nbsp;Us</h5>
                      <a class="btn btn-social-icon btn-facebook btn-xs" href="http://www.facebook.com/profile.php?id=" id="headerSocialFacebook"><i class="fa fa-facebook fa-xs"></i></a>
                      <a class="btn btn-social-icon btn-linkedin btn-xs" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-xs" aria-hidden="true"></i> </a>
                      <a class="btn btn-social-icon btn-twitter btn-xs" href="http://twitter.com/"><i class="fa fa-twitter fa-xs" aria-hidden="true"></i> </a>             
                      <a class="btn btn-social-icon btn-google btn-xs" href="http://youtube.com/"><i class="fa fa-youtube fa-xs" aria-hidden="true"></i> </a>
                    </div>
                </div>
           </div>
           <div class="row mt-1">             
                <div class="col-12 text-center text-sm-center text-muted">
                    <p class="" style="font-family: Times New Roman, Times, serif;"><i>Copyright © 2020 Scholarship-Portal.com</i></p>
                </div>
           </div>
        </div>
   </footer>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>