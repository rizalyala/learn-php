<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // memanggil fungsi


// Fungsi dengan parameter
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

?>