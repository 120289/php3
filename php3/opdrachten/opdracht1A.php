<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function my_autoloader($class) {
    include $class . '.php';
}

spl_autoload_register('my_autoloader');

// Geboorte
    $GName = new geboorte;
    $GName->setgeboorte(' 7mei2001');

    echo $GName->getgeboorte('');

// Voornaam
   $name = new geboorte;
    $name->setUsername(' pascal');

    echo $name->getUsername('');

// Achternaam
$aName = new geboorte;
$aName->setachternaam(' haverkamp');

echo $aName->getachternaam('');

    ?>
  </body>
</html>
