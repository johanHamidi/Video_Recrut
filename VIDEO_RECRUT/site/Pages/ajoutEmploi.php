<?php

include '../connectBd.inc.php';
  if(isset($_GET['langue']))
  $langue = $_GET['langue'];
include '../langue/'.$langue.'.php';
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/main.css"/>
</head>
<body>
  <form class="" action="ajoutEmploiTraitement.php" method="post">
    <label for="">nom de l'emploi</label>
    <input type="text" name="libelleEmploi" value="">
    <label for="">type de contrat</label>
    <input type="text" name="typeContrat" value="">
    <label for="">description de l'emploi</label>
    <input type="text" name="description" value="">
    <label for="">compétence nécessaire</label>
    <input type="text" name="competence" value="">

    <button type="submit" name="validé">validé</button></br></br>
    <a href="../index.php?langue=<?php echo $langue;?>" class="button"><?php echo $tab[9]; ?></a>

  </form>
  <?php
    $query = "SELECT libelle from type_de_contrat";
    $rep = mysqli_query($link,$query);
    while($val = mysqli_fetch_row($rep)){
      $val['0']?>
      <br>
      <?php
    }

       ?>


</body>
</html>
