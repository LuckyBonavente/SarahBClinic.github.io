<?php
include 'php/connection.php';
include 'session.php';
$serv=$_POST['service'];
$date = date('Y-m-d H:i:s');
$appointDate=$_POST['date_appoint'];
$appointTime=$_POST['time_appoint'];

$sql = "INSERT INTO `appointment`(`mem_id`, `service`, `dateNow`, `appointDate`, `appointTime`, `status`) 
    VALUES ('$loggedin_id','$serv','$date','$appointDate','$appointTime','Pending')";
$sql2 = "INSERT INTO `transaction`(`mem_id`, `appointDate`, `appointTime`, `payment_status`)
    VALUES ('$loggedin_id','$appointDate','$appointTime','Unpaid')";
$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);

if( $serv == "" && 
isset( $_POST['date_appoint'] ) && trim( $_POST['date_appoint'] ) !== "" && trim( $_POST['date_appoint'] ) !== "0000-00-00" || !isset( $_POST['date_appoint']) &&
isset( $_POST['time_appoint'] ) && trim( $_POST['time_appoint'] ) !== "") { 
    header("Location: reservation.php?msg=Please fill in the information");
}
if( $appointDate == null && $appointTime == null){
    header("Location: reservation.php?msg=Please fill in the information");
}
else if($result== true && $result2 == true){
    //echo '<script>alert("Appointment has been made. Please wait for the confirmation.")</script>';
    header("Location: reservation.php?msg=Appointment has been made successfully");
}
else{
    echo "Failed: " . mysqli_error($con);
}
?>