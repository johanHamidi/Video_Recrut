<?php include '../connectBd.inc.php';
if(isset($_GET['langue']))
$langue = $_GET['langue'];
include '../langue/'.$langue.'.php';
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/main.css"/>
</head>
<body>
  <h2>Se connecter</h2>

  <div class="imgcontainer">
    <img src="../images/pic07.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <form action="connect.php" method="post">
      <label for="uname"><b>Login :</b></label>
      <input type="text" placeholder="Entrer votre login" name="log" required> <br></br>

      <label for="psw"><b><?php echo $tab[8]; ?> : </b></label>
      <input type="password" placeholder="Entrer votre mot de passe" name="pas" required> <br></br>

      <button type="submit">Se connecter</button> <br></br>
    </form>

  </div>

    <a href="../index.php" class="button">Retour</a></br></br>
    <a href="inscrire.php" class="button">inscription</a>

  </div>

</body>
</html>
