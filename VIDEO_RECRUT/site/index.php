<!DOCTYPE HTML>
<!--
    Full Motion by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include 'connectBd.inc.php';
include 'Pages/espaceClient.php';
?>
<html>
    <head>
        <title>video_recrut</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body id="top">


        <!-- Header -->
			<header id="header" class="alt">
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul1 class="links">
					<li1><b><a href="Pages/SeConnecter.php?langue=<?php echo $langue;?>"><?php echo $tab[1]; ?></a></b></li1>
					<li1><b><a href="Pages/inscrire.php?langue=<?php echo $langue;?>"><?php echo $tab[2]; ?></a></b></li1>
          <?php
          $idP = $_SESSION['id'];
          $req_session = mysqli_query($link,"SELECT idPersonne FROM RH WHERE idPersonne ='".$idP."'");
          $droit = mysqli_fetch_assoc($req_session);

          if($droit['idPersonne'] == $idP && $idP != NULL ){
          ?>
              <li1><b><a href="Pages/ajoutEmploi.php?langue=<?php echo $langue;?>"><?php echo $tab[19]; ?></a></b></li1>
              <li1><b><a href="Pages/liste.php?langue=<?php echo $langue;?>"><?php echo $tab[20]; ?></a></b></li1>

          <?php
        }
           ?>

				</ul1>
			</nav>


            <!-- Banner -->
            <!--
                To use a video as your background, set data-video to the name of your video without
                its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
                formats to work correctly.
            -->
                <section id="banner" data-video="images/banner">
                    <div class="inner">
                        <header>
                            <h1>video_recrut</h1>
                            <p><?php echo $tab[3]; ?>
                        </header>
                    </div>
                </section>

            <!-- Main -->
                <div id="main">

                    <div class="inner">

                    <!-- Boxes -->
                        <div class="thumbnails">

                            <?php
                            $reponse = mysqli_query($link, "SELECT e.libelle,c.libelle FROM emploi e INNER JOIN type_de_contrat c ON e.code = c.code  ");
                            $value =  mysqli_fetch_row($reponse);
                            $typ = $value[0];
                              ?>

                            <div class="box">
                              <div class="inner">
                              <h3><?php echo $value[0];?></h3>
                              <h5><?php echo $value[1]; ?></h5>

                                <!-- <img src="images/pic01.jpg" alt="" /></a> -->
                                <?php     while ($value =  mysqli_fetch_row($reponse)) {?>


                                  <?php if ($typ != $value[0]) {
                                    $typ = $value[0];?>

                                    </div>

                                    <a href=""  ></a>

                                    <a href="Pages/postuler.php?langue=<?php echo $langue;?>" class="button" ><?php echo $tab[4]; ?></a>

                                    </div>
                                   <div class="box">
                                    <div class="inner">
                                    <h3><?php echo $value[0];?></h3>
                                    <h5><?php echo $value[1]; ?></h5>



                                <?php  } ?>
                                 <?php  } ?>


                               </div>

                               <a href=""  ></a>

                               <a href="Pages/postuler.php?langue=<?php echo $langue;?>" class="button"><?php echo $tab[4]; ?></a>
                               </div>

                        </div>

                    </div>
                </div>

            <!-- Footer -->
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
