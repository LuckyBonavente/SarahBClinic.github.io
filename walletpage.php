<?php
include('session.php');
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
          <a class="navbar-brand" href="walletpage.php">
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
                  <a class="nav-link2" href="profilepage.php">Profile <span class="sr-only">(current)</span></a>&nbsp
                </li>
                <li class="nav-item">
                  <a class="nav-link2" href="appointment.php">Appointment </a>&nbsp
                </li>
                <li class="nav-item">
                  <a class="nav-link2" href="walletpage.php">Wallet</a>&nbsp
                </li>
                <li class="nav-item">
                <a class="nav-link2" href="reservation.php">Consultation</a>
              </li>
              </ul>
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="index.php">
                  <img src="images/user.png" alt=""> 
                  Logout 
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>

  <!-- Wallet Section -->

  <div class="container layout_padding4">
  <div class="text-center mb-4">
    <br>
    <h2>Wallet</h2>
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
          <th scope="col">Appointment Date</th>
          <th scope="col">Appointment Time</th>
          <th scope="col">Payment Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'php/connection.php';
        $sql = "SELECT `mem_id`,  `appointDate`, `appointTime`, `payment_status` FROM `transaction` WHERE mem_id=$loggedin_id";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['mem_id'] ?></td>
                    <td><?php echo $row['appointDate'] ?></td>
                    <td><?php echo $row['appointTime'] ?></td>
                    <td><?php echo $row['payment_status'] ?></td>
                    <td>
                      <div id="paypal-button-container" class="mt-3"></div>
                    </td>
                </tr>
                <?php
            }
        ?>
      </tbody>
    </table>
</div>
</section>

    <!-- Footer Section -->

<section class="info_section layout_padding4">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="info_menu">
          <h4>
            Menu
          </h4>
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="profilepage.php">Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appointment.php">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="walletpage.php">Wallet </a>
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
  </script>

   <!-- Replace "test" with your own sandbox Business account app client ID -->
   <script src="https://www.paypal.com/sdk/js?client-id=AR_QzPkV3S7-xG0KdvZzuW-qofXYQUGyBo_pNdMdNA5pbbHkVxDf8Jr-fpe_oURQ2QrwBVvn8C52Mywn&currency=PHP"></script>

<script>
      paypal.Buttons({
        // Order is created on the server and the order id is returned
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '500.00'
            }
            }],
          })
        },
        // Finalize the transaction on the server after payer approval
        onApprove: (data,actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

            /*$.ajax({
              method: "POST",
              url: "payment_status.php",
              data: data,
              success: function(response){
                if(response == 201)
              }
            });*/
            var payment_status=$("#payment_status").val();
            $.ajax({
                        url:'payment_status.php',
                        method:'POST',
                        data:{
                            payment_status:payment_status,
                        },
                        success:function(response){
                            location.reload();
                        }
                    });

            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  window.location.href = 'thank_you.html';
          });
        }
      }).render('#paypal-button-container');
    </script>
</body>

</html>