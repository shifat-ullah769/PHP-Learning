<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .category-img {
            height: 200px;
            object-fit: cover;
        }
    </style>
    <title>uDoubt-Ask your doubts</title>
</head>

<body class="d-flex flex-column" style="min-height: 100vh;">
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php
    function timeAgo($datetime)
    {
        $timestamp = strtotime($datetime);
        $diff = time() - $timestamp;

        if ($diff < 60) {
            return "just now";
        } elseif ($diff < 3600) {
            $minutes = floor($diff / 60);
            return $minutes . " minute" . ($minutes > 1 ? "s" : "") . " ago";
        } elseif ($diff < 86400) {
            $hours = floor($diff / 3600);
            return $hours . " hour" . ($hours > 1 ? "s" : "") . " ago";
        } elseif ($diff < 2592000) {
            $days = floor($diff / 86400);
            return $days . " day" . ($days > 1 ? "s" : "") . " ago";
        } elseif ($diff < 31536000) {
            $months = floor($diff / 2592000);
            return $months . " month" . ($months > 1 ? "s" : "") . " ago";
        } else {
            $years = floor($diff / 31536000);
            return $years . " year" . ($years > 1 ? "s" : "") . " ago";
        }
    }
    ?>


    <?php
    $id = $_GET["threadid"];
    /** @var mysqli $conn */
    $sql = "SELECT * FROM `threads` WHERE thread_id= $id";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while ($rows = mysqli_fetch_assoc($result)) {
        $noResult = false;
        $title = $rows['thread_title'];
        $desc = $rows['thread_desc'];
    }

    ?>


    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        //Insert comment in db
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);

        $user_email = $_SESSION['email'];
        $sql_user = "SELECT user_id FROM `users` WHERE user_email = '$user_email'";
        $result_user = mysqli_query($conn, $sql_user);
        $user_data = mysqli_fetch_assoc($result_user);
        $user_id = $user_data['user_id'];

        $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$user_id', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong>Your comment has been added. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            ';
        }
    }
    ?>

    <!-- Category container starts here. -->

    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo "$title"; ?></h1>
            <p class="lead"><?php echo "$desc"; ?></p>
            <hr class="my-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid repellat cum voluptatum explicabo suscipit consequuntur alias doloremque ratione velit distinctio.
            <p>
                Posted by: <b>Harry</b>
            </p>
        </div>
    </div>


    <?php

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo '
        <div class="container">
        <h1 class="py-2">Post a comment.</h1>
        <form action="' .  $_SERVER['REQUEST_URI'] . '" method="post">
            <div class="form-group">
                <label for="comment">Write your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form>
        </div>';
    } else {
        echo '
        <div class="container">
            <h1 class="py-2">Post a comment</h1>
            <p class="lead">You are not logged in. You have to be logged in to post a comment.</p>
        </div>';
    }

    ?>



    <div class="container">
        <h1 class="my-2">Discussions</h1>

        <?php
        $id = $_GET["threadid"];
        /** @var mysqli $conn */
        $sql = "SELECT * FROM `comments` WHERE thread_id= $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($rows = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $content = $rows['comment_content'];
            $time = $rows['comment_time'];
            $comment_by = $rows['comment_by'];
            $comment_id = $rows['comment_id'];
            $comment_user_id = $rows['comment_by'];
            $sql2 = "SELECT user_email FROM `users` WHERE user_id = '$comment_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $rows2 = mysqli_fetch_assoc($result2);


            echo '<div class="media my-3">
            <img class="mr-3" src="img/default_user.jpg" alt="Generic placeholder image" style="width: 54px;">
            <div class="media-body">
                ' . $content . '
                <p class="font-weight-bold my-0">Responder: ' . $rows2['user_email'] . ' at ' . timeAgo($time) . '</p>
            </div>
            </div>';
        }

        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="display-4">No Threads Yet.</p>
                    <p>Be the first person to comment on a question.</p>
                    </div>
                </div>';
        }

        ?>


    </div>


    <?php include 'partials/_footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>