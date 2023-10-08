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
    $stri=[$x,$y];
    $_SESSION['fip']=$stri;
    $j = $strz[0];
    $k = $strz[1];
    $strz=[$j,$k];
    $_SESSION['sep']=$strz;
    $a= $j-$x;
    $b= $k-$y;
    $des=[$a,$b];
    $_SESSION['des']=$des;
    //print_r( $_SESSION['fip']);
   print_r( $_SESSION['des']);
}
start(13,46);

function right(){
  $x=$_SESSION['fip'][0]+=1;
  $d=$_SESSION['sep'][0];
  print_r($x);
    if($x==$d){
      echo 'u arrived';
    }elseif($x>$d){
      // echo 'u passed destination turn back';
    }else{
      // echo 'u are in right way';
    }
}
function up(){
  $x=$_SESSION['fip'][1]+=1;
  $d=$_SESSION['sep'][1];
    if($x==$d){
      echo 'u arrived';
    }elseif($x>$d){
      // echo 'u passed destination turn back';
    }else{
      // echo 'u are in right way';
    }
}
// function left(){
//   $x=$_SESSION['fip'][0]+=1;
//   $d=$_SESSION['des'][0];
//     if($x==$d){
//       echo 'u arrived';
//     }elseif($x>$d){
//       echo 'u passed destination turn back';
//     }else{
//       echo 'u are in right way';
//     }
// }
echo right();
 echo right();
echo up();
echo up();
 echo up();
 echo right();
// function up(){
//   $y+1;
// }
?>
