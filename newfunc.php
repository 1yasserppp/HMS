<?php
// session_start();
$con=mysqli_connect("localhost","root","","myhmsdb");
// if(isset($_POST['submit'])){
//  $username=$_POST['username'];
//  $password=$_POST['password'];
//  $query="select * from logintb where username='$username' and password='$password';";
//  $result=mysqli_query($con,$query);
//  if(mysqli_num_rows($result)==1)
//  {
//   $_SESSION['username']=$username;
//   $_SESSION['pid']=
//   header("Location:admin-panel.php");
//  }
//  else
//   header("Location:error.php");
// }
if(isset($_POST['update_data']))
{
 $contact=$_POST['contact'];
 $status=$_POST['status'];
 $query="update appointmenttb set payment='$status' where contact='$contact';";
 $result=mysqli_query($con,$query);
 if($result)
  header("Location:updated.php");
}

// function display_docs()
// {
//  global $con;
//  $query="select * from doctb";
//  $result=mysqli_query($con,$query);
//  while($row=mysqli_fetch_array($result))
//  {
//   $username=$row['username'];
//   $price=$row['docFees'];
//   echo '<option value="' .$username. '" data-value="'.$price.'">'.$username.'</option>';
//  }
// }


function display_specs() {
  global $con;
  $query="select distinct(spec) from doctb";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result))
  {
    $spec=$row['spec'];
    echo '<option data-value="'.$spec.'">'.$spec.'</option>';
  }
}

function display_docs()
{
 global $con;
 $query = "select * from doctb";
 $result = mysqli_query($con,$query);
 while( $row = mysqli_fetch_array($result) )
 {
  $username = $row['username'];
  $price = $row['docFees'];
  $spec = $row['spec'];
  echo '<option value="' .$username. '" data-value="'.$price.'" data-spec="'.$spec.'">'.$username.'</option>';
 }
}

// function display_specs() {
//   global $con;
//   $query = "select distinct(spec) from doctb";
//   $result = mysqli_query($con,$query);
//   while($row = mysqli_fetch_array($result))
//   {
//     $spec = $row['spec'];
//     $username = $row['username'];
//     echo '<option value = "' .$spec. '">'.$spec.'</option>';
//   }
// }


if(isset($_POST['doc_sub']))
{
 $username=$_POST['username'];
 $query="insert into doctb(username)values('$username')";
 $result=mysqli_query($con,$query);
 if($result)
  header("Location:adddoc.php");
}



// sandy
function reservation($state, $id) {
  $con = mysqli_connect("localhost","root","","myhmsdb");
  if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if ($state == 1) {
      $query = mysqli_query($con, "UPDATE appointmenttb SET adminStatus = 1 WHERE ID = $id");
  } else if ($state == 0) {
      $query = mysqli_query($con, "UPDATE appointmenttb SET adminStatus = 2 WHERE ID = $id");
  }

  if ($query && $state == 1) {
      echo "Your appointment successfully approved";
  } else if ($query && $state == 0) {
      echo "Your appointment successfully rejected";
  } else {
      echo "Unable to process your request. Please try again!";
  }

  mysqli_close($con);
}

// Check if the function is called via AJAX
if(isset($_POST['state']) && isset($_POST['id'])) {
  $state = $_POST['state'];
  $id = $_POST['id'];
  reservation($state, $id);
}

// function reservation($state,$id){
//   print_r($state,$id) ;
//   $con=mysqli_connect("localhost","root","","myhmsdb");
//   if($state==1)
//   {
//     $query = mysqli_query($con, "UPDATE appointmenttb SET doctorStatus = '1' WHERE ID = $id");
//   }else if($state==0)
//   {
//     $query = mysqli_query($con, "UPDATE appointmenttb SET doctorStatus = '0' WHERE ID = $id");
//   }

//   if($query && $state==1)
//   {
//     header("Location:admin-panel1.php");

//     // echo("<script>alert('Your appointment successfully approaved');
//     // window.location.href = 'admin-panel1.php';</script>");
//   }else if($query && $state==0)
//   {
//     header("Location:admin-panel1.php");

//     // echo("<script>alert('Your appointment successfully rejected');
//     // window.location.href = 'admin-panel1.php';</script>");
//   }
//   else{
//     echo("<script>alert('Unable to process your request. Please try again!');</script>");
//   }
// }
?>