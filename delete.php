<?php
include 'php/connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `user` WHERE mem_id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: record.php?msg=Record deleted successfully");
}
else{
    echo "Failed: " . mysqli_error($con);
}
?>