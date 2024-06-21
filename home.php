<html>
<head>
	<title>HMS</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="links/bootstrapv4.3.1.min.css">
<!-- <link rel="stylesheet" style="links/bootstrapv4.3.1.min.css"> -->

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

<link href="links/bootstrapv4.1.1.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <link rel="stylesheet" style="links/bootstrapv4.1.1.min.css"> -->

<style >
     .form-control {
    border-radius: 0.75rem;
}
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

      <a class="navbar-brand js-scroll-trigger" href="home.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp Hospital</h4></a>
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

  <div class="container text-center mt-5 pt-5 ">
  <h1 class="text-white">Welcome in our hospital</h1>
  </div>

<div class="container mt-4 mb-5">
  <div class="row">
    <div class="col-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slides/slide1/bg.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slides/slide2/bg.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slides/slide3/bg.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>

            <!--SECTION2-->
            <section class="container-fluid mb-3">
                <div class="row px-1">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <i class="fa fa-medkit"></i>
                            <h1>Qualified Doctors</h1>
                            <p class="p-2">Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <i class="fa fa-certificate"></i>
                            <h1>Certified Services</h1>
                            <p class="p-2">Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <i class="fa fa-stethoscope"></i>
                            <h1>Advanced Equipment</h1>
                            <p class="p-2">Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <i class="fa fa-heartbeat"></i>
                            <h1>Emergency Service</h1>
                            <p class="p-2">Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                        </div>
                    </div>                    
                </div>
            </section>


            <section class="cta">
        <div class="inner">
          <div class="left">
            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Welcome to your health center</h3>
            <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit volutpat venenatis.

Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam a tempus vehicula.</p>
          </div>
          <div class="right">
            <img src="http://res.cloudinary.com/dgpmuegqe/image/upload/v1521165802/female_doc_zdj4ay.jpg" alt="">
          </div>
        </div>
      </section>

            <!-- <footer>
                <div class="row m-5">
                    <div class="col-12 p-0">
                        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook footer-icons"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram footer-icons"></i></a>
                        <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter footer-icons"></i></a>
                        <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube footer-icons"></i></a>
                    </div>
                </div>
            </footer> -->

            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center container">
      <h1 class="display-4 text-white">Pricing</h1>
      <p class="lead text-white">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Patient Manager</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">0 EGP<small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Patient Management</li>
              <li>Calendars & Checkins</li>
              <li>Medical Records</li>
              <li>Images & Documents</li>
            </ul>
            <a href="index1.php" type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Patient Manager</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">0 EGP <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Images & Documents</li>
              <li>Treatment Plans</li>
              <li>Billing & Inventory</li>
              <li>Custom Forms</li>
            </ul>
            <a href="index1.php" type="button" class="btn btn-lg btn-block btn-outline-primary">Get started</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Patient Manager</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">0 EGP <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Internal Messaging</li>
              <li>Health Messaging (HL7)</li>
              <li>Biometrics</li>
              <li>Reports & Statistics</li>
            </ul>
            <a href="contact.html" type="button" class="btn btn-lg btn-block btn-primary">Contact us</a>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md text-white">
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
          <div class="col-6 col-md text-white">
            <h5>Pages</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-white" href="home.php">Home</a></li>
              <li><a class="text-white" href="services.html">About Us</a></li>
              <li><a class="text-white" href="contact.html">Contact Us</a></li>
              <li><a class="text-white" href="index1.php">Register</a></li>
              <li><a class="text-white" href="#">index.php</a></li>
            </ul>
          </div>
          <div class="col-6 col-md text-white">
            <h5>Resources</h5>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget text-white">
                <h5>Follow us</h5>
                <ul class="company-social d-inline">
                  <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook footer-icons"></i></a>
                  <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram footer-icons"></i></a>
                  <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter footer-icons"></i></a>
                  <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube footer-icons"></i></a>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-6 col-md text-white">
            <h5>About</h5>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Global Hospitals</h5>
                <p>
                  Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
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

  