<?php

class Car{
    public $name;
    public $model;


    function __construct($name,$model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    function descrip(){
        echo "this car name is {$this->name} and model is {$this->model}";
    }
}


class Buggati extends Car{
    public function model(){
        echo 'What this name of car?';
    }
}

$bugati = new Buggati('bugati','sport car');
$bugati->model();
$bugati->descrip();

?>