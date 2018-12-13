<?php  include '../connectBd.inc.php';

    $langue = 'francais';
    if(isset($_GET['langue']))
      $langue = $_GET['langue'];
    include '../langue/'.$langue.'.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajouter un emploisvideo</title>
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>
  <body>
    <form class="" action="ajoutEmploiTraitement.php" method="post">
      <label for="">Code emploi : </label>
      <input type="text" name="codeEmploi" value="">

      <label for=""><?php echo $tab[21]; ?> : </label>
      <input type="text" name="libelleEmploi" value="">

      <label for=""><?php echo $tab[22]; ?> : </label>
      <input type="text" name="description" value="">

      <label for=""><?php echo $tab[24]; ?> : </label>
      <input type="text" name="type" value="">

      <label for=""><?php echo $tab[23]; ?> : </label>
      <input type="text" name="competence" value="">

      <?php $id = $_SESSION['idPersonne'] ;?>
      <input type="hidden" name="id" value="<?php echo $id; ?>"><br><br>
      <button type="submit" name="validé"><?php echo $tab[15]; ?>  </button>
      <a href="espaceClient.php?langue=<?php echo $langue;?>" class="button"><?php echo $tab[9]; ?></a></br></br>
    </form>
  </body>
</html>
