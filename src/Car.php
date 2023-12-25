<?php 
include 'moveTrait.php';
//session_destroy();
session_start();
class Car {
    public $first;
    public $des;
    public $fuel;
    public function __construct($first,$des,$fuel){
        $this->first=$first;      
        $stri=(string)$this->first;
        $_SESSION['fip']=array($stri[0],$stri[1]);
        $this->des=$des; 
        $strz =(string)$this->des; 
        $_SESSION['des']=array($strz[0],$strz[1]);
        $_SESSION['fuel']=$fuel;
    }
    use MoveTrait1;
    public function right(){
        $this->o=1;
        $this->z=0;
        return $this->move();
    }
    public function up(){
        $this->o=0;
        $this->z=1;
        return $this->move();
    }
    
}

?>