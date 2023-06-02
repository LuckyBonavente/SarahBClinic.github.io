<?php
include 'php/connection.php';
include 'session.php';

$payment_status = $_POST['payment_status'];
$sql = "UPDATE `transaction` SET `payment_status`='Paid' WHERE mem_id=$loggedin_id";
$result = mysqli_query($con, $sql);
if($result== true){
  //echo '<script>alert("Appointment has been made. Please wait for the confirmation.")</script>';
  header("Location: walletpage.php");
}
else{
  echo "Failed: " . mysqli_error($con);
}
    

?>