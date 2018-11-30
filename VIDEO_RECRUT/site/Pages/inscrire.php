<?php include '../connectBd.inc.php';
if(isset($_GET['langue']))
$langue = $_GET['langue'];
include '../langue/'.$langue.'.php';
?>
<html lang="fr" dir="ltr">
  <head>
    <title>Inscription video_recrut</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>

  <header>
      <h2><?php echo $tab[11]; ?></h1>
  </header>

  <body>
          <form class="" action="ajoutPersonne.php?langue=<?php echo $langue;?>" method="post">

       <label> <?php echo $tab[12]; ?> :</label>
       <input type="text" name="nom" value="" required><br>
       <label> <?php echo $tab[13]; ?> :</label>
       <input type="text" name="prenom" value="" required><br>
       <label> <?php echo $tab[14]; ?> :</label>
       <input type="tel" name="tel" value="" placeholder="0621203235" required><br>
       <label> <?php echo $tab[7]; ?> :</label>
       <input type="text" name="identifiant" value="" required><br>
       <label>  <?php echo $tab[8]; ?>  :</label>
       <input type="password" name="mdp" value="" required><br>
      <button type="submit" name="button"> <?php echo $tab[15]; ?></button>

      </form>
  </body>
</html>
