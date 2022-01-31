<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class User {
      public $username;

      public function setUsername($name) {
        $this->username = $name;
      }

      public function getUsername() {
        return $this->username;
      }
    }
    $user = new User();
    $user->setUsername('pascal');

    echo $user->username;
    $user->username = '';

//...........................................................//
    class achternaam {
      public $achternaam;

      public function setachternaam($aName) {
        $this->achternaam = $aName;
      }

      public function getachternaam() {
        return $this->achternaam;
      }
    }

    $naam = new achternaam();
    $naam->setachternaam(' haverkamp');

    echo $naam->achternaam;
    $naam->achternaam = '';

//..................................................................//
    class geboorte {
      public $geboorte;

      public function setgeboorte($aNaam) {
        $this->geboorte = $aNaam;
      }

      public function getgeboorte() {
        return $this->geboorte;
      }
    }

    $GName = new geboorte();
    $GName->setgeboorte(' 7mei2001');

    echo $GName->geboorte;
    $GName->geboorte = '';

    ?>
  </body>
</html>
