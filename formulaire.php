<h1 class="text-center">Modifier utilisateur</h1>
        <form class="form_user mt-5" method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user["email"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" value="<?php echo htmlspecialchars($user["password"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <a href="index.php"><input type="button" value="Retour Liste" class="btn btn-primary"></a>
                <input type="submit" name="modifier" value="Modifier" class="btn btn-success">

            </div>
        </form>