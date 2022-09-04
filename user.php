<?php
// Me connecter à ma base de donner 
$link = mysqli_connect("localhost", "root", "", "usersport", 3306);

// MA REQUETE SQL
$sql = "INSERT INTO user (nom, prenom, email, numeros, sujet, message) VALUES ('$nom', '$prenom', '$email')";


?>

    <table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TEL</th>
    </tr>
  </thead>

  <?php if (isset($_GET["del"])) : ?>
            <?php if ($_GET["del"] == 1) : ?>
                <div style="background-color:green" class="alert alert-succes">L'utilisateur a été supprimé</div>
            <?php elseif ($_GET["del"] == 0) : ?>
                <div style="background-color:red" class="alert alert-danger">L'utilisateur n'a pas été supprimé</div>
            <?php endif; ?>
        <?php endif; ?>
<?php foreach ($results as $result) : ?>

<tbody>
    <tr>
      <th scope="row"><a href="view.php?id=<?php echo $result["id"]?>"><?php echo $result ["nom"]?></a></th>
<th scope="row"><?php echo $result["nom"] ?> </th>
      <th scope="row"><?php echo $result["prenom"] ?> </th>
      <th scope="row"><?php echo $result["numeros"] ?> </th>
      <th scope="row"><?php echo $result["email"] ?> </th>
      <th scope="col"><button class="btn btn-danger">
        <a class="supprimer" href='delete.php?id=<?php echo $result["id"]?>'>Supprimer</a>
      </button>
    </th>
    <th scope="col"><button class="btn btn-danger">
        <a class="modifier" href='update.php?id=<?php echo $result["id"]?>'>Modifier</a>
      </button>
    </th>
    </tr>
  </tbody>
  <?php endforeach; ?>
  <?php 
  ?>
</table>
</body>
</html>