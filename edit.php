<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wvalueth=device-wvalueth, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'conn.php';
    $value=$_GET['demo'];
    $sql=mysqli_query($conn,"SELECT * FROM  employee WHERE id='$value'");
    while($row=mysqli_fetch_array($sql)){
    ?>
    <form action="update.php" method="POST">
    <label for="">FIRST_NAME</label>
        <input type="hidden" name="id" value="<?php echo $row ['id']; ?>"><br><br>
        <input type="text" name="first_name" value="<?php echo $row ['first_name']; ?>"><br><br>
        <label for="">LAST_NAME</label>
        <input type="text" name="last_name" value="<?php echo $row ['last_name']; ?>"><br><br>
        <label for="">EmailAdress</label>
        <input type="text" name="EmailAdress" value="<?php echo $row ['EmailAdress']; ?>"><br><br>
        <label for="">city</label>
        <input type="text" name="city" value="<?php echo $row['city'];?>"><br><br>
        <button>submit</button>
    </form>
    <?php
    }
    ?>
</body>
</html>