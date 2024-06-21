<html>
<head>
	<title>HMS</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <link rel="stylesheet" style="links/bootstrapv4.3.1.min.css"> -->

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <link rel="stylesheet" style="links/bootstrapv4.1.1.min.css"> -->

<style >
     .form-control {
    border-radius: 0.75rem;
}



.company-social {
	margin-left: 0;
	padding-left: 0;
	margin-top: 10px;
}

.company-social {
	text-align: left;
	list-style: none;
}

.company-social li{
	margin:0;
	padding:0;
	display: inline-block;
}

.company-social a{
	margin:0 2px 0 0;
}

.company-social a:hover {
    color: #fff;
}

.company-social a i {
	width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
	color: #fff;
    -webkit-transition: background .3s ease-in-out;
    transition: background .3s ease-in-out;
	text-align: center;
	border-radius: 3px;
	padding:0;
}

.company-social .social-facebook a i{background: #3873ae;}
.company-social .social-twitter a i{background: #62c6f8;}
.company-social .social-dribble a i{background: #d74980;}
.company-social .social-deviantart a i{background: #8da356;}
.company-social .social-google a i {background: #000;}
.company-social .social-vimeo a i {background: #51a6d3;}
.company-social .social-facebook a:hover i {background: #4893ce;}
.company-social .social-twitter a:hover i {background: #82e6ff;}
.company-social .social-dribble a:hover i {background: #f769a0;}
.company-social .social-deviantart a:hover i {background: #adc376;}
.company-social .social-google a:hover i {background: #333;}
.company-social .social-vimeo a:hover i {background: #71c6f3;}


</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>

</head>

<!------ Include the above in your HEAD tag ---------->
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: -webkit-linear-gradient(left, #1b1a1f, #097a9b);" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp Hospital</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="home.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>

          <li class="nav-item" style="margin-left: 30px;">
            <a class="nav-link js-scroll-trigger" href="index1.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>REGISTER</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-9 register-right" style="margin-top: 40px;right: 15%;">
                        
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 14%;">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- <div class="overlay"></div> -->
                            <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading white-color">Register as Patient</h3>
                                <form method="post" action="func2.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span class="white-color" style="font-size: 17px;"> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span class="white-color" style="font-size: 17px;">Female </span> 
                                                </label>
                                            </div>
                                            <a class="white-color" href="index.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Doctor</h3>
                                <form method="post" action="func1.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                                    </div>
                                </div>
                                <hr>
            <div class="row">
              <div class="col-lg-6 text-center">
                <a class="btn btn-primary" href="admin-login.php">Login as Admin</a>
              </div>
              <div class="col-lg-6 text-center">
              <a class="btn btn-primary" href="index.php">Login as Patient</a>
              </div>
            </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Admin</h3>
                                <form method="post" action="func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 register-left" style="margin-top: 10%;left: 5%">
                        <!-- <img src="https://cdn-icons-png.flaticon.com/512/4320/4320350.png" alt=""/> -->
                        <img src="images/young-female-doctor-with-surgical-cap-using-smart-phone-in-clinic-GIOF10983.jpg" alt=""/>
                        <h3>Professional Doctors</h3>
                       
                    </div>
                </div>

                
            </div>

            <footer style="background: -webkit-linear-gradient(left, #1b1a1f, #097a9b);color: #e4d6d6">

<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>About Hospitals</h5>
          <p>
            Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
          </p>
        </div>
      </div>
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>Information</h5>
          <ul >
            <li><a style="color: #e4d6d6" href="home.php">Home</a></li>
            <li><a style="color: #e4d6d6" href="services.html">About us</a></li>
            <li><a style="color: #e4d6d6" href="contact.html">Contact Us</a></li>
            <li><a style="color: #e4d6d6" href="index1.php">Register</a></li>
            <li><a style="color: #e4d6d6" href="index.php">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>Global Hospitals</h5>
          <p>
            Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
          </p>
          <ul>
            <li>
              <span class="fa-stack fa-lg">
            <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
          </span> Monday - Saturday, 8am to 10pm
            </li>
            <li>
              <span class="fa-stack fa-lg">
            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
          </span> +62 0888 904 711
            </li>
            <li>
              <span class="fa-stack fa-lg">
            <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
          </span> global@hospitals.com
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>Our location</h5>
          <p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>

        </div>
      </div>
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>Follow us</h5>
          <ul class="company-social">
            <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook footer-icons"></i></a></li>
            <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram footer-icons"></i></a></li>
            <li><a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter footer-icons"></i></a></li>
            <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube footer-icons"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

</footer>
    </body>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="links/jquery-3.3.1.slim.min.js"></script>
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="links/popper.min.js"></script>
    
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="links/bootstrapv4.3.1.min.js"></script>
    
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->
    <script src="links/bootstrapv3.4.1.min.js"></script>
</html>

  