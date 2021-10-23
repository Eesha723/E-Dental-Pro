<?php include 'patientpanel.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="stylepat.css">
	<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet"> -->
</head>

<header>
<h1><span>Patient Booking</span></h1>
		<nav>
		<ul> 	
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
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
	<h1>My Appointments</h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>CNIC</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>Dentist Name</th>
		<th>Reason</th>
		<th>Category</th>
		</tr>
		<?php $sql3="SELECT  * FROM patientappo , dentist_info WHERE pID= ('$userprofile') AND den_name=first_name ";
		$result3=$conn->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["app_ID"]."</td><td>".$row3["appCNIC"]."</td><td>".$row3["App_date"]."</td><td>".$row3["App_time"]."</td><td>".$row3['first_name']."</td><td>".$row3['App_cause']."</td><td>".$row3["category"]."</td></tr>";
			}


			echo "</table";

		}

		?>
		
	</table>

</body>
</html>

