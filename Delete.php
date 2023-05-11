<?php

    include "config.php";
    $id = $_GET['id'];
    $mysql = "Delete from users where id = '$id'";
    
    $result = mysqli_query($conn,$mysql);
    if($result){
        header("Location:list.php");
    }
    else{
        echo "Error".mysqli_error($conn);
    }
    

?>