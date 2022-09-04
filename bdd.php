<?php
// On inclut la connexion à la base
$link = mysqli_connect("localhost", "root", "", "usersport", 3306);

// On écrit notre requête
$sql = "SELECT * FROM client  ORDER BY id";

// On prépare la requête
$result = mysqli_query($link, $sql);

// On stocke le résultat dans un tableau associatif
$row = mysqli_fetch_assoc($result) ;

// On exécute la requête
$key = array_keys($row);
?>