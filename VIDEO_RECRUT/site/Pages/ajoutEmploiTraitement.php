<?php
include '../connectBd.inc.php';
session_start();
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
           VALUES ('5','$libelleEmploi','$desc','a',$id,'$code')";
           var_dump($query);
$res = mysqli_query($link,$query);
if($res){
  echo "ajout realiser";
}
else {
   echo "echec";
}
 ?>
