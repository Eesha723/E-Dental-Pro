<?php
$errors=array();
include 'aa.php';

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

if (isset($_POST['Add'])) {

$addID 				= $conn -> real_escape_string($_POST['addID']);
$addfirstname 			= $conn -> real_escape_string($_POST['addfirstname']);
$addlastname 			= $conn -> real_escape_string($_POST['addlastname']);
$addContactNumber	= $conn -> real_escape_string($_POST['addContactNumber']);
$addusername	= $conn -> real_escape_string($_POST['addusername']);
$addPassword 		= $conn -> real_escape_string($_POST['addpassword']);



if (empty($addID)) {
array_push($errors,"Doctor ID is required");

}

if (empty($addfirstname)) {
array_push($errors,"Doctor First Name is required");

}

if (empty($addlastname)) {
    array_push($errors,"Doctor Last Name is required");
   
    }

if (empty($addContactNumber)) {
array_push($errors,"Contact Number is required");

}

if (empty($addusername)) {
    array_push($errors,"Username is required");
 
    }

if (empty($addPassword)) {
array_push($errors,"Password is required");

}




if(count($errors)==0){

    $sqladd = "INSERT INTO  dentist_info (dentist_id, first_name, last_name, phone ,username, D_password) VALUES ('$addID','$addfirstname','$addlastname','$addContactNumber','$addusername','$addPassword') ";

	if ($conn -> query($sqladd)) {
  printf("%d Row inserted.\n", $conn->affected_rows);


 
}
$_SESSION['addID']=$addID;
$_SESSION['success']="you are now logged in";
header('location:admin-index.php');

}
}

// Delete dentist 
if (isset($_POST['Delete'])) {

    $deleteID =$conn -> real_escape_string($_POST['deleteID']);

if (empty($deleteID)) {
array_push($errors,"Doctor ID is required");
}
if (count($errors)==0) {


$querydelete="DELETE FROM dentist_info WHERE dentist_id='$deleteID' ";
if ($conn -> query($querydelete)) {

    if ($conn->affected_rows==0) {
         array_push($errors,"Wrong Doctor ID");

    }

}
  else {
  
  echo 'Book is Canceled';
  
  }

}
}


?>