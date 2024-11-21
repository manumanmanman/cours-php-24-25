<?php








// 1) se connecter à la base de données
include 'inc/connexion.inc.php';

// 2) récupérer les données du formulaire
$firstname = ucfirst($_POST['firstname']);
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$photo = $_FILES['photo'];
$vehicle = serialize($_POST['vehicle']);

// 3) définir la requête
$sqlQuery = 'INSERT INTO users (firstname, lastname, username, password, photo, vehicle) VALUES (:firstname, :lastname, :username, :password, :photo, :vehicle)';
// 4) préparer la requête
$marequete = $conn->prepare($sqlQuery);
// 5) exécuter la requête
$marequete->execute([
    'firstname' => $firstname,
    'lastname' => $lastname,
    'username' => $username,
    'password' => $password,
    'photo' => $photo['name'],
    'vehicle' => $vehicle
]);

// 6) enregistrer le fichier
move_uploaded_file($photo['tmp_name'], 'images/' . $photo['name']);


// 6) rediriger l'utilisateur vers la page des étudiants
//header('location:etudiants.php');

echo "registration successful";







?>


