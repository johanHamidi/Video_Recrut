<?php include '../connectBd.inc.php';?>
<html lang="fr" dir="ltr">
  <head>
    <title>Inscription video_recrut</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>

  <header>
      <h2>Inscription video_recrut</h1>
  </header>

  <body>
          <form class="" action="ajoutPersonne.php" method="post">

       <label> Nom :</label>
       <input type="text" name="nom" value="" required><br>
       <label> Prenom :</label>
       <input type="text" name="prenom" value="" required><br>
       <label> Numéro de téléphone :</label>
       <input type="tel" name="tel" value="" placeholder="0621203235" required><br>
       <label> Identifiant :</label>
       <input type="text" name="identifiant" value="" required><br>
       <label> Mot de passe :</label>
       <input type="password" name="mdp" value="" required><br>
      <button type="submit" name="button"> Validé</button>

      </form>
  </body>
</html>
