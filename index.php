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

   <!-- <script src="./CS.js"></script> -->
</head>
<body>
  <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light  sticky-top"> 

        <a class="navbar-brand" href="#">E-Dental Pro
          <img src="logo(1).png" width="40" height="40" alt="">
        </a>  
          <!--Logo -->
        <!-- <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="index.php">
            
          </a>
      </nav> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item active">

              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="about.php"  role="button" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="about.php">Our Clinic</a>
                <a class="dropdown-item" href="#">Our Dentists</a> -->
                <!-- <div class="dropdown-divider"></div> -->
               
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
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div> -->
        
      </nav>
      <!-- <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">

      </a>
    </nav> -->

<!-- CAROUSEL -->
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="bofu-shaw-G4SOKpR-Uoc-unsplash.jpg" alt="First slide">
            <div class="carousel-caption">
              <h2>Need a Great Dentist Who Is Caring And Gentle? Book Your Dental Appointment Now!</h2>
              <p>Whether you need a scale & clean, emergency dental, or cosmetic dental treatment, the professional team at eDental will care for you.</p>
             <a href ="login-patient.php"> <button  type="button" class="btn btn-primary btn-lg">Book Online</button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="front.jpg" alt="Second slide">
            <div class="carousel-caption"></div>
            <div class="carousel-caption">
            <!-- <h1>Interact with our professional Dentists!</h1>  -->
            
          </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="caroline-lm-8BkF0sTC6Uo-unsplash.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="frnew.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

  <!-- CONTENT  -->
  <!-- DENTAL TREATMENT ICONS -->
  <div class="icon-bar">
  <a href ="login-patient.php"> <button  type="button" class="btn btn-primary btn-lg">Book Online</button></a>
  </div>
  <style>
/* body {margin:0;height:2000px;} */

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  margin-right:  1px;;
}

.icon-bar a {
  display: block;
  text-align: left;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
  
}

.icon-bar a:hover {
  background-color: #000;
} </style>
 
  <div class = "categories"> 
        <div class = "container">
          <h1 class = "title">What Dental Treatment Do You Require?</h1> 
      
        <tr><td>
          <a href='regular_checkups.php'>
            <i class= "fas fa-user-check"></i>
            <h4>Regular Checkups</h4> 
            </td><td>
          <a href='emergency_dentistry.php'>
            <i class="fas fa-plus-circle"></i>
            <h4>Emergency Dentistry</h4> 
            </td><td>
            <a href='general_and_family.php' >
              <i class="fas fa-grin-alt"></i>
              <h4>General and Family</h4> 
              </td><td>
              <a href='wisdomteeth.php'>
                <i class="fas fa-grimace"></i>
                <h4>Wisdom Teeth</h4>
                </td></tr><td>
          <a href='dental_crowns.php'>
            <i class= "fas fa-crown"></i>
            <h4>Dental Crowns</h4>
            </td><td>
          <a href='root_canal.php'> 
              <i class="fas fa-teeth-open"></i> 
              <h4>Root Canal</h4>
              </td><td>
          </a> 
          <a href='dental_fillings.php'>
            <i class="fas fa-tooth"></i>
            <h4>Dental Fillings</h4>
            </td><td>
              <a href='cosmetic_dentistry.php' >
                <i class="fas fa-grin-stars"></i>
                <h4>Cosmetic Dentistry</h4>
                </td></tr>
              </a>
          </a>
        
</div>
</div>
<!-- DENTISTS SLIDER SECTION -->
<section  class = "my-5">
    <div  class = "py-5">
    <div id = "ABC" class = "container-fluid">
      <div class = "row">
        <div class = "column1">    
          <div class = "col-lg-6 col-md-6 col-12">
            <h1>Our Dentists are here for you!</h1> 
             <div   class = "py-4"> 
              <li>Open 7 days a week, 9am - 9pm</li>
              <li>Qualified and experienced Dentists</li>
              <li>Preferred Health Fund providers for Bupa (Platinum member), HBF, Medibank, HCF, NIB, CBHS & more</li>
              <li>Brand new, purpose built, comfortable & relaxing dental practice</li>
              <li>State of the art technology</li>
            </div>
           </div> </div>  
    
    <div class = "col-lg-6 col-md-6 col-12">
      <div class = "column2">
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="Ayeshaa.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="Dummy.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="Dummyy2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="areeb.jpeg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="warisha.jpeg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</section>

    <br>
<!-- Blog -->
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-8 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <!-- <span class="subheading">Blog</span> -->
            <h1 class="mb-4"> DENTAL RESOURCES AND ARTICLES</h1>
            </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url(img.1.jpg);">
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="readmore.php">The Importance Of Regular Checkups</a></h3>
                <p>When it comes to the health of your teeth and gums, regular dental appointments are highly recommended...</p>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0"><a href="blog1.php" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <p class="ml-auto mb-0">
                    <!-- <a href="#" class="mr-2">Admin</a>
                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> -->
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">What Is The Best Mouthwash</a></h3>
                <p>When it comes to oral health, many people question the use of mouthwash. While mouthwash does not replace brushing and...</p>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0"><a href="blog2.php" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <!-- <p class="ml-auto mb-0"> -->
                    <!-- <a href="#" class="mr-2">Admin</a>
                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> -->
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_3.jpg');">
    
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Treating Dental Trauma in Children</a></h3>
                <p>When it comes to healthy teeth, kids are at moderate risk of having dental trauma. The most common causes of this...</p>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0"><a href="blog3.php" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <!-- <p class="ml-auto mb-0">
                    <a href="#" class="mr-2">Admin</a>
                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> -->
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
<br>
<!-- Ask us a question -->
<section id="FAQ" class="ftco-section ftco-no-pt ftco-no-pb contact-section">
<h1>Question? Ask us here!</h1>
<p> Please ask any specific question you have here, and one of our friendly dental team will shortly respond to you with an answer</p>
      <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
          <div class="col-md-8 p-5 p-md-5 order-md-last bg-light">
          
            <form id ="myform" action="index.php"method="POST">
            
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
          <!-- <div class="col-md-6 d-flex align-items-stretch">
            <div id="map"></div>
          </div>
        </div> -->
      </div>
    </section>


<!-- Footer -->
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
</html>

<!-- PHP CODE OF PATIENT MESSAGE FORM -->
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
