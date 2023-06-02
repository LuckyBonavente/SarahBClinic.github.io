<?php 
session_start();
include('php/connection.php');
$username=$_POST['txtuserName'];
$result = mysqli_query($con,"SELECT * FROM user WHERE userName='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: register.php?remarks=failed"); 
}else {
 $fname=$_POST['txtfName'];
 $lname=$_POST['txtlName'];
 $email=$_POST['txteMail'];
 $phone=$_POST['txtphone'];
 $address=$_POST['txtaddress'];
 $bday=$_POST['txtbday'];
 $username=$_POST['txtuserName'];
 $password=$_POST['txtpassword'];
 if(mysqli_query($con,"INSERT INTO user(firstName, lastName, emailAd, phone, address, birthDate, userName, passWord, userType, bloodGrp, bloodPress, temp, pulseRt, weight, height)VALUES('$fname', '$lname', '$email', '$phone', '$address', '$bday', '$username', '$password', 'user', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A')")){ 
 header("location: register.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: register.php?remarks=error&value=$e");  
 }
}
?>