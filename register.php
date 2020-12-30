<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        body {
            background: url('images/background_home.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        h3 {
          text-align: center;
        }

        .container {
          margin-top: 10rem;
        }

        .col-md-3 {
          align-content: center;
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
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="register.html">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Member Area</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacts.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Section goes here -->

      <section>
        <div class="container">
          <div class="row">
            <div class="page-header">
              <h3>Register</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
              <form id="form" class="col-md-8 col-md-offset-2" role="form" method="post" action="./registration.php">
                <div class="form-group"> Name:
                  <input class="form-control" placeholder="Enter your full name please" name="name" type="text">
                </div>
                <div class="form-group"> Ursname:
                  <input class="form-control" placeholder="Chose your user name" name="user_name" type="text">
                </div>
                <div class="form-group"> Email:
                  <input class="form-control" placeholder="Enter your email adress" name="email" type="email">
                </div>
                <div class="form-group"> Email confirmation:
                  <input class="form-control"  name="email2" type="email">
                </div>
                <div class="form-group"> Password:
                  <input class="form-control" placeholder="Enter your password" name="password" type="password">
                </div>
                <div class="form-group"> Password confirmation:
                  <input class="form-control"  name="password2" type="password">
                </div>
                <div class="form-group"><br/>
                  <input class="form-control" placeholder="btn btn-success" value="Go !" name="register" type="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

    
    
</body>
</html>