<?php
//-------------Je vérifie la connexion a ma bdd----------------------


//  Je déclare mes variable
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$numeros = $_POST["numeros"];

// Me connecter à ma base de donner 
$link = mysqli_connect("localhost", "root", "", "usersport", 3306);

// JE VERIFIE LA CONNEXION a ma BDD = BASE DE DONNER
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
// MA REQUETE SQL
$sql = "INSERT INTO user (nom, prenom, email, numeros) VALUES ('$nom', '$prenom', '$email' '$numeros')";

// verifier si y a des champs saisie
if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($numeros)) {
    // TESTER SI MA REQUETE EST EXECUTER 
    if (mysqli_query($link, $sql)) {
        header("location:contact.php?add=0");
    }
} else {
    header("location:contact.php?add=1");
}

?>










