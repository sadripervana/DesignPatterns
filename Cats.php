<?php
  include_once("FurryPets.php");
  class Cats extends FurryPets
  {
    function __construct(){
      echo "Cats" . $this->fourLegs() . "<br>";
      echo $this->makesSound("Meow, purrr"). "<br>";
      echo $this->ownHouse() . "<br>";
    }

    private function ownHouse()
    {
      return "I'll just walk on this Keyboard." . "<br>";
    }
  }

  $cats = new Cats();
 ?>
