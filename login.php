<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
  
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
                <a class="nav-link" href="register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
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
              <h3>Login</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
              <form role="form" method="POST" action="login.php" id="form" class="col-md-8 col-md-offset-2">
                <div class="form-group"> Email:
                  <input class="form-control" placeholder="Enter your email adress" name="email" type="email">
                </div>
                <div class="form-group"> Password:
                  <input class="form-control" placeholder="Enter your password" name="password" type="password">
                </div>
                <div class="form-group"><br/>
                  <input class="form-control" placeholder="btn btn-success" value="Login" name="login" type="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>    
</body>
</html>

<?php
include('connection.php');

if(isset($_POST['login']))
{
   $mail_connect = htmlspecialchars($_POST['email']);
   $pass_connect = sha1($_POST['password']);
   // Authentification par adresse mail et mot de passe
   if(!empty($mail_connect) AND !empty($pass_connect))
   {
      $req_user = $bdd->prepare("SELECT * FROM users WHERE email = ? AND pass = ?");
      $req_user->execute(array($mail_connect, $pass_connect));
      $user_exist = $req_user->rowCount();
      if($user_exist == 1)
      {
         $user_info = $req_user->fetch();
         $_SESSION['username'] = $user_info['username'];
         $_SESSION['email'] = $user_info['email'];
         header("Location: member_page.php");
         $_SESSION['email']=$mail_connect;
      }
      else
      {
         echo "<script>alert('Invalid password')</script>";
      }
   }

   else
   {
    echo "<script>alert('All fields must be completed')</script>";
   }
}

?>