<!DOCTYPE html>
<html>
<head>
	<title>Scholarship Portal</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
	<div id="loader">
        <div class="spinner"></div>
    </div>
    <script type="text/javascript">
		window.addEventListener("load", () => {
		const loader = document.getElementById("loader");
		setTimeout(() => {
		loader.classList.add("fadeOut");
		}, 1000);
		});
	</script>
	<!-- feedback modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center">
	      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button><br><br>
	        <h5 id="modaltext">How would you rate your<br>experience?<br></h5><br>
	        <button class="btn btn-md border-0"  id="1Btn"> <a href="/feedback/1">
	        	<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-emoji-angry-fill" fill="orange" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.053 4.276a.5.5 0 0 1 .67-.223l2 1a.5.5 0 0 1 .166.76c.071.206.111.44.111.687C7 7.328 6.552 8 6 8s-1-.672-1-1.5c0-.408.109-.778.285-1.049l-1.009-.504a.5.5 0 0 1-.223-.67zm.232 8.157a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 1 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM10 8c.552 0 1-.672 1-1.5 0-.408-.109-.778-.285-1.049l1.009-.504a.5.5 0 1 0-.448-.894l-2 1a.5.5 0 0 0-.165.76A2.12 2.12 0 0 0 9 6.5c0 .828.448 1.5 1 1.5z"/>
				</svg>
	        </a>
			</button>
			<button class="btn btn-md border-0" id="2Btn"> <a href="/feedback/2">
				<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-emoji-frown-fill" fill="orange" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-2.715 5.933a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM10 8c.552 0 1-.672 1-1.5S10.552 5 10 5s-1 .672-1 1.5S9.448 8 10 8z"/>
				</svg>
			</button>
			<button class="btn btn-md border-0" id="3Btn"> <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-emoji-smile-fill" fill="orange" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c.552 0 1-.672 1-1.5S10.552 5 10 5s-1 .672-1 1.5S9.448 8 10 8z"/>
				</svg>
			</button>
			<button class="btn btn-md border-0" id="4Btn"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-emoji-laughing-fill" fill="orange" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.836 6.896 11 7 11 6.5c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5c0 .501.164.396.415.235.165-.106.367-.235.585-.235.218 0 .42.13.585.235z"/>
				</svg>
			</button>
			<button class="btn btn-md border-0" id="5Btn"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-emoji-heart-eyes-fill" fill="orange" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.559 5.448a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zm-.07-5.448c1.397-.864 3.543 1.838-.953 3.434-3.067-3.554.19-4.858.952-3.434z"/>
				</svg>
			</button>
			<br><br><br>
	      </div>
	    </div>
	  </div>
	</div>
	<!--Navbar -->
	<nav class=" navbar navbar-expand-lg navbar-dark">
	  <a class="navbar-brand" href="#">
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
	        <a class="nav-link" style="cursor: pointer;" onclick="myFunction()">
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
	      <!-- <li class="nav-item">
	        <a class="nav-link" href="/createaccount">
	           Create Account</a>
	      </li> -->
	      <li class="nav-item">
	        <a class="nav-link" href="/signin">
	          <i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="mailto:contactus@scholarship-portal.com">
	           <i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
	      </li>
	      <!-- <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
	          aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
	          <i class="fa fa-user"></i> Profile </a>
	        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
	          <a class="dropdown-item" href="#">My account</a>
	          <a class="dropdown-item" href="#">Log out</a>
	        </div>
	      </li> -->
	    </ul>
	  </div>
	</nav>
	<!-- Header done -->

	<!-- body below header -->
	<div class="jumbotron jumbotron-fluid text-center m-2" id="homeJumbotron">
	    <form class="form-inline justify-content-center content" id="serachForm" method="POST">
	    	{{csrf_field()}}
	        <div class="input-group mb-2 mr-sm-2 w-50">
	            <div class="input-group-prepend w-100">
	                <div class="input-group-text"><i class="fa fa-tag" aria-hidden="true"></i></div>
	                <input type="text" class="form-control w-100" name="universityName" id="universityName" placeholder="Search by University Name">
	            </div> 
	        </div>
	        <select class="form-control mb-2 mr-sm-2 w-25" name="degreeType">
	            <option value="1"> Select Degree Type</option>
	            <option value="Bachelor">Bachelor</option>
	            <option value="Masters">Masters</option>
	            <option value="Ph.D">Ph.D</option>
	            <option value="Others">Others</option>
	        </select>
	        <button type="submit" class="btn btn-success mb-2">Search</button>
	    </form>
	</div>

	<div class="container mb-5 mt-5">
		<div class="popup-btn" id="feedbackBtn" onclick="document.getElementById('id01').style.display='block'">
				<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-commenting-o" aria-hidden="true"></i> feedback</a>
			</div>
		<!-- Header -->
		<div class="row row-content p-3">
			<div class="col-12 text-center">
				<h2>Our Latest Scholarships</h2>
			</div>
		</div>
		<!-- Cards -->
		<div class="row row-content mb-5">
			@foreach($scholarships as $data)
			<div class="col-12 col-sm-4 mt-5" >
				<div class="card" style="width: 18rem;" id="scholarshipCard">
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
		
		<div class="row row-content p-3 mt-3">
			<div class="col-10 text-center offset-1" id="aboutus">
				<h2>Find and Compare University Scholarships Worldwide</h2>
				<h5>Scholarships, grants, fellowships and other student funding</h5>
				<p>Find and compare scholarships for college students, college grants, fellowships, federal financial aid and other forms of student funding to cover expenses for international Bachelors, Masters and PhDs worldwide.</p>
				<p>ScholarshipPortal is the best scholarship website for international students looking to meet their financial needs. Browse comprehensive scholarship lists available for a wide variety of destinations abroad. Start your scholarship search by choosing a study location and selecting one of over 1000 opportunities for student financial aid available in the United Kingdom, Germany, Finland, France, Spain, the Netherlands, China, the United States, Australia, and many others.</p>
				<p>Apply for a university scholarship in a degree subject that interests you from top MBA scholarships, engineering scholarships, scholarships for law schools and medical schools, as well as art, sports or music scholarships, and many more.</p>
			</div>
		</div>

		
	</div>
	<div id="indexCar" class="carousel slide m-0 p-0 " data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item ">
		      <img src="images/wallpaper1.jpg"  alt="...">
		    </div>
		    <div class="carousel-item active">
		      <img src="images/wallpaper2.jpg" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="images/wallpaper3.jpg" alt="...">
		    </div>
		  </div>
	</div>
	
	<div class="container mb-5 mt-5">
		<div class="row row-content p-3 mt-3">
			<div class="col-7 text-left " id="commitment">
				<h2>Beyond the platform</h2><br>
				<!-- <h5>Scholarships, grants, fellowships and other student funding</h5> -->
				<p>As our first core value states, 'Make our world a little better', we care about giving something back to the community, and being able to help those who need it most is what really makes us happy. Currently, Studyportals supports Knowledge for Children, as well as other education-related charities and projects.</p>
			</div>
			<div class="col-5" id="comImg">
				<img src="/images/masonry-5.png">
			</div>
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
                    	To get any info,contact through email below<br><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> <a href="mailto:support@schorship-portal.com" style="text-decoration: none;color: white;"> &nbsp;support@scholarship-portal.com</a><br><i class="fa fa-phone fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;<a href="tel:+880255046678" style="text-decoration: none;color: white;">+880 2 55046678</a>, <a href="tel:+8809666775577" style="text-decoration: none;color: white;">+880 9666775577</a></small>

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

   <!-- Javascrpit starts here -->
   <script>
    function myFunction() {
      var elmnt = document.getElementById("aboutus");
      elmnt.scrollIntoView({behavior: "smooth"});
      // $.scrollTo($('#aboutus'), 1000);
    };
    </script>
    <!-- <script language="JavaScript" type="text/javascript">
	  $(document).ready(function(){
	    $('.carousel').carousel({
	      interval: 2000
	    })
	  });    
	</script> -->

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
	<script type="text/javascript">
		var my_form = document.forms.serachForm;
	  my_form.onsubmit = function(){
	    var f_name_val = my_form.universityName.value;
	    var l_name_val = my_form.degreeType.value;
	    if(f_name_val === "" && l_name_val === "1") {
	      alert("Select Degree type or enter university name !");
	      return false;            
	    }
	    
	    else{
	    	return true;
	    }

	        
	  };
	</script>
	<script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#universityName" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('university.universityName')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: $("input[name=universityName]").val()
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#universityName').val(ui.item.value); // display the selected text
           /*$('#employeeid').val(ui.item.value);*/ // save selected id to input
           return false;
        }
      });
      /*$('#1Btn').click(function () {
      	let _token   = $('meta[name="csrf-token"]').attr('content');
      	$.ajax({
	        url: "/feedback",
	        type:"POST",
	        data:{
	          value:1
	        },
	        success:function(response){
	          console.log(response);
	          if(response) {
	            $('#feedbackBtn').addClass('d-none');
	          }
	        },
       });
       url:("location:/1");
      });*/
    });
    </script>
</body>
</html>