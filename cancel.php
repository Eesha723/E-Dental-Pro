<?php include 'patientpanel.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link type="text/css" rel="stylesheet"  href="stylepat.css">
	<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet"> -->
</head>

<header>
<h1><span>Patient Booking</span></h1>
		<nav>	
		<ul> 
			<li><a href="book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="index.php">Logout</a></li>
		</ul>
	</nav>
</header>

<body>


	
<form method="post" action="cancel.php">

	<?php include ('errors.php') ;?>

	<div class="input-group">
		<label>Your CNIC</label>
		<input type="text" name="AppoID2" pattern="[0-9]{5})([0-9]{7})([0-9]{1}" >

	</div>

	<div class="input-group">
		<button type="submit" name="cancel" class="btn">Cancel</button>
	</div>

	</form>


</body>
</html>


