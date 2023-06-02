<?php
include("php/connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($con,$_POST['username']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
 $result = mysqli_query($con,"SELECT * FROM user WHERE userName='$username' AND userType='user'" );
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$username) {
  header("location: login.php?remark_login=failed");
 }
 $sql="SELECT mem_id FROM user WHERE userName='$username' and passWord='$password' AND userType='user'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 /*$active=$row['active'];*/
 $count=mysqli_num_rows($result);
 
 if($count==1) {
  $_SESSION['login_user']=$username;
  header("location: profilepage.php");
 }
}
?>