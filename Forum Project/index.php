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

<body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>



    <!-- carousel slider starts here. -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="https://images.unsplash.com/photo-1649180556628-9ba704115795?w=1200&h=400&fit=crop"
                    alt="Python">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=1200&h=400&fit=crop"
                    alt="JavaScript">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://images.unsplash.com/photo-1727434032765-9c4df88b6e02?w=1200&h=400&fit=crop" alt="AI">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Category container starts here. -->

    <div class="container my-3">
        <h4 class="text-center my-3">Categories: </h4>
        <div class="row">

            <!-- Fetch all the categories. -->
            <?php
            /** @var mysqli $conn */
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($result)){
              // echo $rows['category_name'];
              $cat = $rows['category_name'];
              $image = $rows['category_image'];
              $desc = $rows['category_description'];

              echo '<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="'.$rows['category_image'].'"
                    class="card-img-top category-img"
                    alt="'.$cat.'">
                    <div class="card-body">
                        <h5 class="card-title">'. $cat . '</h5>
                        <p class="card-text">'. substr($desc, 0 , 100) . '.....</p>
                        <a href="#" class="btn btn-success">Explore Threads</a>
                    </div>
                </div>
            </div>';
            }
          ?>

            <!-- Use a for loop to iterate through categories. -->


        </div>
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