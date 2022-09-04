<?php
$id = $_GET["id"];
$sqli = "SELECT * FROM `client` ORDER BY id=$id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result) ;
    if (isset($_POST) $ !empty($_POST)) {
        $nom = ($_POST['nom']);
        $prenom = ($_POST['prenom']);
        $email = ($_POST['email']);
        $numeros = ($_POST['numeros']);
        $sujet = ($_POST['sujet']);
        $message = ($_POST['message']);       
    }
        
       ?>   

      
        <div style="background-color:green" class="alert alert-succes">L'utilisateur a été supprimé</div>
    <?php elseif ($_GET["del"] == 0) : ?>
        <div style="background-color:red" class="alert alert-danger">L'utilisateur n'a pas été supprimé</div>
    <?php endif; ?>
<?php endif; ?>
<?php foreach ($results as $result) : ?>

