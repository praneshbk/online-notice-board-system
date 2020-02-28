<?php 
include('../connection.php');
$nid=$_GET['id'];
$aa="yes";
$q=mysqli_query($conn,"update  user set valid='$aa' where id='$nid'");

header('location:index.php?page=manage_users');

?>