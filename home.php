<?php 



trait DroneTrait{
    private $first;
    private $des;
    public function __construct($first,$des){
        $this->first=$first;
        $this->des=$des;
    } 

    public function getFirstPoint{
	  $stri = (string)$this->first;
    $x = $stri[0];
    $y = $stri[1];
    $stri=[$x,$y];
    $_SESSION['fip']=$stri;
    return $_SESSION['fip'];
    }

    public function getDesPoint{
    $strz = (string)$this->des;
    $j = $strz[0];
    $k = $strz[1];
    $strz=[$j,$k];
    $_SESSION['sep']=$strz;
    return $_SESSION['sep'];
    }
  public funcrion getTodoMove{
  

  }
}

class Drone{
    use DroneTrait;
}


?>