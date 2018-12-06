<?php

include  '../connectBd.inc.php';


  $id_user = $_POST['IdPersonne'];
  $offre = $_POST['offre'];

  $rqt = "INSERT INTO CANDIDATURE(id_utilisateur,id_emplois) VALUES($id_user,$offre);";
  $result = mysqli_query($link, $rqt);

  $rqt = "SELECT id_candidature
          FROM CANDIDATURE
          WHERE id_utilisateur='$id_user'
          AND id_emplois = '$offre';";
  $result = mysqli_query($link, $rqt);

  if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
      $candidature = $row['id_candidature'];
    }
    $target_dir = "../uploads/candidature/$candidature/";
    mkdir($target_dir);

    if (isset($_FILES['CV'])) {
      $target_file = $target_dir . basename($_FILES["CV"]["name"]);
      $CVFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Si le fichier est en pdf et 500Mo max
      if ($_FILES["CV"]["size"] <= 500000 && $CVFileType == "pdf") {
          move_uploaded_file($_FILES["CV"]["tmp_name"], $target_file);
      }
      $rqt = "INSERT INTO DOCUMENTS(lien_documents,id_candidature,code_typedocument) VALUES('$target_file',$candidature,'CV');";
      $result = mysqli_query($link, $rqt);
    }

    if (isset($_FILES['LM'])) {
      $target_file = $target_dir . basename($_FILES["LM"]["name"]);
      $LMFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Si le fichier est en pdf et 500Mo max
      if ($_FILES["CV"]["size"] <= 500000 && $LMFileType == "pdf") {
          move_uploaded_file($_FILES["LM"]["tmp_name"], $target_file);
      }
      $rqt = "INSERT INTO DOCUMENTS(lien_documents,id_candidature,code_typedocument) VALUES('$target_file',$candidature,'LM');";
      $result = mysqli_query($link, $rqt);
    }

    if (isset($_FILES['VID'])) {
      $target_file = $target_dir . basename($_FILES["VID"]["name"]);
      $VIDFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Si le fichier est en pdf et 500Mo max
      if ($_FILES["VID"]["size"] <= 500000 && $VIDFileType == "mp4") {
          move_uploaded_file($_FILES["VID"]["tmp_name"], $target_file);
      }
      $rqt = "INSERT INTO DOCUMENTS(lien_documents,id_candidature,code_typedocument) VALUES('$target_file',$candidature,'VID');";
      $result = mysqli_query($link, $rqt);
    }
  }
   header("location:../index/index.php?lang=$lang&offre=$offre");
}
?>
