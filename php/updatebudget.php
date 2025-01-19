<?php
    include 'config.php';
    $id = $_POST['id'];
    $budget= $_POST['budget'];

    $updateQuery = "UPDATE `users` SET `budget`='$budget' WHERE `id`='$id'";

    if(mysqli_query($conn,$updateQuery)){
        echo "<script>alert('Updated!!! !!')</script>";
        echo "<script>location.href='../dashboard.php'</script>";
    }else{
        echo "<script>alert('not Updated!!! !!')</script>";
    }
?>