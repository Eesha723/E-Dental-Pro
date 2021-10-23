<?php include 'adminpanel.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<!-- <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet"> -->
</head>

<header>
	<h1>Dashboard</h1>
		<nav>
		
		<ul> 
			
		
		
			<li><a href="admin-index.php">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<!-- <li><a href="searchdonoradmin.php">Search Donor</a></li>
						<li><a href="feedback.php">FeedBack</a></li> -->


			<li><a href="Doctorpatient.php">Logout</a></li>
			<!-- <li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li> -->
			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Doctors Information</h1>
	<table class="table4">
		<tr>
		<th>Doctor ID</th>
		<th>Doctor First Name</th>
		<th>Doctor Last Name</th>
		<th>Contact Number</th>
		<th>Username</th>
		<th>Password</th>

		</tr>

		<?php $sql3="SELECT  * FROM  dentist_info " ;
		$result3 = $conn->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["dentist_id"]."</td><td>".$row3["first_name"]."</td><td>".$row3['last_name']."</td><td>".$row3['phone']."</td><td>".$row3["username"]."</td><td>".$row3["D_password"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>