<?php 
require_once 'vendor/autoload.php';

$newcar=new Ferrari(23,34,10);
print_r($_SESSION['fip']);
print_r($newcar->right());
print_r($newcar->up());

?>