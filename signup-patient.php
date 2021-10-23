<?php 

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

error_reporting(0);

if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$password_2 = ($_POST['password_2']);

	    if (!$result->num_rows > 0) {
			$sql = "INSERT INTO patient_login (patient_id, first_name, last_name, email, password_2)
					VALUES ('$patient_id','$first_name','$last_name', '$email', '$password_2')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Patient SignUp Completed!')</script>";
                $first_name = "";
                $last_name = "";
				$email = "";
                $password_2 = "";
				// $_POST['password'] = "";
				
			} else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
			 echo "<script>alert('Something Went Wrong')</script>";
				}		}
		//  else {
		// 	echo "<script>alert('This Email Already Exists.')</script>";
		// }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href = "formstyle.css" rel = "stylesheet" type = "text/css"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Patient SignUp</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
        <h1>Patient Details</h1>
        
            <!-- <p class="login-text" style="font-size: 2rem; font-weight: 800;">Patient Details</p> -->
			<div class="input-group">
				<input class="form-control" type="text" placeholder="FirstName" name="firstname" value="<?php echo $firstname; ?>" required>
			</div>
            <div class="input-group">
				<input class="form-control" type="text" placeholder="LastName" name="lastname" value="<?php echo $lastname; ?>" required>
			</div>
			<div class="input-group">
				<input class="form-control"type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input class="form-control"type="password" placeholder="Password" name="password_2" value="<?php echo $_POST['password_2']; ?>" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">SignUp</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login-patient.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>