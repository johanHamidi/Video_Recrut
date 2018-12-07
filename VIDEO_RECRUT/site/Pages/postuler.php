<?php
  include '../connectBd.inc.php';
  session_start();

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
    <form>

    <label><h3>Métier :</h3></label>
    <?php echo $id; ?>

    <label><h3>Contrat :</h3></label>
    <?php echo $type; ?>

    <label><h3>Description :</h3></label>
    <?php echo $description; ?><br></br>

    <label><h3>CV :</h3></label>
    <input type="file" name="monfichier"><br></br>

    <label><h3>Lettre de Motivation :</h3></label>
     <input type="file" name="monfichier"><br></br>

    <a href="#" class="button">Postuler pour <?php echo $id; ?></a>

  </form>
</div>


</body>
</html>
