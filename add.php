<?php 
require_once 'bdd.php';
    if (isset($_POST) & !empty($_POST)) {
            $nom = ($_POST['nom']);
            $prenom = ($_POST['prenom']);
            $email = ($_POST['email']);
            $numeros = ($_POST['numeros']);
            $sujet = ($_POST['sujet']);
            $message = ($_POST['message']);       
        
          // MA REQUETE SQL
          $sql = "INSERT INTO user (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";
          $result = mysqli_query($link, $sql) or die("Connection failed: " . mysqli_connect_error());
      
          if ($result) {
            $message = "Insertion résussie avec succès"
          } else{
            $message = "Erreur d'Insertion"
          }
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <form class="row g-3">
    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
    </div>
    <div class="col-md-4">
        <label for="validationDefaultUsername" class="form-label">Username</label>
        <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationDefault05" class="form-label">Zip</label>
        <input type="text" class="form-control" id="validationDefault05" required>
    </div>
    <div class="col-12">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
    </form>
</div>    

</body>
</html>