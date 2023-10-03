<?php
spl_autoload_register('autoload');
function autoload($classname){
  include_once 'classes/'.$classname.'.php';
}











