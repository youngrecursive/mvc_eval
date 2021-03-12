<h2>Connexion</h2>

<form action="index.php?page=login" method="post">

<label for="email">Email</label>
<input type="text" name="email">


<label for="password">Mot de passe</label>
<input type="password" name="password">

<input type="submit" value="Se connecter">

<?php if(isset($error)): ?>
        <p style="color:red"> <?= $error ?></p>
    <?php endif; ?>

</form>