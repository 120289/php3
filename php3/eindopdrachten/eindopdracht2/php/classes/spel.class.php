<?php
  class Spel {
    private $numbers = array(1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8);
    private $kaarten = array();
    private $finished = false;

    public function __construct($new){
      session_start();
      if(isset($_SESSION['spel']) && !$new){
        $this->kaarten = $_SESSION['spel'];

      } else {
        for ($i=0; $i < count($this->numbers); $i++) {
          $kaart = new Kaart();
          $kaart->setNumber($this->numbers[$i]);
          array_push($this->kaarten, $kaart);
        }
        shuffle($this->kaarten);
        for($i = 0; $i<count($this->kaarten); $i++){
          $this->kaarten[$i]->setIndex($i);
        }
      }
    }

    public function getHtml(){
      $output = "";

      for ($r=0; $r < 4; $r++) {
        for ($c=0; $c < 4; $c++) {
          $output .= $this->kaarten[$r*4 + $c]->getHtml();
        }
        $output .= "<br>";
      }
      return $output;
    }

    public function getFinished() {
      return $this->finished;
    }

    private function countkaarten(){
      return count($this->kaarten);
    }

    public function save(){
      $_SESSION['spel'] = $this->kaarten;
    }

  public function turnKaart($index) {
    $debug = "";
    $guessed = 0;
    $firstopen = null;
    $open = array();
    $this->kaarten[$index]->turn();
    $debug .= "$index: ".$this->kaarten[$index];

    for ($i=0; $i < $this->countKaarten(); $i++) {
      if ($this->kaarten[$i]->getState() == "guessed") {
        $guessed++;
      }

      if ($this->kaarten[$i]->getState()=="open") {
        array_push($open, $this->kaarten[$i]);
      }
    }

    switch(count($open)){
      case 0:
      break;
      case 1:
      break;
      case 2:
      if ($open[0]->getNumber()==$open[1]->getNumber()) {
        $open[0]->setState("guessed");
        $open[1]->setState("guessed");
        $guessed+=2;
      }
      break;
      case 3:
      if($open[0] != $this->kaarten[$index]) $open[0]->turn();
      if($open[1] != $this->kaarten[$index]) $open[1]->turn();
      if($open[2] != $this->kaarten[$index]) $open[2]->turn();
    }

    if ($guessed == 16) {
      $this->finished = true;
    }

    echo $debug . "<br>";
  }

  public function check(){
    for ($i=0; $i < $this->countKaarten(); $i++) {
      if ($this->kaarten[$i]->getState()=="open") {
        $this->kaarten[$i]->turn(true);
      }
    }
  }
}
?>
