<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




  <style>
    /* Main page spacing */
    body {
      background-color: #ecd468;
    }

    /* Main content area */
    body>.container {
      margin-top: 40px;
      margin-bottom: 40px;
    }

    /* Headings */
    h1 {
      font-weight: 600;
      color: #343a40;
    }

    h3,
    h4 {
      font-weight: 600;
      color: #343a40;
    }

    /* Paragraphs */
    p {
      line-height: 1.7;
      color: #6c757d;
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 8px;
      box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
    }

    .card:hover {
      box-shadow: 0 5px 18px rgba(0, 0, 0, 0.12);
    }

    /* Jumbotron */
    .jumbotron {
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
    }

    /* Forms */
    .form-control {
      border-radius: 5px;
    }

    .form-control:focus {
      border-color: #28a745;
      box-shadow: 0 0 0 0.15rem rgba(40, 167, 69, 0.15);
    }

    /* Buttons */
    .btn-success {
      border-radius: 5px;
    }

    /* Mobile */
    @media (max-width: 768px) {
      .jumbotron {
        padding: 30px 20px;
      }

      body>.container {
        margin-top: 25px;
      }
    }
  </style>





  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>uDoubt-Ask your doubts</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include 'partials/_dbconnect.php'; ?>
  <?php include 'partials/_header.php'; ?>


  <main class="flex-grow-1">

    <div class="container my-5">

      <div class="jumbotron">
        <h1 class="display-4">About uDoubt</h1>
        <p class="lead">
          Welcome to uDoubt, a discussion forum where you can ask questions,
          share knowledge, and help others solve their problems.
        </p>

        <hr class="my-4">

        <p>
          uDoubt is a community-driven platform created for students,
          developers, learners, and anyone who wants to ask questions
          or share useful knowledge.
        </p>

        <p>
          You can explore different categories, start discussions,
          post comments, and learn from other members of the community.
        </p>
      </div>

      <div class="row text-center">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4>Ask Questions</h4>
              <p>
                Ask your doubts and get help from other members
                of the community.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4>Share Knowledge</h4>
              <p>
                Share your solutions, experience, and knowledge
                with others.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4>Learn Together</h4>
              <p>
                Explore discussions and learn from questions and
                answers posted by the community.
              </p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </main>



  <?php include 'partials/_footer.php'; ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>