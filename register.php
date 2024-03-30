<?php
include 'conn.php';
$user=$_POST['username'];
$em=$_POST['email'];
$pass=$_POST['password'];
$conf=$_POST['conf'];
$sql="INSERT INTO users ('username','email','password','conf') VALUES ('$user','$em','$pass','$conf')";
if(pass===conf){
    mysqli_query($conn,$sql);
    session_start();

    $_SESSION['username']=$user;
    $_SESSION['email']=$em;

    header("location:");
    echo"user has registreted successfully!";
}
else{
    echo"password do not match";
}