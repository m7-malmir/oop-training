<?php
trait MoveTrait1{
      public $o; 
      public $z;
       public function move(){ 
        $_SESSION['fuel']=$_SESSION['fuel']-$this->fuel;
        if( $_SESSION['fuel'] >= 0){
            $x=$_SESSION['fip'][$this->z]+=1;
           if($x==$_SESSION['des'][$this->z] && $_SESSION['fip'][$this->o]==$_SESSION['des'][$this->o]){
             echo 'u arrived';
           }elseif($x>$_SESSION['des'][$this->z]){
             echo 'You passed destination, turn back';
           }else{
             echo 'You are in right way';
           }
        }else{
             echo 'Your fuel is finish';
        }
         return  $_SESSION['fip'];
    }

}
?>