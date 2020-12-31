<?php
  session_start();
  if (!$_SESSION['email']) {
    header("Location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Page</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/member.css">
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="public/js/bootstrap.js"></script>
    <style>
        body {
            background: url('public/images/background_home.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top mb-5 shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">User Page</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="member_area.html">Member Area</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    
      </section> -->

      <div class="container">

        <h3 class="font-weight-light text-center text-lg-left mt-4 mb-0">Welcome to your member area !</h3>

        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-left">

          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="public/images/blog.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="public/images/blog.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="public/images/blog.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="public/images/blog.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
</body>
</html>