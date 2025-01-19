<?php
    require 'config.php';
    $r_username = $_POST['username'];
    $r_pass = $_POST["password"];
    $r_con_pass = $_POST["confirmPassword"];
    $r_email = $_POST["email"];

    $insert_query ="INSERT INTO `users`(`username`, `email`, `password_hash`) VALUES ('$r_username','$r_email','$r_pass')";
    

    $duplicate_email = mysqli_query($conn,"SELECT * FROM `users` WHERE email='$r_email'");

    if(strlen($r_username)<3 || strlen($r_username)>20){
        echo "<script>alert('User Name should be 3-20 char!!!!')</script>";
        echo "<script>location.href='/registrationn.php'</script>";
    }
    else if($r_pass !== $r_con_pass){
        echo "<script>alert('Pass and con-pass is not matching!!')</script>";
        echo "<script>location.href='/registrationn.php'</script>";
    }
    else if(mysqli_num_rows($duplicate_email)>0){
        echo "<script>alert('email already taken!!')</script>";
        echo "<script>location.href='/registrationn.php'</script>";
    }
    else{
        if(!mysqli_query($conn,$insert_query)){
            echo "<script>alert('Not Inserted!!')</script>";
            die("not inserted!!");
        }
        else{
            echo "<script>alert('Inserted!!')</script>";
            echo "<script>location.href='../login.php'</script>";
        }
    }
?>