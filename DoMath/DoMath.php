<?php
// Do math
class DoMath {
  private $sum;
  private $quotient;

  public function simpleAdd($first, $second){
    $this->sum = ($first + $second);
    return $this->sum;
  }

  public function simpleDivide($divident, $divisor){
    $this->quotient = ($divident / $divisor);
    return $this->quotient;
  }
}
 ?>
