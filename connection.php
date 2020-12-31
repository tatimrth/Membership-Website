<?php
// Connection to data base
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=membership;port=3308', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
 ?>