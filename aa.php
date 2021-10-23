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
    $admin_username=$_POST['username'];  
    $admin_pass=$_POST['password'];  
    if (empty($admin_username)) {
        array_push($errors,"Admin ID is required");
 
    }
    if (empty($admin_pass)) {
        array_push($errors,"Password is required");
    
        }
    
    if (count ($errors)== 0) {

    $sql="SELECT * from admin_info where username='$admin_username' AND password_2='$admin_pass'";  
  
    $run_query=mysqli_query($conn,$sql);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
        
        $_SESSION['username']=$admin_username;
        $_SESSION['success']="you are now logged in";
        header('location:admin-index.php'); 
  }  else{
          array_push($errors,"The ID/Password not correct");
          echo"<script>alert('Wrong Credentials')</script>"; 
      }
    }
} 


    //     echo "<script>alert('Log In Successful!')</script>";
    // }  
    // else {echo"<script>alert('Wrong Credentials')</script>";}  
 
  
?> 