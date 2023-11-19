<?php 
//session_destroy();
class Car {
    public $first;
    public $des;
    public $fip;
    public $sep;
    public function __construct($first,$des,$fuel){
        $this->first=$first;
        $this->des=$des;
        //$_SESSION['fuel']=$fuel;
              if(!isset($_SESSION['fip'])){ 
                   $this->fip = $_SESSION['fip'];
                   session_start();
               }      
    }
    public function right(){ 
         $stri =(string)$this->first; 
         $x = $stri[0];
         $y = $stri[1];
         $stri=[$x,$y];
         $this->fip=$stri;
         $_SESSION['fip'][0]+=1;
         return $_SESSION['fip'];
      }
}
$newcar=new Car(23,44,14);
//print_r($_SESSION['fip']);
print_r($newcar->right());
print_r($newcar->right());
//print_r($newcar->right());
//print_r($_SESSION);
?>
