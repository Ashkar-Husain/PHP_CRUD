<?php
if(isset($_POST)){
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userphone = $_POST['userphone'];
    $useraddress = $_POST['useraddress'];        
    include 'connection.php';           
    $sql = "UPDATE `user21` SET `username`='$username',`email`='$useremail',
    `phone`='$userphone',`address`='$useraddress' WHERE `id`='$userid'";
     $query = mysqli_query($conn,$sql) or die("Query Failed");
    header('Location:http://localhost/crud21/index.php');
    connection_close($conn);
    }             
?>