<?php
    include 'config.php';
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `expenses` WHERE `id` = '$id'";
    mysqli_query($conn,$deleteQuery);
    echo "<script>location.href='/dashboard.php'</script>";
?>