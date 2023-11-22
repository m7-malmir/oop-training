<?php 
//session_destroy();
session_start();
class Car {
public $first;
public $des;
public $fuel;
public function __construct($first,$des,$fuel){
        $this->first=$first;   
        $this->des=$des;
        $this->fuel=$fuel;
          $stri =(string)$this->first; 
          $x = $stri[0];
          $y = $stri[1];
          $stri=[$x,$y];
          $_SESSION['fip']=$stri;
        $strz = (string)$z;
    $j = $strz[0];
    $k = $strz[1];
    $strz=[$j,$k];
    $_SESSION['sep']=$strz;
    $a= $j-$x;
    $b= $k-$y;
    $des=[$a,$b];
    $_SESSION['des']=$des;
    }
    public function right(){ 
         $_SESSION['fip'][0]+=1;
          return  $_SESSION['fip'];
      }
public function up(){ 
         $_SESSION['fip'][1]+=1;
          return  $_SESSION['fip'];
      }
}
$newcar=new Car(23,56,88);
print_r($_SESSION['fip']);
print_r($newcar->right());
 print_r($newcar->up());
 //print_r($newcar->right());
//print_r($_SESSION);

?>














