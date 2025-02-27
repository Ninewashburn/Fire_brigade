<?php
  $currentFile = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UDSP 63 - Union Départementale des Sapeurs-Pompiers du Puy-de-Dôme</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
<header class="header">
    <nav class="navbar container">
      <div class="navbar-logo">
        <a href="index.php">UDSP 63</a>
      </div>
      <div class="burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="navbar-menu" id="navbar-menu">
        <li class="<?php echo ($currentFile == 'index') ? 'active' : ''; ?>">
          <a href="index.php">Accueil</a>
        </li>
        <li class="<?php echo ($currentFile == 'dps') ? 'active' : ''; ?>">
          <a href="dps.php">DPS</a>
        </li>
        <li class="<?php echo ($currentFile == 'formations') ? 'active' : ''; ?>">
          <a href="formations.php">Formations</a>
        </li>
        <li class="<?php echo ($currentFile == 'actualites') ? 'active' : ''; ?>">
          <a href="actualites.php">Actualités</a>
        </li>
        <li class="<?php echo ($currentFile == 'membres') ? 'active' : ''; ?>">
          <a href="membres.php">Membres et commissions</a>
        </li>
        <li class="<?php echo ($currentFile == 'congres') ? 'active' : ''; ?>">
          <a href="congres.php">Congrès Départemental</a>
        </li>
        <li class="<?php echo ($currentFile == 'adhesion') ? 'active' : ''; ?>">
          <a href="adhesion.php">Adhésions</a>
        </li>
        <li class="<?php echo ($currentFile == 'contact') ? 'active' : ''; ?>">
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </nav>
  </header>
