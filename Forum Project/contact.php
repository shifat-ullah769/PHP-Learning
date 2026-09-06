<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <style>
    /* Main page spacing */
    body {
      background-color: #dbb163;
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

      <div class="text-center mb-5">
        <h1>Contact uDoubt</h1>
        <p class="lead">
          Have a question, suggestion, or feedback? Get in touch with us.
        </p>
      </div>

      <div class="row">

        <div class="col-md-5 mb-4">

          <div class="card h-100">
            <div class="card-body">

              <h3>Get in Touch</h3>

              <p class="mt-3">
                If you have any questions, suggestions, or feedback
                about uDoubt, feel free to contact us.
              </p>

              <hr>

              <p>
                <strong>Email:</strong><br>
                support@udoubt.com
              </p>

              <p>
                <strong>Community:</strong><br>
                You can also ask your questions directly in the
                appropriate uDoubt category.
              </p>

            </div>
          </div>

        </div>

        <div class="col-md-7 mb-4">

          <div class="card">
            <div class="card-body">

              <h3 class="mb-4">Send Us a Message</h3>

              <form>

                <div class="form-group">
                  <label for="name">Your Name</label>
                  <input type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter your name">
                </div>

                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email"
                    class="form-control"
                    id="email"
                    placeholder="Enter your email">
                </div>

                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text"
                    class="form-control"
                    id="subject"
                    placeholder="Enter subject">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea
                    class="form-control"
                    id="message"
                    rows="5"
                    placeholder="Write your message"></textarea>
                </div>

                <button type="submit" class="btn btn-success">
                  Send Message
                </button>

              </form>

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