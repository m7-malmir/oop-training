<?php 
session_start();
class BaseMove{
    public $first;
    public $des;
    
    public function __construct($first,$des){
        $this->first=$first;
        $this->des=$des;
    } 

    public function getFirstPoint(){
        $stri = (string)$this->first;
        $x = $stri[0];
        $y = $stri[1];
        $stri=[$x,$y];
        $_SESSION['fip']=$stri;
        return $_SESSION['fip'];
    }

    public function getDesPoint(){
        $strz = (string)$this->des;
        $j = $strz[0];
        $k = $strz[1];
        $strz=[$j,$k];
        $_SESSION['sep']=$strz;
        return $_SESSION['sep'];
    }

    public function getTodoMove(){
        $a= $_SESSION['sep'][0]-$_SESSION['fip'][0];
        $b= $_SESSION['sep'][1]-$_SESSION['fip'][1];
        $des=[$a,$b];
        $_SESSION['des']=$des;
        return  $_SESSION['des'];
    }
}

class Car extends BaseMove{
    public $flag=0;
    public function __construct($first,$des,$fuel){
        $this->first=$first;
        $this->des=$des;
        $_SESSION['fuel']=$fuel;
    }
    public function right(){ 
        
        $_SESSION['fuel']=$_SESSION['fuel']-3.8;
        $x=$this->getFirstPoint()[0]+=1;
        $d=$this->getDesPoint()[0];
          if($x==$d){
            echo 'u arrived';
          }elseif($x>$d){
             echo 'u passed destination turn back';
          }else{
             echo 'u are in right way';
          }
          return $_SESSION['fip'];
      }
      function up(){
        $x=$_SESSION['fip'][1]+=1;
        $d=$_SESSION['sep'][1];
          if($x==$d){
            echo 'u arrived';
          }elseif($x>$d){
             echo 'u passed destination turn back';
          }else{
             echo 'u are in right way';
          }
          return $_SESSION['fip'];
      }
}
$newcar=new Car(11,44,14);
$newcar->right();
$newcar->right();
print_r($newcar->right());

//print_r($_SESSION);
?>