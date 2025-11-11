<?php
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contoh Request POST</title>
</head>
<body>
    <h1>Input Dua Bilangan</h1>
    <?php
    echo "<p>Anda telah memasukkan bilangan pertama = " . $bilangan1 . "</p>";
    echo "<p>Anda telah memasukkan bilangan kedua = " . $bilangan2 . "</p>";
    ?>
</body>
</html>