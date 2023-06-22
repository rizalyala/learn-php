<?php
// _SERVER
// server merupakan superglobal untuk menangkap informasi tentang header , paths , dan script
// PHP_SELF berguna untuk menangkap skrip di file yang sama.
// referensi lengkap ada di https://www.w3schools.com/php/php_superglobals_server.asp
echo $_SERVER['PHP_SELF'];


// _REQUEST
// Request berfungsi untuk menangkap apakah request server url GET dan POST
// _REQUEST akan menangkap data dari form yang bernama fname.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_REQUEST['fname']; //_REQUEST
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }

// _POST
// Merupakan fungsi superglobal untuk menangkap request POST saja.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['fname']; //_POST
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }

?>