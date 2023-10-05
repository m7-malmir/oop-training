<html>
<head>

</head>
<body>
  <h2>Welcome to Sling Academy</h2>
  <button id="show-position">Show position</button>
  <div id="example-element">*</div>
  <div id="output"></div>

<?php
// function start($xy,$z){
//     $stri = (string)$xy;
//     $x = $stri[0];
//     $y = $stri[1];
//     $strz = (string)$z;
//     $j = $strz[0];
//     $k = $strz[1];
//     $a= $j-$x;
//     $b= $k-$y;
//     $des=[$a,$b];
//     print_r($des);
// }
// start(13,26);
$x=1;
$d=6;
function right(){
  global $x;
  global $d;
    $x=$x+1;
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
echo right();
echo right();
//echo right();
//echo right();
// function up(){
//   $y+1;
// }
?>
