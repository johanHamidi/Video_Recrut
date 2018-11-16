
<?php
// On se connecte à notre
include '../connectBd.inc.php';

if(isset($_POST) && !empty($_POST['log']) && !empty($_POST['pas'])) {

  extract($_POST);
//   on recupère le password de la table qui correspond au login du visiteur
  $sql = "SELECT motDePasse FROM PERSONNE WHERE loginPersonne='".$log."'";
  $req = mysqli_query($link, $sql) or die('Erreur SQL !br'.$sql.'br'.mysqli_error());
  $data = mysqli_fetch_assoc($req);
  var_dump($data['motDePasse']);
  var_dump($pas);
  if($data['motDePasse'] != $pas) {
    echo 'Mauvais login  password. Merci de recommencer';
    include('SeConnecter.php'); //On inclut le formulaire d'identification
    exit;
  }
  else {
    session_start();
    $_SESSION['loginPersonne'] = $log;
    header('location: ../index.php');
  }
}

?>
