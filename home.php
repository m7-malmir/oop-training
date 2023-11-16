<?php 
session_start();
//session_destroy();
// class BaseMove{
//     public $first;
//     public $des;
    
//     public function __construct($first,$des){
//         $this->first=$first;
//         $this->des=$des;
//     } 

//     public function getFirstPoint(){
//         $stri = (string)$this->first;
//         $x = $stri[0];
//         $y = $stri[1];
//         $stri=[$x,$y];
//         $_SESSION['fip']=$stri;
      
//     }

//     public function getDesPoint(){
//         $strz = (string)$this->des;
//         $j = $strz[0];
//         $k = $strz[1];
//         $strz=[$j,$k];
//         $_SESSION['sep']=$strz;
      
//     }

//     public function getTodoMove(){
//         $a= $_SESSION['sep'][0]-$_SESSION['fip'][0];
//         $b= $_SESSION['sep'][1]-$_SESSION['fip'][1];
//         $des=[$a,$b];
//         $_SESSION['des']=$des;
       
//     }
// }

class Car {
    public $first;
    public $des;
    public $flag=0;
    public $fip=$_SESSION['fip'];
    public $sep=$_SESSION['sep'];
    public function __construct($first,$des,$fuel){
        $this->first=$first;
        $this->des=$des;
        $_SESSION['fuel']=$fuel;
    }
     public function getFirstPoint(){
        $stri = (string)$this->first;
        $x = $stri[0];
        $y = $stri[1];
        $stri=[$x,$y];
        $_SESSION['fip']=$stri;
    }

    public function getDesPoint(){
        $strz = (string)$this->des;
        $j = $strz[0];
        $k = $strz[1];
        $strz=[$j,$k];
        $_SESSION['sep']=$strz;
    }

    public function getTodoMove(){
        $a= $_SESSION['sep'][0]-$_SESSION['fip'][0];
        $b= $_SESSION['sep'][1]-$_SESSION['fip'][1];
        $des=[$a,$b];
        $_SESSION['des']=$des;
    }
    public function right(){ 
         $this->getFirstPoint();
         $this->getDesPoint();
          $this->getTodoMove();
        $_SESSION['fuel']=$_SESSION['fuel']-3.8;
        $this->$fip[0]+=1;
        $x=$_SESSION['fip'][0];
        $d=$_SESSION['sep'][0];
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
print_r($newcar->right());
 print_r($newcar->right());
 ///print_r($newcar->right());
// print_r($newcar->up());
// print_r($newcar->up());
// print_r($newcar->up());
//print_r($_SESSION);
?>