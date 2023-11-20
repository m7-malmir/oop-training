<?php 
//session_destroy();
session_start();
class Car {
    public $first;
    public function __construct($first){
        $this->first=$first;      
          $stri =(string)$this->first; 
          $x = $stri[0];
          $y = $stri[1];
          $stri=[$x,$y];
          $_SESSION['fip']=$stri;
        
    }
    public function right(){ 
        //  $stri =(string)$this->first; 
        //  $x = $stri[0];
        //  $y = $stri[1];
        //  $stri=[$x,$y];
        //  $_SESSION['fip']=$stri;
         $_SESSION['fip'][0]+=1;
          return  $_SESSION['fip'];
      }
}
$newcar=new Car(23);
//print_r($_SESSION['fip']);
print_r($newcar->right());
 print_r($newcar->right());
 print_r($newcar->right());
//print_r($_SESSION);
?>









