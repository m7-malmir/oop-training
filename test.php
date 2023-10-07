<html>
<head>
</head>
<body>
  <h2>Welcome to Sling Academy</h2>
  <button id="show-position">Show position</button>
  <div id="example-element">*</div>
  <div id="output"></div>
<?php
session_start();
function start($xy,$z){
    $stri = (string)$xy;
    $x = $stri[0];
    $y = $stri[1];
    $strz = (string)$z;
    $j = $strz[0];
    $k = $strz[1];
    $a= $j-$x;
    $b= $k-$y;
    $des=[$a,$b];
    $_SESSION['des']=$des;
    print_r( $_SESSION['des']);
}
start(13,26);
// $x=1;
// $d=6;
function right(){
  $x=$_SESSION['des'][0]+=1;
  $d=$_SESSION['des'][1];
    if($x==$d){
      return $d;
    }elseif($x>$d){
      return false;
    }else{
      return $x;
    }
}
function left(){
  $x=$_SESSION['des'][0]-=1;
  $d=$_SESSION['des'][1];
    if($x==$d){
      return $d;
    }elseif($x>$d){
      return false;
    }else{
      return $x;
    }
}
echo right();
echo right();
echo left();
//echo left();
// echo right();
// echo right();
// function up(){
//   $y+1;
// }
?>
