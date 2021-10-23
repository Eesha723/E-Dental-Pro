<?php include ('adminpanel.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">
	<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet"> -->
</head>

<header>
	<h1> Dashboard</h1>
		<nav>
		<ul> 
			<li><a href="admin-index.php">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
  			<li><a href="Doctorpatient.php">Logout</a></li>

		</ul>
	</nav>

</header>
<body>

		<div class="headerA">
	<h2>Add Doctor</h2>
</div>

<form method="post" action="admin-index.php">

	<?php include ('errors.php'); ?>

	<div class="input-groupA">
		<label>Dentist ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Dentist First Name</label>
		<input type="text" name="addfirstname" >


	</div>
	
	<div class="input-groupA">
		<label>Dentist Last Name</label>
		<input type="text" name="addlastname" >


	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div>
	<div class="input-groupA">
		<label>Username</label>
		<input type="text" name="addusername">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add Doctor</button>
	</div>


</form>
	<div class="headerAD">
	<h2>Delete Doctor</h2>
</div>

<form method="post" action="admin-index.php" class="delete">

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>

</body>
</html>