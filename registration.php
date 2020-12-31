<?php
//$bdd = mysqli_connect("localhost","root","");
//mysqli_select_db($bdd,"membership");
$bdd = new PDO('mysql:host=localhost;dbname=membership;port=3308', 'root', '');

if(isset($_POST['register'])) {
    $name = htmlspecialchars($_POST['name']);
    $user_name = htmlspecialchars($_POST['user_name']);
    $email = htmlspecialchars($_POST['email']);
    $email2 = htmlspecialchars($_POST['email2']);
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']);
 
    if(!empty($_POST['name']) AND !empty($_POST['user_name'])  AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {
       $user_name_length = strlen($user_name);
 
       if($user_name_length <= 150) {
 
          $user_name_req = $bdd->prepare("SELECT * FROM users WHERE username = ?");
          $user_name_req->execute(array($user_name));
          $user_exist = $user_name_req->rowCount();
 
          if($user_exist == 0) {
 
 
          if($email == $email2) {
 
             if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $reqmail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
                $reqmail->execute(array($email));
                $mailexist = $reqmail->rowCount();
 
                if($mailexist == 0) {
 
                   if($password == $password2) {
                      $insertmbr = $bdd->prepare("INSERT INTO users(name_, username, email, pass) VALUES(?, ?, ?, ?)");
                      $insertmbr->execute(array($name, $user_name, $email, $password));
                      //echo "<script>window.open('index.html')</script>";
                      echo "<script>alert('Your registration was succed')</script>";
                      header("Location:login.php");
                   } 
                   else {
                    echo "<script>alert ('Your passwords are not the same !')</script>";
                    echo "<script>window.open('register.php','_self')</script>";
                    exit();
                   }
                } 
                else {
                   $erreur = "Email adress already used !";
                }
             } 
             else {
                $erreur = "Invalid email adress !";
             }
          } 
          else {
             $erreur = "Your email adress are not the same !";
          }
 
           }
           else {
              $erreur = "User name already used !";
           }
       } 
       else {
          $erreur = "Invalid username, max 150 caracters !";
       }
    } 
    else {
       $erreur = "All fields must be completed !";
    }
 }

?>