<?php
session_start();
$showError = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPassword'];

    $sql = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);
      $numRows = mysqli_num_rows($result);
    if($numRows == 1){
        $rows = mysqli_fetch_assoc($result);
        if(password_verify($pass, $rows['user_password'])){
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("Location: /PHP-Learning/Forum%20Project/index.php");
            exit(); 
        }else{
            header("Location: /PHP-Learning/Forum%20Project/index.php");
        }
    }
     header("Location: /PHP-Learning/Forum%20Project/index.php");
}

?>