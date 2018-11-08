<!DOCTYPE HTML>
<!--
    Full Motion by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>video_recrut</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body id="top">
        <?php include '../connectBd.inc.php';?>

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
                            <p>Consulter ci-dessous la liste d'emplois
                        </header>
                        <a href="#main" class="more">Learn More</a>
                    </div>
                </section>

            <!-- Main -->
                <div id="main">
                    <div class="inner">

                    <!-- Boxes -->
                        <div class="thumbnails">

                            <?php

                            $reponse = mysqli_query($link, "SELECT libelle, description FROM EMPLOI");
                            foreach (mysqli_fetch_array($reponse, MYSQLI_BOTH) as $key => $value): ?>

                            <div class="box">
                                <!-- <img src="images/pic01.jpg" alt="" /></a> -->
                                <div class="inner">
                                    <h3><?php echo  $value ;?></h3>
                                    <p><?php echo $value;  ?></p>
                                    <a href="" class="button style2 fit" data-poptrox="">Postuler</a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        </div>

                    </div>
                </div>

            <!-- Footer -->
                <footer id="footer">
                    <div class="inner">
                        <h2>CONTACTEZ-NOUS</h2>
                        <p>061548795  ou   videoRecrut@yep.com </p>

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
