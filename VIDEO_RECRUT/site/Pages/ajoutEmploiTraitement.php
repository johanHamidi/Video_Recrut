<?php
include '../connectBd.inc.php';

session_start();

$codeEmploi= $_POST['codeEmploi'];
$libelleEmploi= $_POST['libelleEmploi'];
$contrat= $_POST['typeContrat'];
$desc= $_POST['description'];
$comp= $_POST['competence'];
$id= $_SESSION['idPersonne'];

$req = mysqli_query($link,"INSERT INTO EMPLOI(codeEmploi,libelle, description, type, IdPersonne, code)
          VALUES ('$codeEmploi','$libelleEmploi','$desc','$id','$contrat')");


if($res){
  echo "Emploi ajouté";
}else {
  echo "echoué";
}


 ?>
