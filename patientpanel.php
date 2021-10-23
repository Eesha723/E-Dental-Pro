<?php
$errors=array();
include 'pp.php';
// include 'config.php';

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

if (isset($_POST['Book'])) {

$AppoCNIC = 	$conn -> real_escape_string($_POST['AppoCNIC']);
$den_name = 	$conn -> real_escape_string($_POST['den_name']);
$Date 	=	 $conn -> real_escape_string($_POST['Date']);
$Time 	= 	$conn -> real_escape_string($_POST['Time']);
$Cause  =   $conn -> real_escape_string($_POST['Cause']);

if (empty($AppoCNIC)) {
array_push($errors,"CNIC is required");
}

if (empty($Date)) {
array_push($errors,"Date is required");

}


if (empty($Time)) {
array_push($errors,"Time is required");

}
if (empty($Cause)) {
array_push($errors,"Cause is required");

}

if(count($errors)==0){


$den_name = $_REQUEST['den_name'];
$sql = "INSERT INTO  patientappo (pID, appCNIC, den_name, App_date, App_time, App_cause) VALUES ('$userprofile','$AppoCNIC','$den_name', '$Date' ,'$Time' ,'$Cause') ";
$result99=$conn->query($sql);
$result99 = mysqli_query($conn, $sql);

    if ($result99) {
printf("%d Booked .\n", $conn->affected_rows);
echo"<script>alert('Thank You')</script>";

}

elseif (!$conn -> query($sql)) {
printf("%d Can't Book At The Moment.\n", $conn->affected_rows);

 } 
$_SESSION['appCNIC']=$AppoCNIC;
$_SESSION['success']="you are now logged in";
header('location:book.php');

}

}



if (isset($_POST['cancel'])) {

    $AppoID2 =$conn -> real_escape_string($_POST['AppoID2']);

if (empty($AppoID2)) {
array_push($errors,"CNIC is required");
}
if (count($errors)==0) {



$query5="DELETE FROM patientappo WHERE appCNIC='$AppoID2' AND pID=('$userprofile')";
if ($conn -> query($query5)) {

    if ($conn->affected_rows==0) {
         array_push($errors,"Wrong CNIC Number");
      
    }

}

  else {
  
  echo 'Booking is Cancelled';
  


  }
 
}
}

?>