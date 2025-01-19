<?php
    include 'config.php';
    $id = $_POST['id'];
    $category= $_POST['category'];
    $amount = $_POST['amount'];
    $expense_date = $_POST['expense_date'];

    $updateQuery = "UPDATE `expenses` SET `category`='$category',`amount`='$amount',`expense_date`='$expense_date' WHERE `id`='$id'";

    if(mysqli_query($conn,$updateQuery)){
        echo "<script>alert('Updated!!! !!')</script>";
        echo "<script>location.href='../dashboard.php'</script>";
    }else{
        echo "<script>alert('not Updated!!! !!')</script>";
    }
?>