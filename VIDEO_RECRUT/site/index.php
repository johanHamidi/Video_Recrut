<!DOCTYPE HTML>
<!--
    Full Motion by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include 'connectBd.inc.php';

session_start();
?>
<html>
    <head>
        <title>video_recrut</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body id="top">
      <?php
      $langue = 'francais';
      if(isset($_GET['langue']))
        $langue = $_GET['langue'];
      include 'langue/'.$langue.'.php'; ?>

      <form class="" action="" method="get">
        <select class="" name="langue">
          <option value="francais">francais</option>
          <option value="anglais">anglais</option>
        </select>
        <input type="submit" name="" value="validé">
      </form>

        <!-- Header -->
			<header id="header" class="alt">
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul1 class="links">
					<li1><b><a href="Pages/SeConnecter.php"><?php echo $tab[1]; ?></a></b></li1>
					<li1><b><a href="Pages/inscrire.php"><?php echo $tab[2]; ?></a></b></li1>

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
                            $reponse = mysqli_query($link, "SELECT e.libelle, description, t.libelle , n.libelle FROM TYPE_DE_CONTRAT t INNER JOIN EMPLOI e on t.code = e.codeEmploi LEFT OUTER JOIN Necessiter n on e.codeEmploi = n.codeEmploi ORDER BY e.libelle ");
                            $value =  mysqli_fetch_row($reponse);
                            $typ = $value[0];
                              ?>

                            <div class="box">
                              <div class="inner">
                              <h3><?php echo $value[0];?></h3>
                              <p><?php echo $value[1];?></p>
                              <p><?php echo $value[2];?></p>
                              <p><?php echo $value[3];?></p>


                                <!-- <img src="images/pic01.jpg" alt="" /></a> -->
                                <?php     while ( $value =  mysqli_fetch_row($reponse)) {?>


                                  <?php if ($typ != $value[0]) {
                                    $typ = $value[0];?>

                                    </div>
                                    <a href="" class="button style2 fit" ><?php echo $tab[4] ?></a>
                                    </div>
                                    <div class="box">
                                    <div class="inner">
                                    <h3><?php echo $value[0];?></h3>
                                    <p><?php echo $value[1];?></p>
                                    <p><?php echo $value[2];?></p>


                                <?php  } ?>
                                  <p><?php echo $value[3];?></p>
                                 <?php  } ?>


                               </div>
                               <a href="" class="button style2 fit" ><?php echo $tab[4]; ?></a>
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
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
