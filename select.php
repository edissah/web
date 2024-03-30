<?php
include 'conn.php';
$sql=mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>EmailAdress</th>
        <th>city</th>
            <th>action<th>
        </tr>
        <?php
        while ($row=mysqli_fetch_assoc($sql)) {
        ?>
         <tr>
            <td><?php echo $row ['id']; ?></td>
            <td><?php echo $row ['first_name']; ?></td>
            <td><?php echo $row ['last_name']; ?></td>
            <td><?php echo $row ['EmailAdress']; ?></td>
            <td><?php echo $row['city'];?></td>
            <td>
             <button><a href="edit.php?demo=<?php echo $row ['id']; ?>">EDIT</a></button>
              <button><a href="delete.php?demo=<?php echo $row ['id']; ?>">DELETE</a></button>

            </td>

         </tr>
         <?php
        }
         ?>
    </table>
</body>
</html>