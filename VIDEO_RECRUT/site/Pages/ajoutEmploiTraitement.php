<?php
include '../connectBd.inc.php';

session_start();
<<<<<<< HEAD
 $libelleEmploi = $_POST['libelleEmploi'];
 $contrat = $_POST['typeContrat'];
 $desc = $_POST['description'] ;
$comp = $_POST['competence'] ;
 $id = $_SESSION['id'];
 $req = "SELECT code FROM type_de_contrat WHERE libelle = '".$contrat."'";
 $value = mysqli_query($link,$req);
 $val = mysqli_fetch_assoc($value);
 $code = $val["code"];
 $query = "INSERT INTO emploi(codeEmploi,libelle,description,type,idPersonne,code)
           VALUES ('10','$libelleEmploi','$desc','a',$id,'$code')";
$res = mysqli_query($link,$query);
if($res){
  echo "ajout realiser";
=======
>>>>>>> 52262d61357c1e313b506e317a73041dd9f99dac

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
