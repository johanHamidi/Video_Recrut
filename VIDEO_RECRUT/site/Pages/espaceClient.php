<!DOCTYPE HTML>
<!--
    Full Motion by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include 'connectBd.inc.php';
session_start()
?>
<html>
    <head>
        <title>video_recrut</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/main.css" />
    </head>
    <?php
    $langue = 'francais';
    if(isset($_GET['langue']))
      $langue = $_GET['langue'];
    include 'langue/'.$langue.'.php'; ?>
    <body id="top">

      <?php if($_SESSION['connect']){ ?>
        <!-- Header -->
  			<header id="header" class="alt">
          <h3><?php echo $tab[16]; echo" ";  echo $_SESSION['prenom']." ".$_SESSION['nom'];?> </h3>
  			</header>

        <a href="Pages/deco.php" class="button"><?php echo $tab[17]; ?></a><br>



      <?php } ?>
      <form class="" action="" method="get">
        <select class="" name="langue">
          <option value="francais">francais</option>
          <option value="anglais">anglais</option>
        </select>
        <input type="submit" name="" value="<?php echo $tab[15]; ?>">
      </form>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
