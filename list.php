<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <table class="table bordered p-4 bg-light mx-auto w-75 mt-5">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>City</th>
            <th>Operations</th>
        </tr>
        <?php
            include "config.php";
            $mysql = "SELECT * FROM users";
            $result = mysqli_query($conn,$mysql);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>".
                $row["Firstname"].
                "</td><td>".$row["Lastname"].
                "</td><td>".$row["Email"].
                "</td><td>".$row["City"].
                "</td>";

        ?>
        <td>
        <a class="btn btn-success" href="Edit.php?id=<?php echo $row['Id']?>">Edit</a>
        <a class="btn btn-danger" href="Delete.php?id=<?php echo $row['Id']?>">Delete</a>
        </td>
        <?php
            }
        ?>

        
    </table>
</body>
</html>