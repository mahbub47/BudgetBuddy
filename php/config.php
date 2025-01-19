<?php
    $serverName = "localhost:4206";
    $userName = "root";
    $password = "";
    $dbName = "final";

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        die("connection Faild :".mysqli_connect_error());
    }
    else{
        echo "<script>alert('DB connected!!!')</script>";
    }
?>