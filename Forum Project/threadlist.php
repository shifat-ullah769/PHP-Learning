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
        <h1 class="my-2">Browse Questions</h1>

        <?php
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
                <h5 class="mt-0"><a class="text-dark" href="thread.php?threadid='. $id.'">' . $title . '</a> </h5>
                ' . $desc . '
            </div>
        </div>';
        }

        ?>


        <!-- <div class="media my-3">
            <img class="mr-3" src="img/default_user.jpg" alt="Generic placeholder image" style="width: 54px;">
            <div class="media-body">
                <h5 class="mt-0">Unable to install python packages in linux.</h5>
                I am unable to install Python packages and need help troubleshooting the issue.

                Here are the details of my setup and the error:
                1. Operating System: [e.g., Windows 11, macOS Sequoia, Ubuntu]
                2. The exact command I ran: [e.g., pip install pandas]
                3. The exact error message or output I received:
                [Paste the full error text or describe what happened here]

                4. When I run 'python --version' or 'python3 --version', it outputs: [e.g., Python 3.12, or "command not found"]
                5. When I run 'pip --version', it outputs: [e.g., pip 24.0, or "not recognized"]
            </div>
        </div> -->
        
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