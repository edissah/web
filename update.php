<?php
include('conn.php');
$b=$_POST['first_name'];
$c=$_POST['last_name'];
$d=$_POST['EmailAdress'];
$e=$_POST['city'];
$id=$_POST['id'];
$sql=mysqli_query($conn,"UPDATE  `employee` SET `first_name`='$b',`last_name`='$c',`EmailAdress`='$d',`city`='$e' where `id`='$id'") ;
 if($sql){
echo "Updated!";

}
?>