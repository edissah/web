<?php
include 'conn.php';
$user=$_POST['username'];
$em=$_POST['email'];
$pass=$_POST['password'];
$conf=$_POST['conf'];
$sql="SELECT * FROM WHERE 'email'='$em' and password='$pass'";
$result=mysqli_query($conn,$sql)
if(mysqli_num_rows($result)>0){
    foreach ($result as $row ){
    session_start();

    $_SESSION['user']=$row['username'];
    $_SESSION['em']=$row['em'];

    header("location:dashboard.php");{
    echo"user has registreted successfully!";
}
else{
    echo"password do not match";
}
    }
}
?>