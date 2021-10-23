<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eDental-pro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href = "stylee.css" rel = "stylesheet" type = "text/css">
   <link rel = "stylesheet" href = "fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
<!-- NAVBAR -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-light  sticky-top"> 

<a class="navbar-brand" href="#">E-Dental Pro
  <img src="logo(1).png" width="40" height="40" alt="">
</a>  
 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav nav-pills nav-fill">
    <li class="nav-item active">

      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="about.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
        About
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Treatment
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="regular_checkups.php">Regular Checkups</a>
                <a class="dropdown-item" href="emergency_dentistry.php">Emergency Dentistry</a> 
                <a class="dropdown-item" href="general_and_family.php">General and Family</a> 
                <a class="dropdown-item" href="wisdomteeth.php">Wisdom Teeth</a> 
                <a class="dropdown-item" href="dental_crowns.php">Dental Crowns</a> 
                <a class="dropdown-item" href="root_canal.php">Root Canal</a> 
                <a class="dropdown-item" href="dental_fillings.php">Dental Fillings</a> 
                <a class="dropdown-item" href="cosmetic_dentistry.php">Cosmetic Dentistry</a> 
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
    
  </ul>
</nav>

    <!-- Ask us a question -->
<section id="FAQ" class="ftco-section ftco-no-pt ftco-no-pb contact-section">
<h1>Question? Ask us here!</h1>
<p> Please ask any specific question you have here, and one of our friendly dental team will shortly respond to you with an answer</p>
      <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
          <div class="col-md-8 p-5 p-md-5 order-md-last bg-light">
          
            <form id ="myform" action="contact.php"method="POST">
            
              <div class="form-group">
                <input name="Name" type="text" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input name="Email" type="text" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input name="Phone" type="text" class="form-control" placeholder="Phone" required>
              </div>
              <div class="form-group">
               <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Let us know how we can help you" required></textarea>
</div>
              <div class="form-group">
              <!-- <a href ="messagestore.php"> <button  name = "submit"type="button" class="btn btn-primary btn-lg">Send Message</button></a> -->
               <input name= 'submit' type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
      </div>
    </section>
    <?php
include 'config.php';

if(isset($_POST['submit']))
{
     $Name = $_POST['Name'];
     $Email = $_POST['Email'];
     $Phone = $_POST['Phone'];
     $message = $_POST['message'];

     $sql = "INSERT INTO patient_message (name, email, phone, p_message)
     VALUES ('$Name','$Email','$Phone','$message')";
    
     if (mysqli_query($conn, $sql)) {
     echo "<script>alert('Message Sent!')</script>";
     } else {
      echo "<script>alert('Message not Sent')</script>";
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h1 class="h4">Contact Information</h1>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          </div>
          <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Phone:</span> <a href="tel://1234567920">+92 336 78998765</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@edentalpro.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Website</span> <a href="#">edentalpro.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- !-- Footer --> 
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Important Links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="about.php"><i class="fa fa-angle-double-right"></i>About</a></li>
                    <li><a href="treatment.php"><i class="fa fa-angle-double-right"></i>Treatment</a></li>
                    <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Social</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="https://www.facebook.com"><i class="fa fa-angle-double-right"></i>Facebook</a></li>
                    <li><a href="https://www.instagram.com"><i class="fa fa-angle-double-right"></i>Instagram</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Book Your Appointment Now!</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="signup-patient.php"><i class="fa fa-angle-double-right"></i>SignUp Now!</a></li>
                    <li><a href="#FAQ"><i class="fa fa-angle-double-right page-scroll"></i>Need Help? Ask away!</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- ./Footer -->

<br>
<script src="./app.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="footer">
  <p>COPYRIGHT @ 2021 E-DENTAL PRO - PRIVACY POLICY</p>
</div>
</body>
<!-- <footer> -->

</footer>