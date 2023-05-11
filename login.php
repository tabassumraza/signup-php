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
    <form method="post" class="w-50 bg-light text-dark rounded mx-auto mt-5">
        <h1>Login.</h1>
        <input type="text" name="username" class="form-control" placeholder="Enter Email"><br>
        <input type="password" name="pass" class="form-control" placeholder="Enter Password"><br>
        <?php
        session_start();
        include "config.php";
        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $pass = $_POST["pass"];

            $mysql = "SELECT * from `users` where Email = '$username' AND `Password` = '$pass'";
            $result = mysqli_query($conn,$mysql);
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)>0){
                $_SESSION["u_Id"] = $row["Id"];
                $_SESSION["u_name"] = $row["Firstname"]. " ". $row["Lastname"];
                header("Location:index.php");
            }
            else{
                echo "<p class='text-danger'>Login denied</p>";
            }
        }

    ?>  

        <button type="submit" name="login" class="btn btn-info w-50 mx-auto">Login</button>
    </form>
    
</body>
</html>