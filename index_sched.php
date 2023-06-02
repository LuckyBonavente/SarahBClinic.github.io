<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Style -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link href="css/compile.css" rel="stylesheet" />
     <link href="css/responsive.css" rel="stylesheet" />

     <title>Sarah B. Ultrasound & Medical Clinic</title>
     <link rel="website icon" type="png" href="images/logo_sarahb.png"/>

</head>
<body>

<!-- Header Section -->

<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
        <a class="navbar-brand" href="appointmentsched.php">
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
                <a class="nav-link2" href="index_sched.php">Schedule</a>&nbsp
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

<!-- Appointment Schedule Section -->
 
<div class="container">
  <div class="text-center mb-4">
    <br>
    <h2>Appointments</h2>
  </div>
    <?php
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Mem ID</th>
          <th scope="col">Username</th>
          <th scope="col">Service</th>
          <th scope="col">Date Now</th>
          <th scope="col">Appoint Date</th>
          <th scope="col">Appoint Time</th>
          <th scope="col">Payment Status</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'php/connection.php';
            $sql = "SELECT user.mem_id, user.userName, appointment.service, appointment.dateNow, appointment.appointDate, appointment.appointTime, transaction.payment_status, appointment.status FROM user, appointment, transaction WHERE user.mem_id=appointment.mem_id AND appointment.mem_id = transaction.mem_id ORDER BY appointment.dateNow DESC";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th><?php echo $row['mem_id'] ?></th>
                    <td><?php echo $row['userName'] ?></td>
                    <td><?php echo $row['service'] ?></td>
                    <td><?php echo $row['dateNow'] ?></td>
                    <td><?php echo $row['appointDate'] ?></td>
                    <td><?php echo $row['appointTime'] ?></td>
                    <td><?php echo $row['payment_status'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td>
                      <a href="appoint_accept.php?id=<?php echo $row['mem_id'] ?>" class="link-dark"><i class="btn-success btn-sm">Accept</i></a>
                      <br>&nbsp<br>
                      <a href="appoint_reject.php?id=<?php echo $row['mem_id'] ?>" class="link-dark"><i class="btn-danger btn-sm">Reject</i></a>
                    </td>
                </tr>
                <?php
            }
        ?>
      </tbody>
    </table>
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
              <a class="nav-link" href="record.php">Records <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index_sched.php">Schedule </a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


