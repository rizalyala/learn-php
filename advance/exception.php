<?php
// Exception merupakan penjegahan error, jika tidak yakin dengan baris kode atau ingin mengetahui error
// maka exception perlu di terapkan

// kode berikut akan memunculkan error pada browser
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

echo divide(5, 0);
// -----------------------------------------------
// maka dibuat exception
function divides($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

// try catch
try {
  echo divides(5, 0);
} catch(Exception $e) {
  echo "Unable to divide.";
}

?>

