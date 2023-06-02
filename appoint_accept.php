<?php
include 'php/connection.php';
 $id = $_GET['id'];
    $sql = "UPDATE `appointment` SET status='Accepted' WHERE mem_id=$id";
    
    $result = mysqli_query($con, $sql);
    
    if($result){
        header("Location: index_sched.php?msg=Data updated successfully");
    }
    else{
        echo "Failed: " . mysqli_error($con);
    }
?>


