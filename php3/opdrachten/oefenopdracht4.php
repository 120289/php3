<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class User {
      private $username;

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
   echo $user->getUsername('pascal');
//...........................................................//
    class achternamen {
      private $achternaam;

      public function setachternaam($aName) {
        $this->achternaam = $aName;
      }

      public function getachternaam() {
        return $this->achternaam;
      }
    }
    $achternaam = new achternaam();
    $achternaam->setachternaam('haverkamp');

    echo $achternamen->achternaam;
    echo $achternamen->getachternaam('haverkamp');

//..................................................................//
    class geboorte {
      private $geboorte;

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
    echo $GName->getgeboorte('7mei2001');

    ?>
  </body>
</html>
