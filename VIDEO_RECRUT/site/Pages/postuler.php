<?php
  include '../connectBd.inc.php';
  session_start();

  if(isset($_GET['langue']))
  $langue = $_GET['langue'];
include '../langue/'.$langue.'.php';

  $id = $_GET['id'];
  $type = $_GET['type'];
  $description =  $_GET['description'];



?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/main.css"/>
</head>
<body>
  <div class="container">
    <form enctype="multipart/form-data" method="post" action="ajoutPostuler.php">


    <label><h3>Métier :</h3></label>
    <?php echo $id; ?>

    <label><h3>Contrat :</h3></label>
    <?php echo $type; ?>

    <label><h3>Description :</h3></label>
    <?php echo $description; ?><br></br>

    <label><h3>CV :</h3></label>
    <input type="file" name="cv"><br></br>

    <label><h3>Lettre de Motivation :</h3></label>
     <input type="file" name="lettreMotiv"><br></br>

     <label><h3>VIDEO :</h3></label>
      <input type="file" name="video"><br></br>

    <input type="submit" value="<?php echo $tab[15]; ?>">
    <a href="espaceClient.php" class="button" ><?php echo $tab[9];?></a>

  </form>
</div>


</body>
</html>
