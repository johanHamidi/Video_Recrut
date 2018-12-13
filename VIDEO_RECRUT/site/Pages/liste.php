<html>
    <head>
        <title>video_recrut</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/main.css" />
    </head>
    <body id="top">
<?php
include '../connectBd.inc.php';
$query = "SELECT c.cv, lettreMotiv,date,video,e.libelle, ca.nom, ca.prenom from emploi e INNER JOIN candidature c on e.codeEmploi = c.codeEmploi INNER join candidat ca on ca.IdPersonne = c.IdPersonne";
$reponse = mysqli_query($link,$query);
while ($value =  mysqli_fetch_row($reponse)) {
  ?>
  <div class="box">
   <div class="inner">
  <?php
  echo $value[0];
  echo $value[1];
  echo $value[2];
  echo $value[3];
  echo $value[4];
  echo $value[5];
  echo $value[5];
}
 ?>
    </div>
  </div>
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
