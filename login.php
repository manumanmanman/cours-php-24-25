<?php
// 1) se connecter à la base de données
include 'inc/connexion.inc.php';

// 2) récupérer les données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// 3) définir la requête
$sqlQuery = 'SELECT password,photo FROM users WHERE username = :username';

// 4) préparer la requête
$marequete = $conn->prepare($sqlQuery);

// 5) exécuter la requête
$marequete->execute([
    'username' => $username
]);

// 6) récupérer le résultat
$result = $marequete->fetch();

// 7) vérifier si le mot de passe est correct

// echo 'password introduit: '. $password;
// echo '<br>password DB: '. $result['password']. '<br>';   
// echo $username;    
// echo $result['photo'];

if ($password == $result['password']) {
   
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['photo'] = $result['photo'];
    header('location:admin/index.php');
  
// 


} else {
    header('location:index.php?msg=passnotok');
}