<?php
// On se connecte à notre Bdd
include '../connectBd.inc.php';
if(isset($_GET['langue']))
$langue = $_GET['langue'];
include '../langue/'.$langue.'.php';
if(isset($_POST) && !empty($_POST['log']) && !empty($_POST['pas'])) {
  extract($_POST);
//   on recupère le password de la table qui correspond au login du visiteur
  $sql = "SELECT idPersonne ,motDePasse, nom, prenom FROM PERSONNE WHERE loginPersonne='".$log."'";
  $req = mysqli_query($link, $sql) or die('Erreur SQL !br'.$sql.'br'.mysqli_error());
  $data = mysqli_fetch_assoc($req);
  if($data['motDePasse'] != $pas) {
    echo $tab['18'];
    include('SeConnecter.php'); //On inclut le formulaire d'identification
    exit;
  }
  else {
    session_start();
    $_SESSION['motDePasse'] = $data['motDePasse'];
    $_SESSION['loginPersonne'] = $log;
    $_SESSION['nom'] = $data['nom'];
    $_SESSION['prenom'] = $data['prenom'];
    $_SESSION['id'] = $data['idPersonne'];
    $_SESSION['connect'] = 'ok';

    header('location: espaceClient.php');
  }
}
?>
