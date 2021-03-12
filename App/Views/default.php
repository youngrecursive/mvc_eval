<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php if(!empty($title)) { echo $title; } ?></title>
  </head>
  <body>
    <header>
      header
    </header>

    <main id="l-content">
        <?= $content ?>
    </main>

    <footer>
      footer
    </footer>

  </body>
</html>
