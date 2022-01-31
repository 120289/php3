<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> dit is mijn huis</h1>
  <?php
    class Woning {
      private $aantalKamers;
      private $aantalKachels;
      private $aantalVerwarming;
      private $Straatnaam;
      private $Huisnummer;
      private $Woonplaats;
      private $Vierkantemeter;
      private $WOZ;
      private $Belasting;


      public function setAantalkamers($aantal){
        $this->aantalKamers  = $aantal;
      }
      public function setAantalkachels($aantal){
        $this->aantalKachels = $aantal;
      }

      public function setAantalVerwarming($aantal){
        $this->aantalVerwarming = $aantal;
      }

      public function setStraatnaam($straat){
        $this->Straatnaam = $straat;
      }

      public function setHuisnummer($Hnummer){
        $this->Huisnummer = $Hnummer;
      }

      public function setWoonplaats($plaats){
        $this->Woonplaats  = $plaats;
      }

      public function setVierkantemeter($meter){
        $this->vierkantemeter  = $meter;
      }

      public function setWOZ($WOZwaarde){
        $this->WOZ  = $WOZwaarde;
      }

      public function setBelasting($geld){
        $this->Belasting  = $geld;
      }

      public function __toString(){
        return "dit is een huis met " . $this->aantalKamers . " kamers <br> dit is een huis met " . $this->aantalKachels .
        " kachels <br> de verwarming in het huis is een " . $this->aantalVerwarming . "<br> de staatnaam waar het huis is " .
        $this->Straatnaam . "<br> het Huisnummer is " . $this->Huisnummer . "<br> de woning is geplaatst in " . $this->Woonplaats .
        "<br> het is " . $this->vierkantemeter . " vierkante meter groot <br> Het WOZwaarde is " . $this->WOZ .
        " euro <br> door de WOZwaarde is het belasting 6000 plus dat 1 kamer 200 kost en de radiators 100 per stuk, is het belasting " . $this->Belasting . " euro per jaar";
      }
    }


    $woning = new Woning();
    $woning->setAantalkamers(4);
    $woning->setAantalKachels(2);
    $woning->setAantalVerwarming("radiator");
    $woning->setStraatnaam("De goudeneendweg");
    $woning->setHuisnummer("69");
    $woning->setWoonplaats("Atlantica");
    $woning->setVierkantemeter("200");
    $woning->setWOZ("250 000");
    $woning->setBelasting("7000");
    echo $woning;
  ?>
  </body>
</html>
