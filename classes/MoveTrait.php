<?php

trait MoveTrait{
    public function __construct($fpoint,$destination){  
    $stri = (string)$fpoint;
    $x = $stri[0];
    $y = $stri[1];
    $strz = (string)$destination;
    $stri=[$x,$y];
    $_SESSION['fip']=$stri;
    $j = $strz[0];
    $k = $strz[1];
    $strz=[$j,$k];
    $_SESSION['sep']=$strz;
    $a= $j-$x;
    $b= $k-$y;
    $pointtodo=[$a,$b];
    $_SESSION['ptodo']=$pointtodo;
}
public function up(){
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

public function right(){
  global $flag_benz;
  if($flag_benz==1){
    $_SESSION['fuel']=$_SESSION['fuel']-3.8;
  }
  $x=$_SESSION['fip'][0]+=1;
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

}
    






