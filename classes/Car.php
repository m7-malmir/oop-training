<?php 
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
    public function right(){ 
        $_SESSION['fuel']=$_SESSION['fuel']-$this->fuel;
         $x=$_SESSION['fip'][0]+=1;
         $d=$_SESSION['des'][0];
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
        $_SESSION['fuel']=$_SESSION['fuel']-$this->fuel;
        $x=$_SESSION['fip'][1]+=1;
        $d=$_SESSION['des'][1];
        if($x==$d){
            echo 'u arrived';
          }elseif($x>$d){
             echo 'u passed destination turn back';
          }else{
             echo 'u are in right way';
          }
          return  $_SESSION['fip'];
    }
}

?>