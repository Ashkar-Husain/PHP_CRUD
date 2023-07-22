<?php 
include 'connection.php';
$userid = $_GET['id'];
// print_r($userid);
$sql = "DELETE FROM `user21` where `id`={$userid}";
$query = mysqli_query($conn,$sql) or die("Query Failed");
header('Location:http://localhost/crud21/index.php');
connection_close($conn);

?>