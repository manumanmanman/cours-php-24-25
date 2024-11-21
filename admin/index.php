<?php
session_start();

if (isset($_SESSION['username'])) {
   
// afficher le contenu de la page

?>

<?= 'Bienvenue ' . $_SESSION['username'] . '<br>'; ?>

<img src="../images/<?=  $_SESSION['photo'] ?>" alt="">

<a href="deconnexion.php">Déconnexion</a>



<?php 




 } else {
    header('location:../index.php?msg=pagerestricted');

}
