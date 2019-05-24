<?php include '../connectBd.inc.php';
session_start();
$_SESSION['id'];

?>



<html>
<head>
<meta http-equiv="refresh" content="5; URL=espaceClient.php">
<link rel="stylesheet" href="../assets/css/main.css"/>
</head>
<body>
  <div class="container">


<?php

$dossier = '../Upload/';


$cv = basename($_FILES['cv']['name']);
$lettremotiv = basename($_FILES['lettreMotiv']['name']);
$video = basename($_FILES['video']['name']);


$taille_maxi = 1000000;


$tailleCv = filesize($_FILES['cv']['tmp_name']);
$taillelettreMotiv = filesize($_FILES['lettreMotiv']['tmp_name']);
$tailleVideo = filesize($_FILES['video']['tmp_name']);


$extensions = array('.png', '.docx', '.jpg', '.jpeg', '.pdf',);


$extensionCv = strrchr($_FILES['cv']['name'], '.');
$extensionLm = strrchr($_FILES['lettreMotiv']['name'], '.');
$extensionVideo = strrchr($_FILES['video']['name'], '.');


//Upload du CV

//Début des vérifications de sécurité...
if(!in_array($extensionCv, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($tailleCv>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $cv = strtr($cv,
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $cv = preg_replace('/([^.a-z0-9]+)/i', '-', $cv);
     if(move_uploaded_file($_FILES['cv']['tmp_name'], $dossier . $cv)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {

          echo 'CV envoyé avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload ! (CV)';
     }
}
else
{
     echo $erreur;
}


//Upload lettre de motivation


if(!in_array($extensionLm, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taillelettreMotiv>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $lettremotiv = strtr($lettremotiv,
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $lettremotiv = preg_replace('/([^.a-z0-9]+)/i', '-', $lettremotiv);
     if(move_uploaded_file($_FILES['lettreMotiv']['tmp_name'], $dossier . $lettremotiv)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo '<br>Lettre de motivation envoyé avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !(Lettre de motivation)';
     }
}
else
{
     echo $erreur;
}





//Upload video


if(!in_array($extensionVideo, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ';
}
if($tailleVideo>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $video = strtr($video,
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $video = preg_replace('/([^.a-z0-9]+)/i', '-',$video);
     if(move_uploaded_file($_FILES['video']['tmp_name'], $dossier . $video)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo '<br>Video envoyé avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !(Video)';
     }
}
else
{
     echo $erreur;
}




echo '<br>Vous allez être rediriger vers votre espace client. MERCI !'

?>
</div>
</body>
</html>
