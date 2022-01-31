<?php
class geboorte {
  public $username;

  public function setUsername($name) {
    $this->username = $name;
  }

  public function getUsername() {
    return $this->username;
  }

//...........................................................//
  public $achternaam;

  public function setachternaam($aName) {
    $this->achternaam = $aName;
  }

  public function getachternaam() {
    return $this->achternaam;
  }

//..................................................................//

  public $geboorte;

  public function setgeboorte($aNaam) {
    $this->geboorte = $aNaam;
  }

  public function getgeboorte() {
    return $this->geboorte;
  }
}
?>
