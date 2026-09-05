<?php

$showError = "false";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_dbconnect.php';
    $email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupCpassword'];

    // Check wether this user exists
    /** @var mysqli $conn */
    $existSql = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "User already exist.";
    }else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `user_email`, `user_password`, `timestamp`) VALUES ( '$email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: /PHP-Learning/Forum%20Project/index.php?signupsuccess=true");
                exit();
            }else{
                echo mysqli_error($conn);
            }

        }else{
            $showError = "Password do not match.Try again!";
        }

    }
    header("Location: /PHP-Learning/Forum%20Project/index.php?signupsuccess=false&error=$showError");
}

?>