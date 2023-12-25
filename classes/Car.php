<?php 
include 'moveTrait1.php';
//session_destroy();
session_start();
class Car {
    public $first;
    public $des;
    public $fuel;
    public function __construct($first,$des,$fuel){
        $this->first=$first;      
          $stri =(string)$this->first; 
          $x = $stri[0];
          $y = $stri[1];
          $stri=[$x,$y];
          $_SESSION['fip']=$stri;

          $this->des=$des;    
          $strz =(string)$this->des; 
          $x = $strz[0];
          $y = $strz[1];
          $strz=[$x,$y];
          $_SESSION['des']=$strz;
          $_SESSION['fuel']=$fuel;
    }
    use MoveTrait1;
    public function right(){
        $this->o=1;
        $this->z=0;
        return $this->move();
    }
    public function left(){
        $this->o=0;
        $this->z=1;
        return $this->move();
    }
    
}

?>