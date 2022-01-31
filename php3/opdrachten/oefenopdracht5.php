<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class User {
      private $_username;

      public function __construct($name) {
        $this->_username = $name;
      }

      public function getUsername() {
        return $this->_username;
      }
    }
    $user = new User('pascal');
    echo $user->getUsername();

//...........................................................//
    class achternamen {
      private $_achternaam;

      public function __construct($aName) {
        $this->_achternaam = $aName;
      }

      public function getachternaam() {
        return $this->_achternaam;
      }
    }
    $achternamen = new achternamen('haverkamp');
    echo $achternamen->getachternaam();
//..................................................................//
    class geboorte {
      private $_geboorte;

      public function __construct($aNaam) {
        $this->_geboorte = $aNaam;
      }

      public function getgeboorte() {
        return $this->_geboorte;
      }
    }

    $GName = new geboorte(' 7mei2001');
    echo $GName->getgeboorte();

    ?>
  </body>
</html>
