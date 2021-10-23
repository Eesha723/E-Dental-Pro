<?php
session_start();  
$errors=array();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edentalpro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['submit']))//this will tell us what to do if some data has been post through form with button.  
{  
    $Email=$_POST['email'];  
    $Password=$_POST['password'];  
    if (empty($Email)) {
        	array_push($errors,"Email is required");
    }
         if (empty($Password)) {
        	array_push($errors,"Password is required");

         	}
             if (count ($errors)== 0) {
    $sql="SELECT * from patient_login  where email='$Email' AND password_2='$Password'";  
  
    $run_query=mysqli_query($conn,$sql);  
  
    if(mysqli_num_rows($run_query)>0)  
    { 	$_SESSION['email']=$Email;
        	$_SESSION['success']="you are now logged in";
        header('location:book.php');
      }  else{
      		array_push($errors,"The ID/Password not correct");
          echo"<script>alert('Wrong Credentials')</script>";
          
      	} 

        // echo "<script>alert('Log In Successful!')</script>";  

    // else {echo"<script>alert('Details are incorrect')</script>";
		// echo "Error: " . $sql . ":-" . mysqli_error($conn);}
    }  
  
}  

$userprofile=isset($_SESSION['email']);
$query="SELECT * FROM patient_login WHERE email=('$userprofile')";
 $result= mysqli_query($conn, $query);
 $col= mysqli_fetch_assoc($result);