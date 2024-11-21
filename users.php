<?php
//1) se connecter à la base de données
include 'inc/connexion.inc.php';

//2) selectionner les users
$sqlQuery = 'SELECT * FROM users';
$marequete = $conn->prepare($sqlQuery);
$marequete->execute();
$users = $marequete->fetchAll();




//4)afficher les users
echo '<h2>liste des users</h2>';
echo '<table class="table">';
echo '<tr>';
echo '<th>Prénom</th>';
echo '<th>Nom</th>';
echo '<th>Username</th>';
echo '<th>Photo</th>';
echo '<th>Vehicle</th>';
echo '</tr>';

foreach ($users as $user) {

    $vehicle = unserialize($user['vehicle']);

    echo '<tr>';
    echo '<td>' . ucfirst($user['firstname']) . '</td>';
    echo '<td>' . ucfirst($user['lastname']) . '</td>';
    echo '<td>' . ucfirst($user['username']) . '</td>';
    echo '<td><img src="images/' . $user['photo'] . '" width="50"></td>';
    echo '<td>';
   
   foreach ($vehicle as $v) {
        echo ucfirst($v) . '<br>';
    }
   
    echo  '</td>';
    echo '</tr>';
}
echo '</table>';


// un commentaire