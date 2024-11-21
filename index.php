<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">

<div class="left">
<?php 
if (isset($_GET['msg'])) {
    
    if ($_GET['msg'] == 'passnotok') {
        echo '<div class="alert alert-danger" role="alert">Mot de passe incorrect</div>';
    } else if ($_GET['msg'] == 'pagerestricted') {
        echo '<div class="alert alert-danger" role="alert">Vous devez vous connecter pour accéder à cette page</div>';
    } else if ($_GET['msg'] == 'deconnexionok') {
        echo '<div class="alert alert-success" role="alert">Vous avez été déconnecté</div>';
    }
    ?>
  
<?php } ?>


    <h1>Login</h1>
    <form method="post" action="login.php">
<div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" id="username" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" id="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="right">
    <h1>Register</h1>
<form method="post" action="register.php" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="firstname" class="form-label">Prénom</label>
    <input type="text" id="firstname" class="form-control" name="firstname">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Nom</label>
    <input type="text" id="lastname" class="form-control" name="lastname">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" id="username" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" id="password" class="form-control" name="password">
  </div>

  <div class="mb-3">
    <label for="photo" class="form-label">Photo de profil</label>
    <input type="file" id="photo" class="form-control" name="photo">
  </div>


  <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
  <label for="vehicle3"> I have a boat</label><br><br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>




</div>
</body>
</html>