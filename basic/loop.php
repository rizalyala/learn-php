<?php

# While loop
// akan looping tanpa henti
$a = 1;
while ($a <= 5) {
    echo 'oke';
}

$a = 1;
while ($a <= 5) {
    echo 'oke' .$a.'<br>';
    $a++; //akan melooping sebanyak 5
}


# For Loop
// looping dengan format for (dimulai dari; sebanyak; increment)
for ($i=0; $i < 10; $i++) { 
    echo "nomer ke-$i<br>";
}

#Foreach
// Foreach hanya digunakan untuk array
$a = array('satu', 'dua', 'tiga');

foreach ($a as $key => $value) {
    echo "$value<br>";
}
?>