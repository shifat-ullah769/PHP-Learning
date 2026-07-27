<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  /** @var mysqli $conn */
  $username = $_POST['username'];
  $password = $_POST['password'];

  // $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
  $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if($num ==1){
    while($row = mysqli_fetch_assoc($result)){
      if(password_verify($password, $row['password'])){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = $username;
        header("location: /PHP-Learning/PHP%20Login%20System/welcome.php");
        exit();
      }else{
        $showError = "Invalid credintials";
      }
    }
  }else{
    $showError = "Invalid credintials";
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </style>
    <title>Log in page</title>
  </head>
  <body>
    <?php  require 'partials/_nav.php'  ?>
    <?php
    if($login){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your are now logged in.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    if($showError){
    echo'
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> '. $showError .'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    ?>

    <div class="container d-flex flex-column align-items-center my-4">
      <h1>Log in to our website</h1>
      <form class="w-50" action="/PHP-Learning/PHP%20Login%20System/login.php" method="post">
        <div class="form-group ">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username"  placeholder="Enter username">
        </div>
        <div class="form-group ">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button  type="submit" class="btn btn-primary w-100">Log in</button>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>