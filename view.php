<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<?php require_once 'bdd.php'; ?>

<div class="container">
  <h1>LISTE D'UTILISATEUR</h1>
<a type="button" class="btn btn-success" href="contact.php">Ajouter</a>

<table class="table" >
  <thead>
    <tr>
      <?php for ($i =0; $i < count($key);$i++) : ?>
        <?php echo "<th>$key[$i]</th>" ?>
      <?php endfor; ?>
    </tr>
  </thead>
  <?php while($row = mysqli_fetch_assoc ($result)) : ?>
    <tbody>
      <tr>
        <th scope="row"><a href="user.php?id=<?php echo $row["id"]?>"><?php echo $row["id"] ?></a></th>
        <th scope="row"><?php echo $row["prenom"] ?> </th>
        <th scope="row"><?php echo $row["nom"] ?> </th>
        <th scope="row"><?php echo $row["email"] ?> </th>
        <th scope="row"><?php echo $row["telephone"] ?> </th>
        <th scope="row"><?php echo $row["sujet"] ?> </th>
        <th scope="row"><?php echo $row["message"] ?> </th>
        <th scope="row"><a type="button" class="btn btn-primary" href="update.php">Modifier</a> <a type="button" class="btn btn-danger" href="delete.php">Supprimer</a> </th>
      </tr>

    </tbody>
  <?php endwhile ?>
</table> 

</div>






