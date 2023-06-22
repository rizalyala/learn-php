<?php

// class
class Fruit{
    public $name;
    public $color;

    // Methods
    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
        return $this->color;
    }
}


$apple = new Fruit('apple','red');
$mango = new Fruit('mango','orange');

// Tidak diperlukan lagi karena contruct akan otomatis menjalankan fungsi set_name
// $apple->set_name('apple','red');
// $mango->set_name('mango','orange');

echo $apple->get_name();
echo "<br>";
echo $mango->get_name();

?>