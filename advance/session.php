<?php
// Session merupakan fungsi untuk menyimpan data user, apakah user sudah ada di penyimpanan?
// jika ada maka server akan mengalihkan vieew ke halaman home, jika tidak user tidak dikenal atau guest 
session_start();

// Menyimpan data dalam sesi
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'johndoe@example.com';

// Mengakses data sesi
echo "Username: " . $_SESSION['username'];
echo "Email: " . $_SESSION['email'];

// Mengakhiri sesi
session_destroy();
?>