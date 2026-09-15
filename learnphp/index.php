<?php

class Box
{

  public $isOpen = false;
  public $hasBeenOpened = false;

  public function __construct(public $width, public $hight, public $length)
  {
    var_dump('Object Created');
  }


  public function open()
  {
    $this->isOpen = true;
  }

  public function volume()
  {
    return $this->width * $this->hight * $this->length;
  }
}

class Metalbox extends Box
{
  public $weightPerUnit;

  public function mass()
  {
    return $this->weightPerUnit * $this->volume();
  }
}

$metal1 = new Metalbox(1, 2, 3);
$metal1->weightPerUnit = 1;
var_dump($metal1->mass(), $metal1);
