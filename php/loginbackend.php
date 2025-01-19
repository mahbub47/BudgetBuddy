<?php
if(isset($_POST['login'])){
    include 'config.php';
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '$email' AND `password_hash` = '$pass'");

    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['email'] = $email; //session create
        echo "<script>location.href='../dashboard.php'</script>";
        exit;
    }
    else{
        echo "<script>alert('Invalid username and Password!!')</script>";
        echo "<script>location.href='../login.php'</script>";
    }
}

?>