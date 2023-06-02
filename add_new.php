<?php
// Add Patient
 include "php/connection.php";
 if(isset($_POST["submit"])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $bday = $_POST['birthDate'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $bloodgrp = $_POST['bloodGrp'];
    $bloodpres = $_POST['bloodPress'];
    $temp = $_POST['temp'];
    $pulse = $_POST['pulseRt'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    
    $sql = "INSERT INTO `user`(`mem_id`,`firstName`, `lastName`, `emailAd`, `phone`, `address`, `birthDate`, `userName`, `passWord`, `userType`, `bloodGrp`, `bloodPress`, `temp`, `pulseRt`, `weight`, `height`) 
    VALUES (NULL, '$first_name','$last_name','$email','$phone','$address','$bday', '$user', '$pass', 'user', '$bloodgrp','$bloodpres','$temp','$pulse','$weight','$height')";
    
    $result = mysqli_query($con, $sql);
    
    if($result){
        header("Location: record.php?msg=New Record created successfully");
    }
    else{
        echo "Failed: " . mysqli_error($con);
    }
 }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Sarah B. Ultrasound & Medical Clinic</title>
  <link rel="website icon" type="png" href="images/logo_sarahb.png"/>

  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">
  <link href="css/compile.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Header Section -->

    <header class="header_section">
      <div class="container-fluid" >
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="record.php">
            <img src="images/logo_sarahb.png" alt="">
            <span>
              Sarah B. Ultrasound & Medical Clinic
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navigation Bar -->
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link2" href="record.php">Records <span class="sr-only">(current)</span></a>&nbsp
                </li>
                <li class="nav-item">
                  <a class="nav-link2" href="appointmentsched.php">Schedule</a>&nbsp
                </li>
                <li class="nav-item">
                  <a class="nav-link2" href="transaction.php">Transactions</a>
                </li>
              </ul>
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="index.php">
                  <img src="images/user.png" alt="">
                  <span>
                    Logout
                  </span>
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Records Section -->

    <br>
    <div class="container">
     <div class="text-center mb-4">
        <h3>Add New Patient</h3>
        <p class="text-muted">Complete the form below to add a new patient</p>
    </div>
     <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:58vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label">First Name: </label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan">
                </div>
                <div class="col">
                    <label class="form-label">Last Name: </label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. De La Cruz">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email: </label>
                    <input type="text" class="form-control" name="email" placeholder="Ex. Juan.DLC@mail.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username: </label>
                    <input type="text" class="form-control" name="username" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password: </label>
                    <input type="password" class="form-control" name="password" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone: </label>
                    <input type="text" class="form-control" name="phone" placeholder="Ex. 091234567890">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address: </label>
                    <input type="text" class="form-control" name="address" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Birth Date: </label>
                    <input type="date" class="form-control" name="birthDate" placeholder="">
                </div>
                <div class="col">
                    <label class="form-label">Blood Group: </label>
                    <input type="text" class="form-control" name="bloodGrp" placeholder="">
                </div>
                <div class="col">
                    <label class="form-label">Blood Pressure: </label>
                    <input type="text" class="form-control" name="bloodPress" placeholder="">
                </div>
                <div class="col">
                    <label class="form-label">Temperature: </label>
                    <input type="text" class="form-control" name="temp" placeholder="">
                </div>
                <div class="col">
                    <label class="form-label">Pulse Rate: </label>
                    <input type="text" class="form-control" name="pulseRt" placeholder="">
                </div>
                <div class="col">
                    <label class="form-label">Weight: </label>
                    <input type="text" class="form-control" name="weight" placeholder="Ex. 00kg">
                </div>
                <div class="col">
                    <label class="form-label">Height: </label>
                    <input type="text" class="form-control" name="height" placeholder="Ex. 00cm">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="record.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>
         </form>     
        </div>
</div>
<br>
        

<!-- Footer Section -->

<section class="info_section layout_padding3">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="info_menu">
          <h4>
            Menu
          </h4>
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="record.php">Records <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appointmentsched.php">Schedule </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaction.php"> Transactions </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info_news">
          <h4>
            Opening Hours
          </h4>
          <div class="detail-box">
            <h6>
              Monday - Saturday: 7am - 4pm
            </h6>
          </div>
          <br>
          <h4>
            Social Media Page
          </h4>
          <div class="social-container">
            <a href="https://www.facebook.com/SarahBUltrasoundMedicalClinic/">
              <img src="images/fb.png" alt="" class="s-1">
            </a>
            <a href="https://www.instagram.com/sb_ultrasound_medical_clinic/">
              <img src="images/instagram.png" alt="" class="s-3">
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_contact">
          <h4>
            Contact
          </h4>
          <div class="box">
            <div class="img-box">
              <img src="images/telephone-symbol-button.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                0945-608-1488
              </h6>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/email.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                sarahbultrasoundmedicalclinic@gmail.com
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/search.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>