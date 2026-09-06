```php
<?php
session_start();

$showError = "";

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

            $showError = "Invalid password. Please try again.";

        }

    }else{

        $showError = "Email address is not registered.";

    }

    header("Location: /PHP-Learning/Forum%20Project/index.php?loginsuccess=false&error=" . urlencode($showError));
    exit();
}

?>
```
