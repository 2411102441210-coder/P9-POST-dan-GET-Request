<?php
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];
$hasil_jumlah = $bilangan1 + $bilangan2;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 9.3 - Penjumlahan POST</title>
</head>
<body>
    <h1>Hasil Penjumlahan</h1>
    <p>Bilangan 1: **<?php echo $bilangan1; ?>**</p>
    <p>Bilangan 2: **<?php echo $bilangan2; ?>**</p>
    <p>Hasil Penjumlahan **<?php echo $bilangan1; ?> + <?php echo $bilangan2; ?>** adalah **<?php echo $hasil_jumlah; ?>**.</p>
</body>
</html>