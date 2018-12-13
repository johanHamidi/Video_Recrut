<?php
    $langue = 'francais';
    if(isset($_GET['langue']))
      $langue = $_GET['langue'];
    include '../langue/'.$langue.'.php'; ?>


<html>
    <head>
        <title>video_recrut</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/main.css" />
    </head>
    <body id="top">

        <h2><?php echo $tab[26]; ?></h2>
<?php
include '../connectBd.inc.php';
$query = "SELECT e.libelle, ca.nom, ca.prenom from emploi e INNER JOIN candidature c on e.codeEmploi = c.codeEmploi INNER join candidat ca on ca.IdPersonne = c.IdPersonne";
$reponse = mysqli_query($link,$query);
while ($value =  mysqli_fetch_row($reponse)) {
  ?>


<table>
  <tr>
    <th><?php echo $tab[25] ;?></th>
    <th><?php echo $tab[12] ;?></th>
    <th><?php echo $tab[13] ;?></th>
  </tr>
  <tr>
    <td><?php echo $value[0]; ?></td>
    <td><?php echo $value[1]; ?></td>
    <td><?php echo $value[2]; ?></td>
  </tr>


</table>

  <?php

}
 ?>

 <a href="espaceClient.php" class="button" ><?php echo $tab[9];?></a>

</body>
  <footer id="footer">
      <div class="inner">
          <h2><?php echo $tab[5]; ?></h2>
          <p>0615487952  ou   videoRecrut@yep.com </p>

          <ul class="icons">
              <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
              <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
          </ul>
      </div>
  </footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
