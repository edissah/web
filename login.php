<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form>
            <input type="button" name="log" value="sign-up">
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['log']))
$user=$_POST['username'];
$pass=$_POST['password'];
$conn=mysqli_query($conn,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
$fetch=mysqli_fetch_array($query);
if(is_array($fetch)){
    $_SESSION=['user name']=$fetch['username'];
    $_SESSION=['password']=$fetch['password'];
    if($_SESSION ==true)
header("location:loginform.php");{
    echo"login successfull";

}
}
?>
