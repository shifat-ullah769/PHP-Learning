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
    $id = $_GET["catid"];
    /** @var mysqli $conn */
    $sql = "SELECT * FROM `categories` WHERE category_id= $id";
    $result = mysqli_query($conn, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $catname = $rows['category_name'];
        $catdesc = $rows['category_description'];
    }

    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == 'POST'){
        //Insert thread in db
        $th_title = mysqli_real_escape_string($conn, $_POST['title']);
        $th_desc = mysqli_real_escape_string($conn, $_POST['desc']);
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong>Your thread has been added. Please wait for someone to respond.
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
            <h1 class="display-4">Welcome to <?php echo "$catname"; ?> forum.</h1>
            <p class="lead"><?php echo "$catdesc"; ?></p>
            <hr class="my-4">
            <h2>General Forum Rules</h2>
            <ul class="rules-list">
                <li><strong>Be Civil and Respectful:</strong> Treat other members with kindness. Do not use personal attacks, insults, hate speech, or harassment.</li>
                <li><strong>Stay on Topic:</strong> Post your messages in the correct category or thread. Do not derail discussions or spam unrelated content.</li>
                <li><strong>No Spam or Self-Promotion:</strong> Avoid posting repetitive messages, meaningless replies, or unauthorized advertisements.</li>
                <li><strong>Protect Privacy:</strong> Never share private personal information (like phone numbers or addresses) or private messages.</li>
                <li><strong>Keep it Legal:</strong> Do not share pirated material, explicit content, or encourage illegal acts.</li>
            </ul>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
    <div class="container">
        <h1 class="py-2">Start a discussion.</h1>
        <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">
            <div class="form-group">
                <label for="title">Problem Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Enter your problem title">
                <small id="emailHelp" class="form-text text-muted">Keep problem title as short and crisp as possible.</small>
            </div>
            <div class="form-group">
                <label for="desc">Elaborate your problem.</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <div class="container">
        <h1 class="my-2">Browse Questions</h1>

        <?php
        $id = $_GET["catid"];
        /** @var mysqli $conn */
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id= $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($rows = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $rows['thread_id'];
            $title = $rows['thread_title'];
            $desc = $rows['thread_desc'];



            echo '<div class="media my-3">
            <img class="mr-3" src="img/default_user.jpg" alt="Generic placeholder image" style="width: 54px;">
            <div class="media-body">
                <h5 class="mt-0"><a class="text-dark" href="thread.php?threadid=' . $id . '">' . $title . '</a> </h5>
                ' . $desc . '
            </div>
        </div>';
        }

        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Threads Yet.</p>
                        <p>Be the first person to ask a question.</p>
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