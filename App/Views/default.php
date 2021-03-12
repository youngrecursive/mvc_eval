<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title><?php if (!empty($title)) {
            echo $title;
          } ?></title>
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <!-- header -->
  <header id="header">
    <nav class="user-interface">
      <ul class="link-list">
        <li>
          <a class="home" href="index.php?page=home">Accueil</a></li>
        <li>
          <a class="register" href="index.php?page=register">Créer un compte</a>
        </li>
        <li>
          <a class="login" href="index.php?page=login">Se connecter</a>
        </li>
      </ul>
    </nav>
  </header>


  <!-- main -->
  <main id="l-content">
    <?= $content ?>
  </main>



  <!-- footer -->
  <footer id="footer">

    <div class="banner-head">
      <div class="wrap">
        <div class="flex">
          <div class="contact_footer">
            <p><span>E-Mail: </span><a href="mailto:contact@oldcars.fr">contact@oldcars.fr</a></p>
            <p><span>Telephone: </span><a href="tel:+33232000000">02 22 33 44 55</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="banner-copyright">
      <div class="wrap">
        <p>Copyright Oldcars 2021 | Tous droits réservés</p>
      </div>
    </div>
  </footer>

</body>

</html>
