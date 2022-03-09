<!DOCTYPE html>
<!--
  Aquest codi té un error de seguretat
  això no s'ha de fer així, ja que pot comprometre
  la seguretat de l'aplicació.
  Es posa per mostrar db, parametres i redirect
  -->
<html>

    <head>
        <title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
        <meta content="noindex, nofollow" name="robots">
        <link href='css/redirect_form.css' rel='stylesheet' type='text/css'>
        <!--== Include CSS File Here ==-->
    </head>

    <body>

        <div class="main">
            <div class="first">
                <h2>Gràcies</h2>
                <?php
include "include/db.php";
?>

                <?php
$nom="";
$uuid="";
if (isset($_GET['id'])){
  $id = $_GET['id'];
  $statement = $pdo->prepare("SELECT * FROM marques where uuid=?");
  $statement->bindParam(1, $id);
  if ($statement->execute()) {

    foreach ($statement->fetchAll() as $row) {
        $nom = $row['nom'];
        $uuid = $row['uuid'];
    }
}
      echo "<p> $nom</p>";
      echo "<p><a href='edit.php?id=".$uuid."'>Editar</a></p>";
  
}
?>
                <div><a href="index.php">Anar al Llistat</a></div>
            </div>

        </div>
    </body>

</html>