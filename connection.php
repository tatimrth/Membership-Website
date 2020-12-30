<?php

    // $dbcon = mysqli_connect("localhost","root","");
    // mysqlii_select_db($dbcon,"membership");
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=membership;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
 ?>