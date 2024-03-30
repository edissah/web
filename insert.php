<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>                          
    <FORM Action="" method="POST">
    <h1>EMPLOY REGISTRATION</h1>
<label for="">first_name</label>
<input type="text" name="first_name"><br><br>

<label for="">last_name</label>
<input type="text" name="last_name" id=""><br><br>

<label for="">EmailAdress</label>
<input type="text" name="EmailAdress" id=""><br><br>

<label for="">city</label>
<input type="text" name="city" id=""><br><br>

<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
$b=$_POST['first_name'];
$c=$_POST['last_name'];
$d=$_POST['EmailAdress'];
$e=$_POST['city'];
$conn=mysqli_connect('localhost','root','','tost');
$sql=mysqli_query ($conn,(" INSERT INTO `employee`(`id`, `first_name`, `last_name`, `EmailAdress`, `city`) VALUES (NULL,'$b','$c','$d','$e')"));
if($sql==true){
echo "record inserted";
}
else{
    echo" record not inserted";
}
}
?>

</body>
</html>