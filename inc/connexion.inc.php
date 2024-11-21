<?php

//local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1coursphp2024";

// //serveur
// $servername = "localhost";
// $username = "uhti7837_etu00";
// $password = 'KX3CM3gE#}HlXXXXX';
// $dbname = "uhti7837_etu00";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

//   echo 'Bonjour '. ucfirst($etudiant['prenom']) . ' ' . ucfirst($etudiant['nom']) . '<br>';

?>