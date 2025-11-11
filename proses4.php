<?php
$bilangan1 = (int)$_POST['bil1'];
$bilangan2 = (int)$_POST['bil2'];

$pernyataan = "";
if ($bilangan1 > $bilangan2) {
    $pernyataan = "Bilangan pertama **($bilangan1)** lebih besar dari bilangan kedua **($bilangan2)**.";
} elseif ($bilangan1 < $bilangan2) {
    $pernyataan = "Bilangan pertama **($bilangan1)** lebih kecil dari bilangan kedua **($bilangan2)**.";
} else {
    $pernyataan = "Kedua bilangan **($bilangan1 dan $bilangan2)** adalah sama.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 9.4 - Pengujian Kondisi POST</title>
</head>
<body>
    <h1>Hasil Pengujian Kondisi</h1>
    <p>Bilangan 1: **<?php echo $bilangan1; ?>**</p>
    <p>Bilangan 2: **<?php echo $bilangan2; ?>**</p>
    <hr>
    <p>Hasil Perbandingan: **<?php echo $pernyataan; ?>**</p>
</body>
</html>