<?php
// Menerima data dari form menggunakan superglobal $_POST
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];

// Menampilkan hasil
echo "<p>Anda telah memasukkan bilangan pertama = " . $bilangan1 . "</p>";
echo "<p>Anda telah memasukkan bilangan kedua = " . $bilangan2 . "</p>";
?>