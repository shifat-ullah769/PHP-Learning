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
    $id = $_GET["threadid"];
    /** @var mysqli $conn */
    $sql = "SELECT * FROM `threads` WHERE thread_id= $id";
    $result = mysqli_query($conn, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $title = $rows['thread_title'];
        $desc = $rows['thread_desc'];
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
                <b>Posted by: Harry</b>
            </p>
        </div>
    </div>

    <div class="container">
        <h1 class="my-2">Discussions</h1>

        <!-- <?php
        $id = $_GET["catid"];
        /** @var mysqli $conn */
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id= $id";
        $result = mysqli_query($conn, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
            $id = $rows['thread_id'];
            $title = $rows['thread_title'];
            $desc = $rows['thread_desc'];



            echo '<div class="media my-3">
            <img class="mr-3" src="img/default_user.jpg" alt="Generic placeholder image" style="width: 54px;">
            <div class="media-body">
                <h5 class="mt-0"><a class="text-dark" href="thread.php">' . $title . '</a> </h5>
                ' . $desc . '
            </div>
        </div>';
        }

        ?>  -->


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