<?php
abstract class Car{
    public $first_place;
    public $destination;
    public $fuel;
    public function __construct($a,$b,$f){
        $this->first_place=$a;
        $this->destination=$b;
        $this->fuel=$f;
    }
     
function benz($a,$b,$fuel){
  global $flag_benz;
  $flag_benz=1;
  start($a,$b);
  $_SESSION['fuel']=$fuel;
}


}
