<?php include ('patientpanel.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="stylepat.css">
	<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
</head>

<header>
<h1><span>Patient Booking</span></h1>
		<nav>
		<ul> 
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="index.php">Logout</a></li>
		</ul>
		</nav>
</header>

<body>
<style>
			body {
			background-image: url(bg.png);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			}
			</style>

	<div class="header">
	<h2>Book Appointment</h2>
</div>


<form method="post" action="book.php">

<?php include ('errors.php');?>


	<form action="patientpanel.php" method="post">

		<div class="input-group">
			<label>Category</label>
			<select name="categorey" class = "cat">
				<option value="SeniorDentist" >SeniorDentist</option>
				<option value="JuniorDentist">JuniorDentist</option>
				<option value="Consultant">Consultant</option>
			</select>
		</div>

		<div class="input-group">
			<button type="submit" name="Search" class="btn">Search</button>
		</div>



	<?php  
	 if (isset($_POST['Search'])) {

	$categorey = mysqli_real_escape_string($conn,$_POST['categorey']);
	
	$query2="SELECT * FROM dentist_info WHERE category=('$categorey')";
	$result2=mysqli_query($conn,$query2);
	?>
	
		<div class="input-group"> 

			<label>Dentist Name</label>

		<select class = "cat" name="den_name">
			
	<?php   while ($row2=mysqli_fetch_assoc($result2)) {
		?>
		
	 
		<option> <?php echo $row2['first_name'] ?> </option>
		
	   
	  
	   <?php 

	} ?>
	 </select>
	 </div>


	<div class="input-group">
		<label>CNIC *(format of 13 no's: 1234512345671)</label>
		<input type="text" name="AppoCNIC" pattern="[0-9]{5})([0-9]{7})([0-9]{1}">

	</div>


	<div class="input-group">
		<label>Date</label>
		<input type="Date" name="Date">

	</div>

	<div class="input-group">
		<label>Time (Open 7 days, from <strong> 9am-9pm*</strong>)</label>
		<input type="Time" name="Time">
	</div>


	<div class="input-group">
	 <label>Reason</label>
	<select type = "text" name="Cause" class="cat">
	   		<option value="Toothache" >Toothache</option>
	   		<option value="Checkup and clean-New patient">Checkup and clean-New patient</option>
	   		<option value="Checkup and clean-Under 18 child">Checkup and clean-Under 18 child</option>
	   		<option value="Checkup and clean-Existing patient">Checkup and clean-Existing patient</option>
	   		<option value="Emergency -child">Emergency -child</option>
			<option value="Consultation">Consultation</option>
			<option value="Periodontal Treatment">Periodontal Treatment</option>

	   	</select>


	</div>

	 <div class="input-group">
			<button type="submit" name="Book" class="btn">BOOK</button>
			</div>
			<?php  
}


	    ?>


</form>
</body>
</html>