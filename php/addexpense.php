<?php
    include 'config.php';

    session_start();

    $usermail = $_SESSION['email'];
    $user = mysqli_query($conn,"SELECT `id` FROM `users` WHERE `email` = '$usermail'");
    $rowuser = $user->fetch_assoc();
    $userid = $rowuser['id'];

    $category= $_POST['category'];
    $amount = $_POST['amount'];
    $expense_date = $_POST['expense_date'];

    $insertQuery = "INSERT INTO `expenses`(`user_id`, `category`, `amount`, `expense_date`) VALUES ('$userid','$category','$amount','$expense_date')";

    if(mysqli_query($conn,$insertQuery)){
        echo "<script>location.href='/dashboard.php'</script>";
    }

?>