<?php
include '../connectBd.inc.php';

$libelleEmploi= $_POST['libelleEmploi'];
$contrat= $_POST['typeContrat'];
$desc= $_POST['description'];
$comp= $_POST['competence'];
$id= $_POST['id'];

$query = "INSERT INTO EMPLOIS(codeEmploi,libelle, description, type, IdPersonne, code)
          VALUES (6,'$libelleEmploi','$desc','$contrat','$id',2)";
$res = mysqli_query($link,$query);

if($res){
  echo "Emploi ajouté";
}else {
  echo "echoué";
}


 ?>
