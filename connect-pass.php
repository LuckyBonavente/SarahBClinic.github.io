<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','sarahb');

// get the post records
$txtUser = $_POST['username'];
$txtPass = $_POST['newpass'];
$txtCPass = $_POST['conpass'];

//$hash_pass = password_hash($txtPass, PASSWORD_DEFAULT);

$usercheck = mysqli_query($con, "SELECT `userName` FROM `user` WHERE userName = '$txtUser'");
if(mysqli_num_rows($usercheck)>0){
    if($txtPass == $txtCPass){
        $sql = "UPDATE `user` SET `passWord`='$txtPass' WHERE userName = '$txtUser'";
        $rs = mysqli_query($con, $sql);
        if($rs){
            echo '<script>alert("Password changed successfuly.");</script>';
            ?>
            <script language="javascript">
                window.location="login.php";
            </script>
            <?php
        }else{
            echo '<script>alert("Password change failed.");</script>';
            ?>
            <script language="javascript">
                window.location="register.php";
            </script>
            <?php
        }
    }else{
        echo '<script>alert("Password does not match.");</script>';
    }
}else{
    echo '<script>alert("Email does not exist");</script>';
}

?>