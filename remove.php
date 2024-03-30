<?php
include 'connect.php';
$id=$_GET['id'];
$sql= "DELETE FROM 'trainers WHERE 'id'='$id'";
if(mysqli_query($conn,$sql))
{
    header("location:select.php");
}
?>