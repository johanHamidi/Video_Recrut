<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="main.css" />
    <meta charset="utf-8">
  </head>
  <body>
      <form action="connectBD_reseau.php" method="post">
          <div id="cssformulaire">
            id_reseau : <input type="text" name="id_reseau" size="30" placeholder="Identifiant réseau (ex: 04)" required="required"/> <br><br>
            fonction : <input type="text" name="fonction" size="30" placeholder="Une fonction (ex: reseau4)" required="required"/> <br><br>
            <input type="submit" name="soumettre" value="Valider"/>
          </div>
      </form>
  </body>
</html>
