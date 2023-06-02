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
</head>

<body>
  <?php
  include_once 'php/connection.php';
  ?>

    <!-- Header Section -->

    <header class="header_section">
      <div class="container-fluid" >
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
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
                  <a class="nav-link2" href="index.php">Home <span class="sr-only">(current)</span></a>&nbsp
                </li>
                <li class="nav-item">
                  <a class="nav-link2" href="index.php #services">Our Services & Treatment </a>&nbsp
                </li>
                <li class="nav-item">
                  <a class="nav-link2" href="index.php #contact">Contact us</a>
                </li>
              </ul>
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="">
                  <img src="images/user.png" alt="">
                  <span>
                    Login
                  </span>
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Login Section -->

    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="logreg_container">
            <form method="post" action="connect-pass.php"class="center">
              <h1>Password Reset</h1>
              <div class="txt_field">
                <input type="text" required name="username" id="username">
                <span></span>
                <label>Username</label>
              </div>
              <div class="txt_field">
                <input type="password" required name="newpass" id="newpass">
                <span></span>
                <label>New Password</label>
              </div>
              <div class="txt_field">
                <input type="password" required name="conpass" id="conpass">
                <span></span>
                <label>Confirm Password</label>
              </div>
              <input type="submit" value="Change Password">
              <div class="signup_link">
              Go back to <a href="login.php">Login</a>
              </div>
            </form> 
          </div>
        </div>
      </div>
    </div>

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
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php #services"> Our Services & Treatment </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php #contact"> Contact </a>
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
  </script>
</body>

</html>