<!DOCTYPE html>
<html>

    <head>
        <title>Mantenimient de marques</title>
        <meta content="noindex, nofollow" name="robots">
        <link href='css/redirect_form.css' rel='stylesheet' type='text/css'>
        <!--== Include CSS File Here ==-->
    </head>

    <body>

        <?php
include "include/db.php";
?>

        <h2>Segur que vols borrar</h2>
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
  echo "<p>$nom</p>";
  echo '<form action="delete.php" method="POST" >';
  echo "<input type='hidden' id='uuidId' name='uuid' value='$uuid'>";
  echo "<input id='btn' name='submit' type='submit' value='Borrar'>";
  echo "<H1><a href='index.php'>NO</a></H1>";
  echo "</form>";
}
if(isset($_POST['submit'])){
  $stm = $pdo->prepare("DELETE FROM marques where  uuid=?");
  $uuid=$_POST['uuid'];
  $stm->bindParam(1, $uuid);
  if($stm->execute()) {
    header("Location: index.php");
} else {
  echo "<h2>Hi ha un error borrant la marca</h2>";
}
}
?>

    </body>

</html>