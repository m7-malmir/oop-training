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
        $strz = (string)$this->des;
    $j = $strz[0];
    $k = $strz[1];
    $strz=[$j,$k];
    $_SESSION['sep']=$strz;
    $a= $j-$x;
    $b= $k-$y;
    $des=[$a,$b];
    $_SESSION['des']=$des;
    $_SESSION['fuel']=$this->fuel;
    }
    public function right(){ 
	 $_SESSION['fuel']  = $_SESSION['fuel']-30;
      $x= $_SESSION['fip'][0]+=1;
$d=$_SESSION['sep'][0];
if($x==$d){
      echo 'u arrived';
    }elseif($x>$d){
       echo 'u passed destination turn back';
    }else{
       echo 'u are in right way';
    }
          return  $_SESSION['fip'];
      }
public function up(){ 
	  $_SESSION['fuel'] = $_SESSION['fuel']-30;
         $_SESSION['fip'][1]+=1;
          return  $_SESSION['fip'];
      }
}
$newcar=new Car(23,56,88);
//print_r($_SESSION['fip']);

print_r($newcar->right());
 print_r($newcar->up());
 //print_r($newcar->right());
//print_r($_SESSION);
print_r($_SESSION['fuel']);

?>














