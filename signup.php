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
    <form action="dbinsert.php" method="post" class="w-50 bg-light text-dark rounded mx-auto mt-5">
        <h1>Sign up.</h1>
        <input type="text" name="fname" class="form-control" placeholder="Enter Firstname"><br>
        <input type="text" name="lname" class="form-control" placeholder="Enter Lastname"><br>
        <input type="text" name="email" class="form-control" placeholder="Enter Email"><br>
        <input type="password" name="pasword" class="form-control" placeholder="Enter Password"><br>
        <input type="text" name="city" class="form-control" placeholder="Enter City"><br>

        <button type="submit" class="btn btn-info w-50 mx-auto">submit</button>
    </form>
</body>
</html>