<?php require_once('php/includes/autoload.inc.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1></h1>
<?php
  if(isset($_GET['end'])) {
    $spel = new Spel(true);
      } else {
    $spel = new Spel(false);
      }


  if(isset($_GET['id'])){
    $spel->turnKaart($_GET['id']);
    } else {
      $spel->check();
  }

  echo $spel->getHtml();
    $spel->save();

    if ($spel->getFinished()) {
      echo "<h1 class=\"gewonnen\">Lets gooo</h1>.";
  }
?>
     <br>
     <a  href="?end" ><button class="restart" name="button">Restart</button></a>
  </body>
</html>
