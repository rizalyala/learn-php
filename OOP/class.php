<?php

// class
class Fruits{
    public $name;
    public $color;

    // Methods
    function set_name($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
        return $this->color;
    }
}


$apple = new Fruits();
$mango = new Fruits();

$apple->set_name('apple','red');
$mango->set_name('mango','orange');

echo $apple->get_name();
echo "<br>";
echo $mango->get_name();

?>