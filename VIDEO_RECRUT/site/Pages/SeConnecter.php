<?php include '../connectBd.inc.php';
  if(isset($_GET['langue']))
  $langue = $_GET['langue'];
include '../langue/'.$langue.'.php'; ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/main.css"/>
</head>
<body>
  <h2><?php echo $tab[6]; ?></h2>



  <div class="imgcontainer">
    <img src="../images/pic07.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <form action="connect.php?langue=<?php echo $langue;?>" method="post">
      <label for="uname"><b><?php echo $tab[7]; ?></b></label>
      <input type="text" placeholder="Entrer votre login" name="log" required> <br></br>

      <label for="psw"><b><?php echo $tab[8]; ?></b></label>
      <input type="password" placeholder="Entrer votre mot de passe" name="pas" required> <br></br>

      <button type="submit"><?php echo $tab[6]; ?></button> <br></br>
    </form>

  </div>

    <a href="../index.php?langue=<?php echo $langue;?>" class="button"><?php echo $tab[9]; ?></a></br></br>
    <a href="inscrire.php?langue=<?php echo $langue;?>" class="button"><?php echo $tab[10]; ?></a>

  </div>

</body>
</html>
