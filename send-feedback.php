<!DOCTYPE html>
<?php
include('func.php');  
include('newfunc.php');
$con=mysqli_connect("localhost","root","","myhmsdb");
$id=$_GET['id'];
$username = $_SESSION['username'];

if(isset($_POST['prescribe']))
{
  $answer=$_POST['question'];

  $query = "UPDATE appointmenttb SET feedback = '".$answer."' WHERE ID = ". $id;
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Feedback added successfully!');</script>";
  }
}
?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, -scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
    <!-- Bootstrap CSS -->
    
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="links/bootstrap4.0.0-beta.min.css">

    <link rel="stylesheet" href="links/bootstrapv4.3.1.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-hospital-o" aria-hidden="true"></i> Hospital </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <style >
    .bg-primary {
      background: -webkit-linear-gradient(left, #1b1a1f, #097a9b);
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #097696 ;
    border-color: #007bff;
}
.text-primary {
    color: #097696 !important;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        
      </li>
       <li class="nav-item">
       <a class="nav-link" href="admin-panel.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Back</a>
      </li>
    </ul>
  </div>
</nav>

</head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>

<body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome&nbsp<?php echo $username ?>
   </h3>

   <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
   <form class="form-group" method="post" action="send-feedback.php?id=<?php echo $id;?>">
        
          <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="form-label">Feedback:</label>
                        <!-- <input type="text" class="form-control" name="disease" required> -->
                      <textarea id="question" class="form-control" cols="86" rows ="5" name="question" required></textarea>
                    </div>
                  </div>
                  
                  <br><br><br><br>
                  <div class="row w-100">
                    <div class="col-12 text-center">
                      <input type="submit" name="prescribe" value="Send Feedback" class="btn btn-primary">
                    </div>
                  </div>
          
        </form>
        <br>
        
      </div>
      </div>
      

  
