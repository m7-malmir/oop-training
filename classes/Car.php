<?php
abstract class Car{
    public $first_place;
    public $destination;
    public $fuel;
    public function __construct($a,$b,$f){
        $this->first_place=$a;
        $this->destination=$b;
        $this->fuel=$f;
    }
    abstract function fuel();
    abstract function speed();
    public function moveRight(){
        return true;
    }
    public function moveLeft(){
        //todo
    }
    public function moveUp(){
        //todo
    }
    public function moveDown(){
        //todo
    }
}
