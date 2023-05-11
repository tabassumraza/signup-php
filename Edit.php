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
        <?php
            include "config.php";
            $id = $_GET['id'];
            $mysql = "SELECT * FROM users where Id = '$id'";
            $result = mysqli_query($conn,$mysql);
            $row = mysqli_fetch_assoc($result);

        ?>
    <form method="post" class="w-50 bg-light text-dark rounded mx-auto mt-5">
        <h1>Edit.</h1>
        <input type="text" name="fname" class="form-control" value="<?php echo $row["Firstname"]?>" placeholder="Enter Firstname"><br>
        <input type="text" name="lname" class="form-control" value="<?php echo $row["Lastname"]?>" placeholder="Enter Lastname"><br>
        <input type="text" name="email" class="form-control" value="<?php echo $row["Email"]?>" placeholder="Enter Email"><br>
        <input type="password" name="pasword" class="form-control" value="<?php echo $row["Password"]?>" placeholder="Enter Password"><br>
        <input type="text" name="city" class="form-control" value="<?php echo $row["City"]?>" placeholder="Enter City"><br>

        <button type="submit" name="submit" class="btn btn-info w-50 mx-auto">Save changes</button>
    </form>

    <?php
        if(isset($_POST["submit"])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pasword = $_POST['pasword'];
            $city = $_POST['city'];
            $mysql1 = "UPDATE `users` set Firstname = '$fname', Lastname = '$lname',Email='$email',`Password` = '$pasword',City = '$city' where Id = '$id'";
            $result1 = mysqli_query($conn,$mysql1);
            header("Location:list.php");
        }


    ?>
</body>
</html>