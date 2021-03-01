<!DOCTYPE html>
<html>
<head>
	<title>Scholarship Portal</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		#indexCar img {
		  width: 100%;
		  height: 400px !important;
		  object-fit: cover;
		}
		
		#scholarshipCard:hover{
			box-shadow: 0 5px 5px 0 rgba(0,0,0,0.24), 0 5px 5px 0 rgba(0,0,0,0.19);
		}
		body{
			background-color: #edf2f4;
			/*margin-bottom: 20px;*/
		}
		nav, footer{
			background-color: #365783;
		}
		#modaltext{
			color: #365783;
		}
		.popup-btn a{
		    top:40%;
		    position:fixed;
		    right:-45px;
		    z-index: 1000;
		    transform: rotate(-90deg);
		    background-color: red;
		    padding:10px 20px 35px;
		    height: 0px;
		    background-color: #96DA10;
		    color:#fff;
		}
		.popup-btn a:hover{
		    text-decoration: none;
		    color:#fff;
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
		#homeJumbotron{
			position: relative;
		    background-color: #000;

		}
		#homeJumbotron::before{
			content: ' ';
		    display: block;
		    position: absolute;
		    left: 0;
		    top: 0;
		    width: 100%;
		    height: 100%;
		    z-index: 0;
		    opacity: 0.5;
		    background:       url("/images/home.jpg") no-repeat center center;
		    background-size: cover;

		}
		

		.bg-opacity{
		    position: relative;
		    background-color: #000;
		}

		.bg-opacity::before{
		    content: ' ';
		    display: block;
		    position: absolute;
		    left: 0;
		    top: 0;
		    width: 100%;
		    height: 100%;
		    z-index: 0;
		    opacity: 0.5;
		    background:       url("/images/home.jpg") no-repeat center center;
		    background-size: cover;
		}

		.content{
		  position: relative;
		  width: 100%;
		  height: 220px;
		}
		#loader {
                transition: all 0.3s ease-in-out;
                opacity: 1;
                visibility: visible;
                position: fixed;
                height: 100vh;
                width: 100%;
                background: #fff;
                z-index: 90000;
            }
            #loader.fadeOut {
                opacity: 0;
                visibility: hidden;
            }
            
            .spinner {
                width: 40px;
                height: 40px;
                position: absolute;
                top: calc(50% - 20px);
                left: calc(50% - 20px);
                background-color: #333;
                border-radius: 100%;
                -webkit-animation: sk-scaleout 1s infinite ease-in-out;
                animation: sk-scaleout 1s infinite ease-in-out;
            }
            @-webkit-keyframes sk-scaleout {
                0% {
                    -webkit-transform: scale(0);
                }
                100% {
                    -webkit-transform: scale(1);
                    opacity: 0;
                }
            }
            @keyframes sk-scaleout {
                0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                }
                100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    opacity: 0;
                }
            }
            svg:hover{
            	height: 3em;
            	width: 3em;
            }
	</style>
</head>
<body>
	<!-- feedback modal -->
	
	<!--Navbar -->
	<nav class=" navbar navbar-expand-lg navbar-dark">
	  <a class="navbar-brand" href="/">
	  	<img src="/images/logo.png" width="40" height="40" class="d-inline-block" alt="" style="border-radius: 50%;"> &nbsp; <font style="font-size: 120%;"><b>Scholarship Portal</b></font></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
	    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/index">
	           Home
	          <span class="sr-only">(current)</span>
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
	    </ul>
	  </div>
	</nav>
	<!-- Header done -->

	<!-- body below header -->
	<div class="jumbotron jumbotron-fluid text-center m-2" id="homeJumbotron">
	    <form class="form-inline justify-content-center content">
	        <div class="input-group mb-2 mr-sm-2 w-50">
	            <div class="input-group-prepend w-100">
	                <div class="input-group-text"><i class="fa fa-tag" aria-hidden="true"></i></div>
	                <input type="text" class="form-control w-100" id="universityName" placeholder="Search by University Name">
	            </div> 
	        </div>
	        <select class="form-control mb-2 mr-sm-2 w-25" name="degreeType">
	            <option value=" "> Select Degree Type</option>
	            <option value="bsc">Bachelor</option>
	            <option value="masters">Masters</option>
	            <option value="phd">Ph.D</option>
	            <option value="others">Others</option>
	        </select>
	        <button type="submit" class="btn btn-success mb-2">Search</button>
	    </form>
	</div>

	<div class="container mb-5 mt-5">
		<div class="popup-btn" onclick="document.getElementById('id01').style.display='block'">
				<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-commenting-o" aria-hidden="true"></i> feedback</a>
			</div>
		<!-- Header -->
		<div class="row row-content p-3">
			<div class="col-12 text-center">
				<h2>Search for {{$degree}}</h2>
			</div>
		</div>
		<!-- Cards -->
		<div class="row row-content mt-5 mb-5">
			@foreach($scholarships as $data)
			<div class="col-12 " >
				<div class="card" style="width: 100%;" id="scholarshipCard">
				    <a href="/scholarships/{{$data->scholarshipid}}" style=" text-decoration: none; color: inherit;">
					  	<div class="card-body">
						    <h6 class="card-title">{{$data->headline}}</h6><br>
						    <h6 class="card-subtitle mb-3 text-muted"><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{$data->degreetype}} </h6>
						    <h6 class="card-subtitle mb-3 text-muted"><i class="fa fa-money" aria-hidden="true"></i> {{$data->costing}}</h6>
						    <h6 class="card-subtitle mb-3 text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->deadline}} </h6>
						    <br>
						    <a href="/scholarships/{{$data->scholarshipid}}" class="card-link"><button class="btn" style="background-color: #FCAB08; color: white;">View Scholarship</button></a>
						</div>
					</a>
				</div>
			</div>
			@endforeach

		</div>
		
		

		
	</div>
	
	<!-- Footer Start -->
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


   <!-- Body ends here -->


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('.carousel').carousel({
		      interval: 2000
		    })
		  }); 
	</script>
</body>
</html>