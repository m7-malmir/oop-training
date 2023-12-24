<?php
include 'Car.php';
class Ferrari extends Car{

    use carTrait;
    public $fuel=5;

}