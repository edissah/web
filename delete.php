<?php
include 'conn.php';
$id=$_GET['demo'];
$sql="DELETE FROM `employee` WHERE  `id`='$id'";
if(mysqli_query($conn,$sql))
{
    header("location:select.php");

}
?>