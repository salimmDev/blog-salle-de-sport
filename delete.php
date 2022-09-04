<?php
$link = mysqli_connect("localhost", "root", "", "usersport", 3306);
    $id = $_GET["id"]
    $sql= "DELETE FROM user WHERE id== $id";
        if (mysqli_query($link, $sql)){
            echo"VOUS AVEZ SUPPRIMER CETTE UTILISATEUR";
            header("location: view.php?del=1");
        }else{
            echo"VOUS AVEZ SUPPRIMER CETTE UTILISATEUR";
            header("location: view.php?del=0");
        }
        var_dump($sql)
?>